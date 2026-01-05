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


                <h2 class="hero-title my-5  font-serif">Contact Us</h2>




            </div>
        </div>
    </section>
    <section>
        <nav aria-label="breadcrumb" class="breadcrumb">
            <ul class="d-flex flex-wrap breadcrumbs__inner gap-3">
                <li class="d-flex gap-2 align-items-center breadcrumb_list">
                    <a class="text-muted " href="index.php" title="Return to Homepage">Home</a>
                    <i class="fa-solid fa-thin fa-angle-double-right"></i>
                </li>
                <li class="d-flex gap-2 align-items-center breadcrumb_list">
                    <a class="text-muted " href="about" title="Return to Homepage">Contact</a>

                </li>
            </ul>
        </nav>
    </section>



    <section class="contact_us py-5">
        <div class="container">
            <h2 class="fw-bold text-dark mb-5 text-center">Contact For Any Query</h2>
    
            <div class="row">
                
                <div class="col-lg-8">
                    <form class="form-contact contact_form" >
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 " name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" placeholder="Enter Your Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-gold px-4 py-2 text-uppercase">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="d-flex mb-3">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                           <h3 class="gold-text h4 mb-0">THE BILLING INN</h3>
                            <p class="mb-1 ">Suja, PO-Bir, Tehsil-Baijnath, District-Kangra, Himachal Pradesh-176077 Near Paragliding Landing Site</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                 
                               <h3 class="gold-text h4 mb-0">+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                     
                             <h3 class="gold-text h4 mb-0">support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-12 mb-4">
                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps?q=Suja,Himachal%20Pradesh&output=embed" width="100%"
                            height="500" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>




            </div>
        </div>
    </section>


    <?php include 'include/footer.php'; ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>