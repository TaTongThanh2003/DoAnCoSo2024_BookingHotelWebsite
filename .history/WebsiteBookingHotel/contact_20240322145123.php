<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2T Hotel - CONTACT</title>
    <?php require('inc/links.php'); ?>
    <style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
    @media screen and (max-width: 575px) {
        .availability-form {
            margin: 25px;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae tempora placeat commodi nulla ipsam
            laborum quo <br> rerum autem nobis dolorum delectus at porro iste, odio rem? Ipsa, eos!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1387.4586037672818!2d107.14647667339156!3d10.395697334627467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756fd4554f0cf5%3A0xb24fd23bf641fa40!2zVsWpbmcgVMOgdSwgQsOgIFLhu4thIC0gVsWpbmcgVMOgdSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710661690680!5m2!1svi!2s"
                        class="w-100 rounded mb-4" height="320px" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/TkpwJFueXijHawj1A" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill">28 Đường Thi Sách, Phường 8, Thành phố Vũng Tàu,
                            Tỉnh Bà Rịa - Vũng Tàu, Việt Nam</i>
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +84398897449" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+84398897449
                    </a>
                    <br>
                    <a href="tel: +84902034008" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+84902034008
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="Mail To: tuongthanh14122003@gmail.com "
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-paper-fill"> </i>Tuongthanh14122003@gmail.com</a><br>
                    <a href="MailTo: phannhattruong@gmail.com " class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-paper-fill"> </i>Phannhattruong@gmail.com</a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook mi-1"></i>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-youtube"></i> Youtube
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">

                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/Wifi.svg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Obcaecati totam suscipit fugit
                        rerum
                        dolorem temporibus?</p>
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php require('inc/footer.php'); ?>




    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> -->
    <!-- <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script> -->
</body>

</html>