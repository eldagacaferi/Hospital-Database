<?php 
include('./appointment_server.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Life Choice</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="img/icon/icon-02-primary.png" alt="">Life Choice</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="feature.php" class="dropdown-item">Features</a>
                        <a href="appointment.php" class="dropdown-item">Appointment</a>
                        <a href="team.php" class="dropdown-item">Team Members</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">Insurance Creates Wealth For Everyone</h1>
                                    <p class="fs-5 text-body mb-5">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">The Best Insurance Begins Here</h1>
                                    <p class="fs-5 text-body mb-5">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Features End -->


    <!-- Service Start -->
    class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">We Provide professional Insurance Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Allergology</h4>
                        </div>
                        <p class="mb-4">Allergology is a specialty that deals with the prevention, diagnosis and treatment of allergic diseases, 
                            these pathologies are immunologically mediated due to hypersensitivity to air, food, medicinal and contact allergens.</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-01-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Anesthesiology</h4>
                        </div>
                        <p class="mb-4">It offers anesthesiology services for all surgeries that take place in the hospital, as well as having available 
                            an Intensive Care Unit where patients with various health problems are treated and who require multidisciplinary treatment, 
                            as the motto of our work we have maximum cooperation and coordination with all doctors of other departments, with the sole 
                            aim of success in treating patients, minimizing complications and reducing the length of stay of patients in the hospital.</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Dermatology</h4>
                        </div>
                        <p class="mb-4">The skin is the largest and most visible organ in the human body. Dermatology is the branch of medicine that 
                            studies pathologies that affect the skin.Dermatologists are doctors who 
                            specialize in the diagnosis and treatment of skin diseases and tumors.</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Check Up</h4>
                        </div>
                        <p class="mb-4">Life Choice has the part where you can only do a checkup when you're not feeling well.Doing a checkUp 
                            and seeing if everything is okay with your body,it't important.
                        </p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Neurosurgery</h4>
                        </div>
                        <p class="mb-4">Neurosurgery is the operation of the nervous system.
                        It is the medical specialty concerned with the diagnosis and treatment of patients with injuries 
                        or diseases/disorders of the brain, spinal cord and spinal column, and peripheral nerves within all parts of the body.</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                            </div>
                            <h4 class="mb-0">ORL/Otorhinolaryngology</h4>
                        </div>
                        <p class="mb-4">Formerly Counties Manukau Health ENT - Otorhinolaryngology (ORL) Ear, Nose and Throat Surgery (ENT) 
                            is also known as Otorhinolaryngology, Head and Neck Surgery. 
                            This area of medicine is concerned with disorders of the ear, nose, throat, head and neck.</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4"><img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt="">Insure</h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="service.php">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>