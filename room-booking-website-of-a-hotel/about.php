<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj hotel--- ABOUT</s></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <!-- for color of box upper line -->
    <style>
        .box{
            border-top-color: var(--teal) !important;
            
        }
        .box:hover
        {
            transform:scale(1.04);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="h-font text-center mt-3">
            WELCOME TO OUR TAJ HOTEL
        </p>
    </div>
    <!-- images -->
    <div class="container">
        <div class="row justify">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">WELCOME TO OUR TAJ HOTEL</h3>
                <p>
                    Welcome to TAJ HOTEL. We are delighted to have you as our guest and
                    are committed to providing you with a comfortable and memorable stay.
                    As a first-time guest,we want to ensure that you have a seamless and
                    enjoyable experience with us.
                    please share your experience by giving rating and review.
                    <br>
                    thanks a lot....
                    <br><br><br>
                    --MUKESH AMBANI--
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4order-lg-2 order-md-2 order-1">
                <img src="images/facilities/mukesh.jpg" class="w-50 ">
            </div>

        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col- d-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotelphoto.svg" width="70px">
                    <h4 class="mt-3">100+ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col- d-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/5471.jpg" width="70px">
                    <h4 class="mt-3">200+ CUSTUMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col- d-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/reviews.jpg" width="70px">
                    <h4 class="mt-3">300+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col- d-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.jpg" width="70px">
                    <h4 class="mt-3">200+ STAFF</h4>
                </div>
            </div>

        </div>
    </div>
    <!-- images -->
    <h3 class="my-5 fw-bold h-font text-center">OWNER</h3>
    <div class="container px-4 w-50">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/facilities/mukesh.jpg" class="w-50">

                    <h5 class="mt-2"></h5>
                </div>
                <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/facilities/5560.jpg" class="w-50">

                    <h5 class="mt-2"></h5>
                </div> -->
                <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/facilities/5561.jpg" class="w-50">

                    <h5 class="mt-2"></h5>
                </div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
     <!-- <img src="images/about/" class="w-100"> -->
    <?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints:{
                320: {
                    slidesPerView:1,
                },
                640: {
                    slidesPerView:1,
                },
                768: {
                    slidesPerView:1,
                },
                1024: {
                    slidesPerView:1,
                },
            }
        });
    </script>
</body>

</html>

