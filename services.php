<?php include('./templates/header.php') ?>

<!-- main -->
<div class="main our-services">
    <!-- banner -->
    <section class="hero-banner">
        <div class="container">
            <h1>Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- info -->
    <section class="services-info bg-light">
        <div class="container">
            <div class="row animated-cards">
                <div class="col-md-12 col-lg-6">
                    <h2 class="title-main">We Shape the perfect solutions.</h2>
                    <p>We assist industries in digitalization of the manufacturing sector to reach market faster from
                        'concept-to-component' driven by the horizon of pioneer technologies in architecture, product
                        design and manufacturing, enhancing rapid replacement of conventional practices in industries.
                    </p>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-with-icon animated">
                        <div class="card-body">
                            <span class="icon"><i class="fas fa-cash-register"></i></span>
                            <h4 class="card-title">Custom Manufacturing <small
                                    class="d-block font-default fs-6 fw-normal lh-base mt-2">CNC
                                    machining, laser cutting,
                                    ect.</small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-with-icon animated">
                        <div class="card-body">
                            <span class="icon"><i class="fas fa-print"></i></span>
                            <h4 class="card-title">3D Printing<small
                                    class="d-block font-default fs-6 fw-normal lh-base mt-2">in Polymer, Composite,
                                    Metal and Ceramic </small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-with-icon animated">
                        <div class="card-body">
                            <span class="icon"><i class="fas fa-drafting-compass"></i></span>
                            <h4 class="card-title">Technology for Construction <small
                                    class="d-block font-default fs-6 fw-normal lh-base mt-2">We assist to adopt
                                    revolutionary way of constructing structures by combining 3D Construction Printing
                                </small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-with-icon animated">
                        <div class="card-body">
                            <span class="icon"><i class="fas fa-tools"></i></span>
                            <h4 class="card-title">Products we represent <small
                                    class="d-block font-default fs-6 fw-normal lh-base mt-2">Cold Metal Fusion from
                                    Headmade Materials a german metal 3D Printing technology developer, and Composite 3D
                                    Printers from Fabheads "Make in India" company
                                </small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-with-icon animated">
                        <div class="card-body">
                            <span class="icon"><i class="fas fa-receipt"></i></span>
                            <h4 class="card-title">E-commerce platform <small
                                    class="d-block font-default fs-6 fw-normal lh-base mt-2"><a
                                        href="https://www.axlekart.in" target="_blank">Axlekart.in</a> for automotive
                                    car and commercial vehicle genuine spare parts</a>
                                </small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- experience -->
    <?php include('./templates/experince.php'); ?>
</div>

<?php
include('./templates/contact-info.php');
include('./templates/footer.php');
?>