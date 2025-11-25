<?php
require_once(SITE_WWW_ADMIN_PATH_GLOBAL.'aws/aws-autoloader.php');
	
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

function send_mail_aws($ToEmail, $Subject, $body, $header = "")
{
	global $domain;	
	global $aws_s3_key;	
	global $aws_s3_secret;
	
	//$FromMail = "enquiry@rayds.com"; 
	$urlBreak = explode(".",$domain);
	$trimKey = $urlBreak[0];
	//$FromMail = str_replace("www.","donotreply@",$domain); 
	$FromMail = str_replace($trimKey.".","donotreply@",$domain);
	
	$user = $aws_s3_key;
	$pass = $aws_s3_secret;
	
	$host = 'tls://email-smtp.ap-south-1.amazonaws.com';
	$port = 465; //587,465,25
	
	$SesClient = new SesClient([
		'version' => 'latest',
		'region'  => 'ap-south-1',
		'credentials' => [
			'key' => $user,
			'secret' => $pass,
		]
	]);
	
	$recipient_emails = [$ToEmail];		
	$char_set = 'UTF-8';

	try 
	{
		$result = $SesClient->sendEmail([
			'Destination' => [
				'ToAddresses' => $recipient_emails,
			],
			'ReplyToAddresses' => [$FromMail],
			'Source' => $FromMail,
			'Message' => [
				'Body' => [
					'Html' => [
						'Charset' => $char_set,
						'Data' => $body,
					]
				],
				'Subject' => [
					'Charset' => $char_set,
					'Data' => $Subject,
				],
			]
		]);
		
		//$messageId = $result['MessageId'];
	 } catch (AwsException $e) {			
		// output error message if fails
		// echo $e->getMessage();
		// echo("The email was not sent. Error message: ".$e->getAwsErrorMessage()."\n");
		// echo "\n";
	}
}

function sendRAWEmailViaSES($myArrayToAdresses, $myFromAdress, $mySubject, $myHTMLBody, $myFilePath, $defaultFileName="filename", $myFileMimeType="text/plain")
{
    global $domain;	
	global $aws_s3_key;	
	global $aws_s3_secret;

	$gAWS_SES_client = SesClient::factory(array(
		'version'=> 'latest',
		'region' => 'ap-south-1',
		'credentials' => array(
			'key' => $aws_s3_key,
			'secret'  => $aws_s3_secret
		) 
	));
	
	// Check if array of email or single email
	if(!is_array($myArrayToAdresses))
	{
		$myArrayToAdresses = array($myArrayToAdresses);
	}
	
	$myStringToAddresses = implode(",", $myArrayToAdresses);

	// Check if from email id defined
	if($myFromAdress == "self")
	{
		// $myFromAdress = "mail.rayds@gmail.com";
		$myFromAdress = str_replace("www.","donotreply@",$domain);
	}
	
    

    $mySeparator = md5(time());
    $mySeparator_multipart = md5($mySubject . time());      

    $myMessage = "";

    $myMessage .= "MIME-Version: 1.0\n";

    $myMessage .= "To: ".$myStringToAddresses."\n"; 
    $myMessage .= "From:".$myFromAdress."\n";   
    $myMessage .= "Subject:".$mySubject."\n";

    $myMessage .= "Content-Type: multipart/mixed; boundary=\"".$mySeparator_multipart."\"\n";
    $myMessage .= "\n--".$mySeparator_multipart."\n";

    $myMessage .= "Content-Type: multipart/alternative; boundary=\"".$mySeparator."\"\n";
    $myMessage .= "\n--".$mySeparator."\n";

    $myMessage .= "Content-Type: text/html; charset=\"UTF-8\"\n";
    $myMessage .= "\n".$myHTMLBody."\n";
    $myMessage .= "\n--".$mySeparator."--\n";
	
	// ------- attachment -------- //
	if(is_array($myFilePath))
	{
		foreach($myFilePath as $myFilePathVal)
		{
			if($defaultFileName == "filename")
			{
				$myFileName = basename($myFilePathVal);
			}
			else
			{
				$myFileName = $defaultFileName;
			}

			$myDataAttachedFile = file_get_contents($myFilePathVal);
			$myDataAttachedFile = chunk_split(base64_encode($myDataAttachedFile));  

			$myMessage .= "--".$mySeparator_multipart."\n";
			$myMessage .= "Content-Type: ".$myFileMimeType."; name=\"".$myFileName."\"\n";
			$myMessage .= "Content-Disposition: attachment; filename=\"".$myFileName."\"\n";
			$myMessage .= "Content-Transfer-Encoding: base64\n\n";
			$myMessage .= $myDataAttachedFile."\n";
			$myMessage .= "--".$mySeparator_multipart."\n";
		}
	}
	else if($myFilePath != "")
	{
		if($defaultFileName == "filename")
		{
			$myFileName = basename($myFilePath);
		}
		else
		{
			$myFileName = $defaultFileName;
		}

		$myDataAttachedFile = file_get_contents($myFilePath);
		$myDataAttachedFile = chunk_split(base64_encode($myDataAttachedFile));  

		$myMessage .= "--".$mySeparator_multipart."\n";
		$myMessage .= "Content-Type: ".$myFileMimeType."; name=\"".$myFileName."\"\n";
		$myMessage .= "Content-Disposition: attachment; filename=\"".$myFileName."\"\n";
		$myMessage .= "Content-Transfer-Encoding: base64\n\n";
		$myMessage .= $myDataAttachedFile."\n";
		$myMessage .= "--".$mySeparator_multipart."--";
	}
	// ------- attachment -------- //

    $myArraySES = [
        'Source'       => $myFromAdress,
        'Destinations' => $myArrayToAdresses,
        'RawMessage'   => [
            'Data' => $myMessage
        ]
    ];
    try
	{
        $myResult = true;
        $myAPIResult = $gAWS_SES_client->sendRawEmail($myArraySES); 
        
		return "send";
		
    } catch (Exception $myObjError) {
        //An error happened and the email did not get sent
        $myErrorInfo = $myObjError->getMessage();
		
		return $myErrorInfo;
    }   
}

