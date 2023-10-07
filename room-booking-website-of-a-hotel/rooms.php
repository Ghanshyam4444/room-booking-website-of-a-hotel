<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj hotel----ROOMS</s></title>
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
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABLITY</h5>
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">wi-fi</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">AC</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Telivison</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Room heater</label>
                                </div>

                            </div>
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3 ">
                                        <label class="form-label">ADULT</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">CHILDREN</label>
                                        <input type="number" class="form-control shadow-none">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_11892.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none"> -->
                                <h5 class="mb-3">ROOM NUMBER : 1</h5>
                            
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <!-- <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span> -->
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹2000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_39782.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 2</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Room
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <!-- <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span> -->
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <!-- <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span> -->
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹1000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_42663.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 3</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹4000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_65019.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 4</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    6 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹10000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_67761.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 5</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹2500 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_70583.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 6</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹1500 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>

                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/IMG_78809.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 7</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹4000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <!-- <a href="room1.php" class="text-decoration-none">
                                </a> -->
                                <h5 class="mb-3">ROOM NUMBER : 8</h5>

                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    2 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    1 kitchen
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilaties mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Wi-fi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Telivison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center ">
                            <h6 class="mb-4">₹4000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="room1.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php'); ?>
</body>

</html>
