<?php include 'includes/headlink.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="bg-soft-primary">
  <div class="container text-center mt-20">
    <h1>References</h1>
    <p>Here are some references that can help you understand the concepts better:</p>       

    <div class="row justify-content-center align-items-start">
      <?php 
        $themes = [
          ["img" => "t1.png", "title" => "Theme 1"],
          ["img" => "t2.png", "title" => "Theme 2"],
          ["img" => "t3.png", "title" => "Theme 3"],
          ["img" => "t4.png", "title" => "Theme 4"],
          ["img" => "t5.png", "title" => "Theme 5"],
          ["img" => "t6.png", "title" => "Theme 6"],
          ["img" => "t7.png", "title" => "Theme 7"]
        ];

        foreach ($themes as $index => $theme) {
          echo '
          <div class="col-12 col-md-4 mb-4" style="transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform=\'scale(1.05)\'" onmouseout="this.style.transform=\'scale(1)\'">
            <a href="#" class="text-decoration-none text-dark">
              <img src="./assets/img/themes/' . $theme['img'] . '" class="img-fluid rounded img-fshadow" alt="' . $theme['title'] . '" style="transition: transform 0.3s ease;">
              <h3 class="theme-h3" style="margin-top: 10px; margin-bottom: 0;">' . $theme['title'] . '</h3>
            </a>
            <a href="#" class="btn btn-primary btn-sm mt-2">View More</a>
          </div>';
        }
      ?>
    </div>
  </div>
</body>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/footlink.php'; ?>