function sendRAWEmailViaSESWithMultipleAttachment($myArrayToAdresses, $myFromAdress, $mySubject, $myHTMLBody, $myFilePaths, $defaultFileName="filename",$myFileMimeType="text/plain")
{
    global $domain;	
	global $aws_s3_key;	
	global $aws_s3_secret;

	$gAWS_SES_client = SesClient::factory(array(
		'version'=> 'latest',
		'region' => 'ap-south-1',
		'credentials' => array(
			'key' => $aws_s3_key,
			'secret'  => $aws_s3_secret
		) 
	));
	
	// Check if array of email or single email
	if (!is_array($myArrayToAdresses)) {
		$myArrayToAdresses = array($myArrayToAdresses);
	}
	
	$myStringToAddresses = implode(",", $myArrayToAdresses);

	// Check if from email id defined
	if ($myFromAdress == "self") {
		$myFromAdress = str_replace("www.", "donotreply@", $domain);
	}
	
    

    $mySeparator = md5(time());
    $mySeparator_multipart = md5($mySubject . time());      

    $myMessage = "";

    $myMessage .= "MIME-Version: 1.0\n";

    $myMessage .= "To: ".$myStringToAddresses."\n"; 
    $myMessage .= "From:".$myFromAdress."\n";   
    $myMessage .= "Subject:".$mySubject."\n";

    $myMessage .= "Content-Type: multipart/mixed; boundary=\"".$mySeparator_multipart."\"\n";
    $myMessage .= "\n--".$mySeparator_multipart."\n";

    $myMessage .= "Content-Type: multipart/alternative; boundary=\"".$mySeparator."\"\n";
    $myMessage .= "\n--".$mySeparator."\n";

    $myMessage .= "Content-Type: text/html; charset=\"UTF-8\"\n";
    $myMessage .= "\n".$myHTMLBody."\n";
    $myMessage .= "\n--".$mySeparator."--\n";
	
	// ------- attachments -------- //
	if (is_array($myFilePaths)) {
		foreach ($myFilePaths as $myFilePath) {
			
			if($defaultFileName == "filename")
			{
				$myFileName = basename($myFilePath);
			}
			else
			{
				$myFileName = $defaultFileName;
			}

			$myDataAttachedFile = file_get_contents($myFilePath);
			$myDataAttachedFile = chunk_split(base64_encode($myDataAttachedFile));  

			$myMessage .= "--".$mySeparator_multipart."\n";
			$myMessage .= "Content-Type: ".$myFileMimeType."; name=\"".$myFileName."\"\n";
			$myMessage .= "Content-Disposition: attachment; filename=\"".$myFileName."\"\n";
			$myMessage .= "Content-Transfer-Encoding: base64\n\n";
			$myMessage .= $myDataAttachedFile."\n";
			$myMessage .= "--".$mySeparator_multipart."\n";
		}
	} else if ($myFilePaths != "") {
		
		if($defaultFileName == "filename")
		{
			$myFileName = basename($myFilePaths);
		}
		else
		{
			$myFileName = $defaultFileName;
		}

		$myDataAttachedFile = file_get_contents($myFilePaths);
		$myDataAttachedFile = chunk_split(base64_encode($myDataAttachedFile));  

		$myMessage .= "--".$mySeparator_multipart."\n";
		$myMessage .= "Content-Type: ".$myFileMimeType."; name=\"".$myFileName."\"\n";
		$myMessage .= "Content-Disposition: attachment; filename=\"".$myFileName."\"\n";
		$myMessage .= "Content-Transfer-Encoding: base64\n\n";
		$myMessage .= $myDataAttachedFile."\n";
		$myMessage .= "--".$mySeparator_multipart."--";
	}
	// ------- attachments -------- //

    $myArraySES = [
        'Source'       => $myFromAdress,
        'Destinations' => $myArrayToAdresses,
        'RawMessage'   => [
            'Data' => $myMessage
        ]
    ];
	
    try {
        $myResult = true;
        $myAPIResult = $gAWS_SES_client->sendRawEmail($myArraySES); 
        
		return "send";
		
    } catch (Exception $myObjError) {
        // An error happened and the email did not get sent
        $myErrorInfo = $myObjError->getMessage();
		return $myErrorInfo;
    }   
}

