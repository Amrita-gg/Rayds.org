<?php include 'includes/headlink.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="bg-soft-primary">
  <div class="content-wrapper mt-20">
    <section class="py-5">
      <div class="container py-4 py-md-5">
        <div class="row">
          <div class="col-lg-11 col-xl-10 mx-auto mb-5 text-center">
            <h2 class="fs-50 text-uppercase text-dark mb-3">Our Projects</h2>
            <h6 class="text-muted px-lg-5 px-xl-10 mb-0">Check out some of our awesome projects with creative ideas and great design.</h6>
          </div>
        </div>

        <div class="grid grid-view projects-masonry">
          <div class="row gx-md-5 gy-5 isotope">

            <!-- Repeatable Project Card -->
            <div class="project item col-md-6 col-xl-4">
              <figure class="position-relative mb-4 rounded">
                <img src="./assets/img/photos/pd7.jpg" class="img-fluid" alt="Project 1">
                <a class="item-link" href="./assets/img/photos/pd7-full.jpg" data-glightbox data-gallery="projects-group">
                  <i class="uil uil-focus-add"></i>
                </a>
              </figure>
              <div class="project-details text-center">
                <h2 class="post-title h5"><a href="./single-project.html" class="link-dark">Cras Fermentum Sem</a></h2>
                <div class="post-category text-secondary">Stationery</div>
              </div>
            </div>

            <!-- Add more project cards like this -->
            <div class="project item col-md-6 col-xl-4">
              <figure class="position-relative mb-4 rounded">
                <img src="./assets/img/photos/pd8.jpg" class="img-fluid" alt="Project 2">
                <a class="item-link" href="./assets/img/photos/pd8-full.jpg" data-glightbox data-gallery="projects-group">
                  <i class="uil uil-focus-add"></i>
                </a>
              </figure>
              <div class="project-details text-center">
                <h2 class="post-title h5"><a href="./single-project2.html" class="link-dark">Mollis Ipsum Mattis</a></h2>
                <div class="post-category text-secondary">Magazine, Book</div>
              </div>
            </div>

            <!-- Example third project -->
            <div class="project item col-md-6 col-xl-4">
              <figure class="position-relative mb-4 rounded">
                <img src="./assets/img/photos/pd9.jpg" class="img-fluid" alt="Project 3">
                <a class="item-link" href="./assets/img/photos/pd9-full.jpg" data-glightbox data-gallery="projects-group">
                  <i class="uil uil-focus-add"></i>
                </a>
              </figure>
              <div class="project-details text-center">
                <h2 class="post-title h5"><a href="./single-project3.html" class="link-dark">Ipsum Ultricies Cursus</a></h2>
                <div class="post-category text-secondary">Packaging</div>
              </div>
            </div>

            <!-- Add more as needed... -->

          </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-5">
          <a href="./project.php" class="btn btn-lg btn-primary rounded-pill">Start a Project</a>
        </div>
      </div>
    </section>
  </div>  
</body>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/footlink.php'; ?>
