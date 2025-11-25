<?php include 'includes/headlink.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="bg-soft-primary">

    <div class="container py-5 my-4 mt-20">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Our Services</h1>
            <p class="lead text-muted">Explore our wide range of services designed to meet your needs.</p>
        </div>

        <!-- Navigation Buttons -->
        <div class="row mb-10">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#travel-services" class="btn btn-outline-primary px-4 py-2">
                        <i class="fas fa-plane me-2"></i> Travel Services
                    </a>
                    <a href="#utility-services" class="btn btn-outline-success px-4 py-2">
                        <i class="fas fa-lightbulb me-2"></i> Utility Services
                    </a>
                    <a href="#banking-services" class="btn btn-outline-info px-4 py-2">
                        <i class="fas fa-piggy-bank me-2"></i> Banking Services
                    </a>
                </div>
            </div>
        </div>

        <!-- Travel Services -->
        <section id="travel-services" class="mb-5">
            <div class="section-header text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 fs-20 fw-normal px-3 py-2 rounded-pill">TRAVEL SOLUTIONS</span>
                <h2 class="display-5 fw-bold mb-3">Comprehensive Travel Services</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Everything you need to power your travel business with our white-label platform</p>
            </div>
            
            <div class="row g-4 fs-10">
                <?php 
                $travelServices = [
                    ['flights.jpg', 'Flight Bookings', 'Domestic & international flight ticketing', 'primary'],
                    ['hotels.jpg', 'Hotel Bookings', '500,000+ properties worldwide', 'primary'],
                    ['homestay.jpg', 'Homestay Bookings', 'Alternative accommodations', 'primary'],
                    ['bus.jpg', 'Bus Bookings', 'Intercity & local bus services', 'primary'],
                    ['car.jpg', 'Car Rentals', 'Hourly, daily & weekly rentals', 'primary'],
                    ['cruises.jpg', 'Cruise Bookings', 'Luxury cruise packages', 'primary'],
                    ['holidays.jpg', 'Holiday Packages', 'Custom tour packages', 'primary'],
                    ['sightseeing.jpg', 'Sightseeing', 'Local tours & activities', 'primary'],
                    ['transferes.jpg', 'Transfers', 'Airport & city transfers', 'primary'],
                    ['group-travels.jpg', 'MICE/Group Travel', 'Corporate & group solutions', 'primary'],
                    ['irctc.jpg', 'Railway Ticketing', 'IRCTC & international rail', 'primary'],
                    ['visaapplication.jpg', 'Visa Services', 'Document processing', 'primary'],
                    ['travel-crm.jpg', 'Travel CRM', 'Customer management', 'primary'],
                    ['travel-insurance.jpg', 'Travel Insurance', 'Comprehensive coverage', 'primary']
                ];
                
                foreach ($travelServices as $service) {
                    echo '
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100 border-0 shadow-sm hover-lift transition-all text-center">
                            <div class="card-body p-3">
                                <div class="icon-box bg-'.$service[3].'-soft bg-opacity-50 mx-auto mb-3 rounded-3">
                                    <img src="./assets/img/services/travel/'.$service[0].'" alt="'.$service[1].'" class="img-fluid" style="height: 40px; width: auto; object-fit: contain;">
                                </div>
                                <h5 class="card-title mb-1 fs-15">'.$service[1].'</h5>
                                <p class="text-muted small mb-0">'.$service[2].'</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                
                <div class="col-12">
                    <div class="card border-0 bg-primary bg-opacity-10">
                        <div class="card-body text-center py-4">
                            <h5 class="mb-0 text-primary">And many more customized services available...</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Utility Services -->
        <section id="utility-services" class="mb-5 pt-5">
            <div class="section-header text-center mb-5">
                <span class="badge bg-blue bg-opacity-10 text-custom mb-2 fs-20 fw-normal px-3 py-2 rounded-pill">UTILITY SOLUTIONS</span>
                <h2 class="display-5 fw-bold mb-3">Essential Utility Services</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Expand your offerings with our comprehensive utility payment solutions</p>
            </div>
            
            <div class="row g-4">
                <?php 
                $utilityServices = [
                    ['mobile.jpg', 'Mobile Recharge', 'All operators prepaid', 'success'],
                    ['cabledth.jpg', 'Cable/DTH', 'TV & entertainment', 'success'],
                    ['pancard.jpg', 'Pan Card', 'Application services', 'success'],
                    ['licprem.jpg', 'LIC Premium', 'Insurance payments', 'success'],
                    ['fastag.jpg', 'Fastag Recharge', 'Toll payments', 'success'],
                    ['electric.jpg', 'Electricity', 'Bill payments', 'success'],
                    ['water.jpg', 'Water Bills', 'Utility payments', 'success'],
                    ['gas.jpg', 'Gas Billing', 'LPG & piped gas', 'success'],
                    ['bbps.jpg', 'BBPS Payments', 'All biller support', 'success'],
                    ['insurance.jpg', 'Vehicle Insurance', 'Renewals & new', 'success']
                ];
                
                foreach ($utilityServices as $service) {
                    echo '
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100 border-0 shadow-sm hover-lift transition-all text-center">
                            <div class="card-body p-3">
                                <div class="icon-box bg-'.$service[3].'-soft bg-opacity-50 mx-auto mb-3 rounded-3">
                                    <img src="./assets/img/services/utility/'.$service[0].'" alt="'.$service[1].'" class="img-fluid" style="height: 40px; width: auto; object-fit: contain;">
                                </div>
                                <h5 class="card-title mb-1 fs-15">'.$service[1].'</h5>
                                <p class="text-muted small mb-0">'.$service[2].'</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                
                <div class="col-12">
                    <div class="card border-0 bg-blue bg-opacity-10">
                        <div class="card-body text-center py-4">
                            <h5 class="mb-0 text-custom">And many more customized services available...</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banking Services -->
        <section id="banking-services" class="pt-5">
            <div class="section-header text-center mb-10">
                <span class="badge bg-info bg-opacity-10 text-info mb-2 fs-20 fw-normal px-3 py-2 rounded-pill">FINANCIAL SOLUTIONS</span>
                <h2 class="display-5 fw-bold mb-3">Banking & Financial Services</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Complete financial solutions to serve all your customers' needs</p>
            </div>
            
            <div class="row g-4">
                <?php 
                $bankingServices = [
                    ['upi.jpg', 'UPI QR Code', 'Digital payments', 'info'],
                    ['money-transfer.jpg', 'Money Transfer', 'Domestic remittance', 'info'],
                    ['aeps.jpg', 'AEPS', 'Aadhaar banking', 'info'],
                    ['sbi-chota-atm.jpg', 'Micro ATM', 'Cash withdrawal', 'info'],
                    ['nepal-money-transfer.jpg', 'Nepal Transfer', 'Cross-border', 'info'],
                    ['loanpayment.jpg', 'Loan Repayment', 'EMI payments', 'info']
                ];
                
                foreach ($bankingServices as $service) {
                    echo '
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100 border-0 shadow-sm hover-lift transition-all text-center">
                            <div class="card-body p-3">
                                <div class="icon-box bg-'.$service[3].'-soft bg-opacity-50 mx-auto mb-3 rounded-3">
                                    <img src="./assets/img/services/banking/'.$service[0].'" alt="'.$service[1].'" class="img-fluid" style="height: 40px; width: auto; object-fit: contain;">
                                </div>
                                <h5 class="card-title mb-1 fs-20">'.$service[1].'</h5>
                                <p class="text-muted small mb-0">'.$service[2].'</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                
                <div class="col-12">
                    <div class="card border-0 bg-info bg-opacity-10">
                        <div class="card-body text-center py-4">
                            <h5 class="mb-0 text-info">And many more customized services available...</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-light rounded-4 p-5 my-5 mt-15">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold text-primary counter">50+</h2>
                        <p class="mb-0 text-muted">Services Offered</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold text-success counter">1000+</h2>
                        <p class="mb-0 text-muted">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold text-info counter">24/7</h2>
                        <p class="mb-0 text-muted">Support</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <h2 class="display-4 fw-bold text-warning counter">10+</h2>
                        <p class="mb-0 text-muted">Years Experience</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-custom text-white rounded-4 p-5 my-5 position-relative overflow-hidden">
            <div class="position-absolute top-0 end-0 bottom-0 start-0 opacity-10">
                <div class="cta-pattern"></div>
            </div>
            <div class="row align-items-center position-relative">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h3 class="fw-bold mb-3">Ready to launch your own branded platform?</h3>
                    <p class="lead mb-0 opacity-75">Get started with our white-label solution today and start growing your business.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="./contact.php" class="btn btn-light text-dark btn-lg px-4 shadow-sm">Request Demo</a>
                </div>
            </div>
        </section>
    </div>
</body>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/footlink.php'; ?>