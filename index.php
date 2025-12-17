<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nyonyintono Henry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/newfont.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-version.css">

    <style>
        #feature-eight {
            background: url("images/bricks_floor_tiles.JPG") center/cover no-repeat;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

      
        #feature-eight .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.65);
        }

    
        #feature-eight .eight-section-title {
            max-width: 900px;
            margin: auto;
        }

    
        .eg-title-tag {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

 
        #feature-eight h2 {
            font-size: 2.5rem;
        }

     
        #feature-eight p {
            font-size: 1.05rem;
            line-height: 1.8;
            opacity: 0.95;
        }

  
        @media (max-width: 768px) {
            #feature-eight h2 {
                font-size: 2rem;
            }
        }


        .logo-img {
            height: 55px;
            width: auto;
        }

        .logo-text {
            margin-left: 10px;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #ffffff;
            text-transform: uppercase;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.6);
            font-family: "Montserrat", "Poppins", sans-serif;
        }

      
        @media (max-width: 768px) {
            .logo-text {
                font-size: 20px;
            }
        }

        .eight-banner-section {          
            /* background: #D27D2D;   */
            background: #ffffff;        
        }

        /* Section Divider */
.divider {
    width: 80px;
    height: 4px;
    background: #c99700;
    border-radius: 10px;
    margin-top: 10px;
}

/* Product Card */
.product-card {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.product-card img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

/* Hover effects */
.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.2);
}

.product-card:hover img {
    transform: scale(1.1);
}

/* Overlay */
.product-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
    display: flex;
    align-items: flex-end;
    padding: 15px;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.product-card:hover .product-overlay {
    opacity: 1;
}

.product-overlay h6 {
    color: #fff;
    margin: 0;
    font-weight: 600;
}

.ei-copyright-menu a {
    background: rgba(255, 255, 255, 0.1);   
    padding: 8px 15px;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.3s ease;
}

.ei-copyright-menu a:hover {
    background: #D27D2D;   
    color: #000;
    transform: translateY(-3px);
}

.ei-copyright-menu i {
    color: #fff;  
}




    </style>
</head>

