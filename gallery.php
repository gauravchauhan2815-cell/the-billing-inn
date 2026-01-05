<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Billing Inn | Luxury Stay in Suja</title>


    <?php include 'include/css-urls.php'; ?>

</head>


<body class="bg-light">
    <!-- <?php include 'include/header.php'; ?> -->
    <section class="banner_new_sections d-flex align-items-center position-relative">


        <div class="container text-center text-white position-relative z-1">
            <div class="row justify-content-center">


                <h2 class="hero-title my-5  font-serif">Our Gallery</h2>




            </div>
        </div>
    </section>
    <section>
        <nav aria-label="breadcrumb" class="breadcrumb ">
            <ul class="d-flex flex-wrap breadcrumbs__inner gap-3">
                <li class="d-flex gap-2 align-items-center breadcrumb_list">
                    <a class="text-muted " href="index.php" title="Return to Homepage">Home</a>
                    <i class="fa-solid fa-thin fa-angle-double-right"></i>
                </li>
                <li class="d-flex gap-2 align-items-center breadcrumb_list">
                    <a class="text-muted " href="about.php" title="Return to Homepage">Gallery</a>

                </li>
            </ul>
        </nav>
    </section>

    <section id="about" class="py-5 bg-light">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-8 text-center col-md-offset-2">
                    <div class="contact_description">
                        <h6 class="text-uppercase gold-text mb-2 tracking-widest">Gallery</h6>

                        <p class="lead text-dark opacity-75">
                            From the golden sunrise on your balcony to the glowing warmth of our hearth, witness the soul of Kangra captured in light. Your Himalayan escape, through our lens.
                        </p>


                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="py-5 gallery_sec">
        <div class="container">
       
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="assets/images/gallery/gallery-1.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4 cursor-pointer"
                        alt="Boat on Calm Water"

                        onclick="openSlider(0)" style="cursor:pointer" />

                    <img
                      src="assets/images/gallery/gallery-2.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        onclick="openSlider(1)" style="cursor:pointer" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                   src="assets/images/gallery/gallery-3.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds" />

                    <img
                         src="assets/images/gallery/gallery-4.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        onclick="openSlider(2)" style="cursor:pointer" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                  src="assets/images/gallery/gallery-5.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        onclick="openSlider(3)" style="cursor:pointer" />

                    <img
                       src="assets/images/gallery/gallery-6.jpeg"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                        onclick="openSlider(4)" style="cursor:pointer" />
                </div>
            </div>
        
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/script.js"></script>
 <div class="modal fade gall_overlay" id="galleryModal" tabindex="-1" aria-hidden="true">
   
    <div class="modal-dialog modal-dialog-centered modal-xl">
       
        <div class="modal-content bg-dark border-0">
               <button type="button" class="close btn-close" data-bs-dismiss="modal"> <span>Close</span></button>
            <div class="modal-body p-0">
               
                
                <div id="hotelCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/gallery/gallery-1.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/gallery/gallery-2.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/gallery/gallery-3.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/gallery/gallery-4.jpeg" class="d-block w-100">
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>