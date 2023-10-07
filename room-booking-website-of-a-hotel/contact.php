<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj hotel---- CONTACT</s></title>
    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    <!-- <style>
        .availablity-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen {
            .availablity-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style> -->
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            <br>Ut accusantium culpa voluptatum laboriosam commodi reiciendis repudiandae fugiat animi tempora libero?
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-log-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe height="320px" class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230661.04485540322!2d81.63676717421488!3d25.402171890943983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1682526638821!5m2!1sen!2sin" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/xVsyP2agNEBXcMBY6?coh=178573&entry=tt" target="_blank" class="text-decoration-none d-inline-block mb-2">
                        <i class="bi bi-geo-alt-fill"></i>Ayodhya,(uttar Pradesh)
                    </a>
                    <h5 class="mb-4">Call us</h5>
                    <a href="tel: +919034040304" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91-9876543210
                    </a>
                    <br>
                    <a href="tel: +919050454040" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91-0123456789
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href=mailto:ghanshyammangla15@gmail.com class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> abc@gmail.com</a>

                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>

            </div>
            <div class="col-log-4 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize:none"></textarea>
                            <!-- <input type="text" class="form-control shadow-none"> -->
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>

            </div>
        </div>

    </div>



    <?php require('inc/footer.php'); ?>
</body>

</html>