<body class="app-eight-home dark-version" data-spy="scroll" data-target=".navigation-eight" data-offset="50">
    
    <div id="preloader" class="ei-preloader"></div>
    <div class="ei-up">
        <a href="#" id="scrollup" class="ei-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
   
        <header id="header-eight" class="main-header-eight">
            <div class="appheader-content">

                <div class="site-logo float-left">
                    <a href="#" class="logo-wrap d-flex align-items-center text-decoration-none">
                        <img src="images/logo.png" alt="Nyonyintono Logo" class="logo-img">
                        <span class="logo-text text-dark">Nyonyintono</span>
                    </a>
                 </div>

                <nav class="navigation-eight ul-li">
                    <ul>
                        <li><a class="nav-link text-dark" href="#eight-banner">HOME</a></li>
                        <li><a class="nav-link text-dark" href="#feature-eight">ABOUT US</a></li>
                        <li><a class="nav-link text-dark" href="#eight-service">PRODUCTS</a></li>
                    </ul>
                </nav>
                               
            </div>
           
            <div class="appi-ei-mobile_menu relative-position">
                <div class="appi-ei-mobile_menu_button appi-ei-open_mobile_menu">
                    <i class="fas fa-bars text-warning"></i>
                </div>
                <div class="appi-ei-mobile_menu_wrap">
                    <div class="mobile_menu_overlay appi-ei-open_mobile_menu"></div>
                    <div class="appi-ei-mobile_menu_content">
                        <div class="appi-ei-mobile_menu_close appi-ei-open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <img src="images/logo.png" alt="">
                        </div>
                        <nav class="appi-ei-mobile-main-navigation  clearfix ul-li">
                            <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                <li><a class="nav-link" href="#eight-banner">HOME</a></li>
                                <li><a class="nav-link" href="#feature-eight">ABOUT US</a></li>
                                <li><a class="nav-link" href="#eight-service">PRODUCTS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
   
        <section id="eight-banner" class="eight-banner-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="eight-banner-content">
                            <div class="banner-content-box appeight-headline pera-content">
                                <h1 class="cd-headline clip is-full-width text-warning">
                                    Your best clay tiles and roofing products like; <br>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Maxpans</b>
                                        <b>Partition blocks</b>
                                        <b>Roofing tiles</b>
                                        <b>Floor tiles</b>
                                        <b>Facing bricks</b>
                                    </span>
                                </h1>
                                <P>Reach out to us for all you clay construction products. </P>
                                <div class="ei-banner-btn">                            
                                    <a href="https://wa.me/256700353517">
                                        <i class="fab fa-whatsapp text-success"></i> WhatsApp
                                    </a>
                                </div>

                                 
                            </div>
                            <div class="ei-banner-mbl-mockup wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <img src="images/nyonyintono.png" alt="">
                            </div>
                        </div>

                        <div class="eight-feature-content">
                            <div class="row justify-content-md-center">

                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="images/roofing.jpg" alt=""> <br> <br>
                                    <h5 class="text-dark text-center">Roofing Tiles</h5>                                    
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="images/suspended.jpg" alt=""> <br> <br>
                                    <h5 class="text-dark text-center">Suspended Floor Tiles</h5>                                
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="images/bricksfloors.jpg" alt=""> <br> <br>
                                    <h5 class="text-dark text-center">Bricks And Floor Tiles</h5>                                 
                                </div>
                                    
                            </div>
                        </div>


                    </div>
                </div>
            </div>
          
        </section>
   
        <section id="feature-eight" class="feature-eight-section position-relative text-white">
            <div class="overlay"></div>

            <div class="container position-relative">
                <div class="eight-section-title text-center py-5">
                    <span class="eg-title-tag d-inline-block mb-3">
                        About our products
                        <i class="square-shape"><i></i><i></i><i></i><i></i></i>
                    </span>

                    <h2 class="fw-bold mb-4 text-white">
                        Unmatched Quality. Certified Excellence. Built to Last.
                    </h2>

                    <p class="lead mb-3 text-white">
                        Our products combine unmatched durability, advanced fire resistance, and internationally certified quality to deliver reliable performance you can trust.
                    </p>

                    <p class="text-white">
                        Choose our products for proven strength, safety, and quality—engineered to withstand fire, water, and sound while providing superior insulation.
                    </p>

                    <p class="text-white">
                        Our ISO-certified products are kiln-baked at extreme temperatures, rigorously tested for strength, durability, and consistency, and built to meet the highest industry standards.
                    </p>

                    <p class="text-white">
                        We offer a wide variety of ISO-certified products that are fire-resistant, waterproof, soundproof, and thoroughly quality-tested to ensure long-lasting performance.
                    </p>
                </div>
            </div>
        </section>

        
        
        <section id="eight-service">
            
            <div class="container py-5">
              
                <div class="text-center mb-5 mb-5">
                    <h2 class="fw-bold">Bricks & Floor Tiles</h2>
                    <p class="text-muted">
                        Premium quality bricks and floor tiles engineered for strength, durability, <br> and elegance.
                    </p>
                    <div class="divider mx-auto"></div>
                </div>

             
                <div class="row g-4">
                    <?php
                    $folder = "images/bricks_floor_tiles/";
                    loadImages($folder);
                    ?>
                </div>

            </div>



            <div class="container">     

               <div class="text-center mt-5 mb-5">
                    <h2 class="fw-bold">Decorative Grills</h2>
                    <p class="text-muted">
                        Elegantly crafted decorative grills designed to enhance security while adding <br> timeless beauty and architectural character to your spaces.
                    </p>
                    <div class="divider mx-auto"></div>
                </div>


                <div class="row">
                    <?php
                    $folder = "images/decorative/";
                    loadImages($folder);
                    ?>
                </div>             
            </div>

            <div class="container">

                <div class="text-center mt-5 mb-5">
                    <h2 class="fw-bold">Roofing Tiles</h2>
                    <p class="text-muted">
                        Premium roofing tiles designed for durability, weather resistance, and <br> long-lasting protection, while enhancing the aesthetic appeal of any building.
                     </p>
                    <div class="divider mx-auto"></div>
                </div>

                <div class="row">
                    <?php
                    $folder = "images/roofing_tiles/";
                    loadImages($folder);
                    ?>
                </div>             
            </div>

            <div class="container">

                <div class="text-center mt-5 mb-5">
                    <h2 class="fw-bold">Suspended Floor Units</h2>
                    <p class="text-muted">
                        Robust and high-quality suspended floor units engineered for strength, <br> stability, and long-lasting performance, ideal for multi-storey buildings and commercial structures.
                    </p>
                    <div class="divider mx-auto"></div>
                </div>

                <div class="row">
                    <?php
                    $folder = "images/suspended_floor_units/";
                    loadImages($folder);
                    ?>
                </div>             
            </div>

            <div class="container">
                <div class="text-center mt-5 mb-5">
                    <h2 class="fw-bold">Ventilators</h2>
                    <p class="text-muted">
                        Efficient and durable ventilators designed to improve airflow, regulate temperature, <br> and enhance comfort, while maintaining aesthetic appeal in any building.
                    </p>
                    <div class="divider mx-auto"></div>
                </div>
                <div class="row">
                    <?php
                    $folder = "images/ventilators/";
                    loadImages($folder);
                    ?>
                </div>             
            </div>

            <div class="container">
                <div class="text-center mt-5 mb-5">
                    <h2 class="fw-bold">Walling & Partitioning Blocks</h2>
                    <p class="text-muted">
                        Premium walling and partitioning blocks engineered for strength, insulation, <br> and soundproofing, providing reliable structural solutions for both residential and commercial projects.
                    </p>
                    <div class="divider mx-auto"></div>
                </div>
                <div class="row">
                    <?php
                    $folder = "images/walling/";
                    loadImages($folder);
                    ?>
                </div>             
            </div>
        </section>


 
     
        <section id="ei-footer" class="ei-footer-section position-relative">            
            <div class="ei-footer-copyright">
                <div class="container">
                    <div class="ei-footer-copyright-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ei-copyright-text">
                                <p>© <span id="year"></span> 
                                    <meta name="keywords"> <a href="#">Nyonyintono Henry</a></p>
                                </div>
                            </div>

                            <div class="col-md-8">
                               <div class="ei-copyright-menu d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 py-3">
                                    <a href="mailto:hnyonyintono@yahoo.com" class="text-decoration-none text-white">
                                        <i class="fas fa-envelope me-1"></i> hnyonyintono@yahoo.com
                                    </a>
                                    <a href="tel:0700353517" class="text-decoration-none text-white">
                                        <i class="fas fa-phone me-1"></i> +256700353517
                                    </a>
                                    <a href="tel:+256773249651" class="text-decoration-none text-white">
                                        <i class="fas fa-phone me-1"></i> +256773249651
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
  
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/appear-2.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/pagenav.js"></script>
        <script src="assets/js/odometer.js"></script>
        <script src="assets/js/bxslider.js"></script>
        <script src="assets/js/jquery.barfiller.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/parallax-scroll.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/typer-new.js"></script>
        <script src="assets/js/script.js"></script>
        <script>
            document.getElementById('year').textContent = new Date().getFullYear();
        </script>

        <?php

        function loadImages($folder){


            $images = glob($folder . "*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);

            foreach ($images as $image) {
                $name = ucwords(str_replace(['-', '_'], ' ', pathinfo($image, PATHINFO_FILENAME)));
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card mb-3">
                        <img src="'.$image.'" alt="'.$name.'">
                        <div class="product-overlay">
                            <h6>'.$name.'</h6>
                        </div>
                    </div>
                </div>
                ';
            }
            
        }
        
        
        ?>
    </body>
    </html>