/* 
function send_mail_aws($ToEmail, $Subject, $body, $header = "")
{
	global $domain;	
	global $aws_s3_key;	
	global $aws_s3_secret;
	$FromMail = str_replace("www.","donotreply@",$domain);
	
	//raydssmtp
	$user = "AKIAIXVUE6EBV7BE7CFA"; //"AKIAJVSOWJ7I46N65SOA";
	$pass = "AmELcoi8TsYt8QP9q5ywqNoCDxJRPM+oa4kJTw06+lSa"; //"AnhABJ9SZbvvQN2+FGz4abADojohX+n4tqKcF6UbeM6E";
	
	$host = 'tls://email-smtp.us-east-1.amazonaws.com';
	$port = 465; //587,465,25
	
	$body = base64_encode($body);

	$template = "Subject: $Subject\r\n"
	."To: <$ToEmail>\r\n"
	."From: $FromMail\r\n"
	."MIME-Version: 1.0\r\n"
	."Content-Type: text/html; charset=utf-8\r\n"
	."Content-Transfer-Encoding: base64\r\n\r\n"
	."$body\r\n.";
	
	if ($h = fsockopen($host, $port))
	{
		$data = array(
			0,
			"EHLO $host",
			'AUTH LOGIN',
			base64_encode($user),
			base64_encode($pass),
			"MAIL FROM: <$FromMail>",
			"RCPT TO: <$ToEmail>",
			'DATA',
			$template
		);
		
		foreach($data as $c)
		{
			$c && fwrite($h, "$c\r\n");
			while(substr(fgets($h, 256), 3, 1) != ' '){}
		}
		
		fwrite($h, "QUIT\r\n");
		return fclose($h);
	}
}
 */
?>