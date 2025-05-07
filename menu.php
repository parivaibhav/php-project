<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Project</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="assets/js/modetoggle.js" defer></script>
</head>




<body>
    <?php include 'header.php'; ?>

    <body>
        <section id="menu" class="menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Menu</h2>
                <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Starters</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Breakfast</h4>
                        </a><!-- End tab nav item -->

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Starters</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Breakfast</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Lunch</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Dinner</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                                <div>
                                    <button class="btn btn-danger">add cart</button>
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                                <div>
                                    <a role="button" class="btn btn-danger" href="login.php">add cart</a>
                                    <a role="button" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>

        </section><!-- /Menu Section -->

        <?php include 'footer.php'; ?>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

     

    </body>

</html>