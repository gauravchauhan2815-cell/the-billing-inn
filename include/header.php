<header class="fixed-top w-100 z-3 header-transparent">
    <div class="toggle_header  bg-white ">
        <div class="sidebar_header px-md-5  px-2 d-flex justify-content-between align-items-center border-bottom border-light-subtle">
            <div class="menu-trigger d-flex align-items-center cursor-pointer">
                <div class="custom-bars me-4 " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span class="text-black text-uppercase tracking-widest fs-6 small d-md-block d-none">Menu</span>
            </div>


            <div class="offcanvas offcanvas-start py-2 px-5" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close mx-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <h5 class="offcanvas-title fs-5" id="staticBackdropLabel">Close</h5>
                </div>
                <div class="offcanvas-body mt-2">
                    <ul class="flex-column ">
                        <li class="py-3 border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3 border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3  border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3 border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3 border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3 "><a class="text-dark underline fs-5" href="#">Home</a></li>
                    </ul>
                     
                    
                </div>
                    <ul class="flex-column social_media ">
                        <li class="py-3 border-bottom "><a class="text-dark underline fs-5" href="#">Home</a></li>
                        <li class="py-3 "><a class="text-dark underline fs-5" href="#">Home</a></li>
                    
                    </ul>
           
            </div>

            <div class="brand-logo py-2">
                <img src="assets/images/footer.png" alt="The Billing Inn Logo">
            </div>

            <div class="header-action side_action d-md-block d-none">
                <a href="#booking" class="btn btn-gold btn-sm px-4">BOOK A STAY</a>
            </div>
        </div>

    </div>
    <div class="top_header px-5 d-flex justify-content-between align-items-center border-bottom border-light-subtle">
        <div class="contact-info">
            <p class="mb-0 text-white small tracking-widest">
                <i class="fa fa-phone gold-text me-2"></i>+91 98765 43210
            </p>
        </div>

        <div class="brand-logo py-2">
            <img src="assets/images/footer.png" alt="The Billing Inn Logo">
        </div>

        <div class="header-action">
            <a href="#booking" class="btn btn-gold btn-sm px-4">BOOK A STAY</a>
        </div>
    </div>

    <div class="bottom_header bottom_nav px-5">
        <ul id="menu-header-primary-nav-1" class="header_menu">
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Home</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">About</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Accommodations</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Services</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Gallery</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Blogs</a></li>
            <li class="d-flex align-items-center flex-fill"><a class="nav-link-custom" href="#">Contact</a></li>
        </ul>
    </div>
</header>
<script>
window.addEventListener('scroll', function() {
    const transparentTop = document.querySelector('.header-transparent > .top_header');
    const bottomNav = document.querySelector('.bottom_header');
    const toggleHeader = document.querySelector('.toggle_header');

    if (window.scrollY > 100) {
        // Hide Original Header parts
        transparentTop.classList.add('d-none');
        bottomNav.classList.add('d-none');
        
        // Show Toggle Header
        toggleHeader.classList.remove('d-none');
        toggleHeader.classList.add('d-block');
    } else {
        // Show Original Header parts
        transparentTop.classList.remove('d-none');
        bottomNav.classList.remove('d-none');
        
        // Hide Toggle Header
        toggleHeader.classList.add('d-none');
        toggleHeader.classList.remove('d-block');
    }
});
</script>