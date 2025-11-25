    <header class="position-absolute w-100">
      <!-- Top Contact Banner -->
      <!-- Top Contact Banner -->
      <div class="gradient-5 text-white fw-bold fs-15 mb-2 position-relative" style="z-index: 1;">
        <div class="container">
          <div class="row align-items-center justify-content-between gx-2 gy-1">

            <!-- Tagline (hide on small) -->
            <div class="col-auto d-none d-md-block mx-auto">
              <span class="contact-text">Launch your dynamic travel, utility and fintech portal within 2 hours</span>
            </div>

            <!-- Contact Info (icons + text) -->
            <div class="col-auto d-flex align-items-center gap-3 flex-wrap">

              <!-- WhatsApp Link -->
              <a href="https://wa.me/917304830820" target="_blank">
                <i class="uil uil-whatsapp" style="font-size: 25px; color: rgb(12, 201, 82);" title="WhatsApp"></i>
              </a>

              <!-- Phone Call Link -->
              <a href="tel:+917304820830" class="d-flex align-items-center">
                <i class="uil uil-phone" style="font-size: 25px; color: rgb(201, 47, 12);" title="Call Us"></i>
                <span class="phone-number text-white d-none d-sm-inline ms-1">+91 7304 820 830</span>
              </a>

              <!-- Email Link -->
              <a href="mailto:info@rayds.com" class="d-flex align-items-center">
                <i class="uil uil-envelope text-blue fs-25" title="Email Us"></i>
                <span class="email-address text-white fs-20 d-none d-sm-inline ms-1">info@rayds.com</span>
              </a>

            </div>
          </div>
        </div>
      </div>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.php">
              <img src="./assets/img/logo/logo200_153576.png" alt="Raydss" width="159" height="60" />
            </a>
          </div>

          <!-- Collapsible Menu -->
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Rayds Services Limited</h3>
              <button type="button" class="btn-close btn-close-white btn-blue" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="./index.php"><i class="uil uil-home me-2"></i></a></li>

                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#">Services</a>
                  <div class="dropdown-menu mega-menu">
                    <div class="mega-menu-content container">
                      <div class="sidebar">
                        <ul>
                          <li><a href="#">Software Development</a></li>
                          <li><a href="#">Application Development</a></li>
                          <li><a href="#">Dedicated Software Teams</a></li>
                          <li><a href="#">eCommerce</a></li>
                          <li><a href="#">QA & Testing</a></li>
                          <li><a href="#">Cloud Services</a></li>
                          <li><a href="#">Data Solutions</a></li>
                          <li><a href="#">AI & ML Solutions</a></li>
                        </ul>
                      </div>

                      <div class="content-section">
                        <div>
                          <h5>Consulting</h5>
                          <ul class="text-start">
                            <li><a href="#">Software Consulting</a></li>
                            <li><a href="#">IT Consulting</a></li>
                            <li><a href="#">Agile Consulting</a></li>
                            <li><a href="#">CRM Consulting</a></li>
                          </ul>
                        </div>
                        <div>
                          <h5>Development</h5>
                          <ul class="text-start">
                            <li><a href="#">Custom Software</a></li>
                            <li><a href="#">Enterprise Software</a></li>
                            <li><a href="#">Software Product Engineering</a></li>
                            <li><a href="#">Application Development</a></li>
                          </ul>
                        </div>
                        <div>
                          <h5>Maintenance & Support</h5>
                          <ul class="text-start">
                            <li><a href="#">Application Maintenance</a></li>
                            <li><a href="#">Application Modernization</a></li>
                          </ul>
                        </div>
                        <div>
                          <h5>Delivery Models</h5>
                          <ul class="text-start">
                            <li><a href="#">IT Staff Augmentation</a></li>
                            <li><a href="#">Dedicated Development Team</a></li>
                            <li><a href="#">Software Development Outsourcing</a></li>
                            <li><a href="#">Nearshore Software Development</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="partner.php">Partners</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contacts</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
              </ul>

              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:info@rayds.com" class="link-inverse">info@rayds.com</a><br>
                  +91 7304 820 830<br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block position-relative">
                <a href="#" class="btn btn-custom rounded-xl" id="enquiryButton">Enquiry Now</a>
                <div class="contact-form-container" id="contactForm">
                  <div class="form-box">
                    <h4 class="text-center mb-3">Contact Form</h4>
                    <form action="/submit-enquiry" method="post"> <!-- Update this URL as per your backend route -->
                      <div class="mb-3">
                        <label for="name" class="form-label text-dark">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label text-dark">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label text-dark">Mobile Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                      </div>
                      <button type="submit" class="btn btn-custom w-100">Submit</button>
                    </form>
                    <nav class="nav social justify-content-center text-center mb-0">
                      <a href="https://www.google.com/" target="_blank"><i class="uil uil-google"></i></a>
                      <a href="https://www.facebook.com/YourPage" target="_blank"><i class="uil uil-facebook"></i></a>
                      <a href="https://www.instagram.com/YourProfile" target="_blank"><i class="uil uil-instagram"></i></a>
                    </nav>
                  </div>
                </div>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header>