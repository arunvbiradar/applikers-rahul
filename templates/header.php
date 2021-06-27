<?php
    if($_SERVER['SERVER_NAME'] === 'localhost') {
        $baseUrl = 'http://localhost:5500/_projects/inprogress/rahul/';
    } else {
        $baseUrl = 'http://vishwam.tech';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <base href="<?= $baseUrl; ?>">

    <!-- fonts -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&family=Teko&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Vishwam Tech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="shortcodes.php">Shortcodes</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right d-flex">
                    <a href="tel:8123098861" class="call-us"><img src="./assets/images/chat-icon.png" alt="">
                        <div class="content">
                            <span class="text">Call Anytime</span>
                            <span class="number">8123 098861</span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </header>