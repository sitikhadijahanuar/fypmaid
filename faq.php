<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MaidForYou</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css" />


    <link rel="stylesheet" href="assets/css/unify-components.css" />
    <link rel="stylesheet" href="assets/css/unify-globals.css" />
    
	<link rel="stylesheet" href="assets/css/theme.min.css" />

    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/vendor/chosen/chosen.css" />
    <link rel="stylesheet" href="assets/vendor/prism/themes/prism.css" />
    <link rel="stylesheet" href="assets/vendor/custombox/custombox.min.css" />
    <link rel="stylesheet" href="assets/style-switcher/vendor/spectrum/spectrum.css" />
    <link rel="stylesheet" href="assets/style-switcher/vendor/spectrum/themes/sp-dark.css" />
    <link rel="stylesheet" href="assets/style-switcher/style-switcher.css" />
    <!-- End CSS -->

    <!-- Scripts -->
    <script src="assets/vendor/chosen/chosen.jquery.js"></script>
    <script src="assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/custombox.min.js"></script>
    <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>

    <!-- Prism -->
    <script src="assets/vendor/prism/prism.js"></script>
    <script src="assets/vendor/prism/components/prism-markup.min.js"></script>
    <script src="assets/vendor/prism/components/prism-css.min.js"></script>
    <script src="assets/vendor/prism/components/prism-clike.min.js"></script>
    <script src="assets/vendor/prism/components/prism-javascript.min.js"></script>
    <script src="assets/vendor/prism/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="assets/vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
    <!-- End Prism -->



    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#4A546B;">
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">M</span>aid<span class="text-primary">F</span>or<span class="text-primary">Y</span>ou</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="location.php" class="nav-item nav-link">Location</a>
                        <a href="select_task.php" class="nav-item nav-link">Services</a>
                        <a href="gateway.php" class="nav-item nav-link">Payment</a>
                        <a href="give_review.php" class="nav-item nav-link">Feedback</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-80">
                <div class="col-10 col-lg-9 col-xl-6">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-4">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 col text-center">Frequently asked questions</h2>

                            <div class="">
                                <!-- Accordion -->
                                <div class="accordion accordion-flush" id="accordionFAQ">
                                    <!-- Accordion Item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Should I be present when my home is cleaned?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                You are not required to be at home when we complete your cleaning. We ultimately leave the decision up to you. You can choose to be there during our visit, or you can provide a key to your home that will be safely stored in a secure location.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion Item -->

                                    <!-- Accordion Item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFour">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                What do I do if I need to reschedule a cleaning?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                To reschedule a cleaning, you must call our scheduling service at least 48 hours in advance of your cleaning. Since we have many clients, we will attempt to find another appointment to move to your spot. Please be aware that if you do not give the proper notice, you may incur a fee of RM50 for a late notice cancellation or reschedule.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion Item -->

                                    <!-- Accordion Item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFive">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Are my valuables safe?
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                If there are any special valuables, heirlooms, or irreplaceable items in your home or office, we ask that you please put them away or instruct us not to touch them during our cleaning services. A closed-door or drawer is a way to tell us not to clean a specific area. In the event that damage does occur, we do carry all necessary insurances.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion Item -->

                                    <!-- Accordion Item -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingSix">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                How do I pay for my cleaning services?
                                            </a>
                                        </div>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                When you book an appointment with our team, we will require you to give us your credit card information. This card will be charged for the cleaning services. We accept Online Banking, MasterCard, and Visa.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion Item -->
                                </div>
                                <!-- End Accordion -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs-mega-menu.min.js"></script>
    <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="assets/vendor/hs-bg-video/hs-bg-video.js"></script>
    <script src="assets/vendor/hs-bg-video/vendor/player.min.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.cubeportfolio.js"></script>
    <script src="assets/js/helpers/hs.bg-video.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>


    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/vendor/chosen/chosen.css" />
    <link rel="stylesheet" href="assets/vendor/prism/themes/prism.css" />
    <link rel="stylesheet" href="assets/vendor/custombox/custombox.min.css" />
    <link rel="stylesheet" href="assets/style-switcher/vendor/spectrum/spectrum.css" />
    <link rel="stylesheet" href="assets/style-switcher/vendor/spectrum/themes/sp-dark.css" />
    <link rel="stylesheet" href="assets/style-switcher/style-switcher.css" />

    <script src="assets/vendor/chosen/chosen.jquery.js"></script>
    <script src="assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/custombox.min.js"></script>
    <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>

    <!-- Prism -->
    <script src="assets/vendor/prism/prism.js"></script>
    <script src="assets/vendor/prism/components/prism-markup.min.js"></script>
    <script src="assets/vendor/prism/components/prism-css.min.js"></script>
    <script src="assets/vendor/prism/components/prism-clike.min.js"></script>
    <script src="assets/vendor/prism/components/prism-javascript.min.js"></script>
    <script src="assets/vendor/prism/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="assets/vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>

    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.select.js"></script>
    <script src="assets/js/components/hs.modal-window.js"></script>
    <script src="assets/js/components/hs.markup-copy.js"></script>

    <script src="assets/vendor/chosen/chosen.jquery.js"></script>
    <script src="assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/custombox.min.js"></script>
    <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>

</body>

</html>