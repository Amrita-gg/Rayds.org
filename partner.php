<?php include 'includes/header.php'; ?>
<?php include 'includes/headlink.php'; ?>

<div class="content-wrapper mt-20 mx-10">
    <div class="row">
        <!-- Left Column (Contact Form) -->
        <div class="col-md-6 position-lg-sticky">
            <!-- Prices block BEGIN -->
            <div class="prices-block content content-center">
                <h1 class="margin-bottom-50">
                    <strong>For Travel and Utility Portal Demo and Pricing</strong><br>
                    Please contact <a href="https://api.whatsapp.com/send?phone=917304820830" target="_blank">+91 7304820830</a>
                </h1>

                <!-- Contact Form -->
                <form method="POST" action="enquiry.php" id="register-form" class="row" novalidate>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" required>
                            <input type="hidden" name="pageName" value="partners.php">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="tel" id="mobile" name="mobile" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea id="comments" name="comments" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Captcha</label>
                            <div class="g-recaptcha" data-sitekey="6LcG-BUUAAAAAFq40YPnaxQwJRyfPSnQOk_kEtHQ"></div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Prices block END -->
        </div>

        <!-- Right Column (Partners & Integrations) -->
        <div class="col-md-6">
            <!-- Partners & Integrations block BEGIN -->
            <div class="testimonials-block content content-center margin-bottom-40" id="partners">
                <h3 class="text-center">Partners &amp; <strong>Integrations</strong></h3>
                <p class="text-center">We recognize that we can’t do everything – and that's why we have built strong links from Rayds to other applications that can add value for you.</p>

                <div class="row">
                    <!-- Integration logos -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/amazon.png" title="Ixigo" alt="Ixigo API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/arzoo.png" title="Expedia" alt="Expedia API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/atom.png" title="Cleartrip" alt="Cleartrip API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/bluestar.png" title="MakeMyTrip" alt="MakeMyTrip API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/ccavenue.png" title="Goibibo" alt="Goibibo API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/ccr.png" title="Airbnb" alt="Airbnb API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/citrus.png" title="AirAsia" alt="AirAsia API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/ctrls.jpg" title="Air India" alt="Air India API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/cyberplat.png" title="IndiGo" alt="IndiGo API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/desiya.png" title="SpiceJet" alt="SpiceJet API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/easypay.jpg" title="Vistara" alt="Vistara API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/ebs.png" title="Jet Airways" alt="Jet Airways API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/easypolicy.jpg" title="Jet Privilege" alt="Jet Privilege API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/expedia.png" title="Visa" alt="Visa API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/ft_cash.png" title="MasterCard" alt="MasterCard API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/galileo.png" title="PayPal" alt="PayPal API Integration" class="img-fluid">  
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/google-cloud.jpg" title="Razorpay" alt="Razorpay API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/getmytrip.png" title="HDFC Bank" alt="HDFC Bank API Integration" class="img-fluid">  
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/gta.png" title="Hotelogix" alt="Hotelogix API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/hermes.png" title="Ibibo" alt="Ibibo API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/hotels_pro.png" title="Ixigo" alt="Ixigo API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/icashcard.png" title="MakeMyTrip" alt="MakeMyTrip API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/icici-bank.jpg" title="OYO" alt="OYO API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/nsdl.jpg" title="Paytm" alt="Paytm API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/paytm.png" title="RedBus" alt="RedBus API Integration" class="img-fluid">
                    </div> 
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/payumoney.png" title="SOTC" alt="SOTC API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/payworld.png" title="Travelocity" alt="Travelocity API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/prabhu_money.png" title="Yatra" alt="Yatra API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/razorpay.jpg" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/redbus.png" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/rezlive.png" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/rooms_xml.png" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/shmart.png" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/spice-money.jpg" title="Zomato" alt="Zomato API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/sabre.png" title="Sabre" alt="Sabre API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/tbo.png" title="Travel Boutique Online" alt="TBO API Integration" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/tripjack.jpg" class="img-fluid" alt="Tripjack">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="./assets/img/partners/yatra.jpg" class="img-fluid" alt="Yatra">
                    </div>
                    <!-- Add more logos here in the same format -->
                    <div class="col-md-12">
                        <p>And many more...</p>
                    </div>
                </div>
            </div>
            <!-- Partners & Integrations block END -->
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
