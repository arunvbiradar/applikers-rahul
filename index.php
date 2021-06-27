<?php include('templates/header.php') ?>

<!-- main -->
<div class="main home">
    <section class="welcome-content p-0">
        <!-- carousel -->
        <div id="welcome-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/welcome-carousel/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Integrated ShopFloor</h5>
                        <h2>On Demand Custom Parts Manufacturing</h2>
                        <?php //<a href="#" class="btn btn-primary btn-lg">Discover More</a> ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/welcome-carousel/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Cutting edge 3D Printing</h5>
                        <h2>products which drives ideas to reality</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/welcome-carousel/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Your vision</h5>
                        <h2>functionality and quality are important for us.</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#welcome-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#welcome-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- timings -->
        <div class="timings left-content">
            <ul class="list-inline">
                <li class="list-inline-item">Mon - Fri</li>
                <li class="list-inline-item">9AM - 7PM</li>
            </ul>
        </div>

        <?php /*
        <!-- social-links -->
        <div class="social-links left-content">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank">Twitter</a></li>
                <li class="list-inline-item"><a href="#" target="_blank">Facebook</a></li>
                <li class="list-inline-item"><a href="#" target="_blank">Youtube</a></li>
            </ul>
        </div> */ ?>
    </section>

    <!-- services -->
    <section class="services bg-dark">
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

    <!-- quote -->
    <?php include('./templates/quote.php'); ?>
    <?php /*
    <!-- clientele -->
    <section class="clientele">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
                <li class="list-inline-item">
                    <img src="./assets/images/client.png" alt="">
                </li>
            </ul>
        </div>
    </section> */ ?>

    <!-- blog -->
    <section class="blog bg-light">
        <h2 class="title">Live updates</h2>
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-xl-4">
                    <div class="card card-blog">
                        <a href="https://www.headmade-materials.de/en/news/post/with-3d-printing-to-the-top-of-formula-student"
                            target="_blank" class="blog-img"
                            style="background-image: url(https://www.headmade-materials.de/files/content/news-aktuelles/rennstall-esslingen_oel-abscheider.png);"></a>
                        <div class="card-body">
                            <ul class="blog-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="far fa-clock"></i>
                                    17/May
                                </li>
                                <li class="list-inline-item">
                                    <i class="far fa-user"></i>
                                    Rahul
                                </li>
                            </ul>
                            <h4 class="card-title">With 3D printing to the top of Formula Student.</h4>
                            <p class="card-text">Every year, the Esslingen racing team develops a vehicle for
                                participation in the international Formula Student competition...</p>
                            <a href="https://www.headmade-materials.de/en/news/post/with-3d-printing-to-the-top-of-formula-student"
                                target="_blank" class="btn btn-outline-secondary">Read More &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card card-blog">
                        <a href="https://www.headmade-materials.de/en/news/post/headmade-materials-enables-high-end-titanium-pedals-for-bikes"
                            target="_blank" class="blog-img"
                            style="background-image: url(https://www.headmade-materials.de/files/content/news-aktuelles/myti-prototype-large.jpeg);"></a>
                        <div class="card-body">
                            <ul class="blog-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="far fa-clock"></i>
                                    06/Jun
                                </li>
                                <li class="list-inline-item">
                                    <i class="far fa-user"></i>
                                    Rahul
                                </li>
                            </ul>
                            <h4 class="card-title">Headmade Materials enables high-end Titanium pedals for bikes.</h4>
                            <p class="card-text">For Additive Manufacturing of metal parts several technologies exist,
                                the most common process available in industry is the Metal Laser Sintering...</p>
                            <a href="https://www.headmade-materials.de/en/news/post/headmade-materials-enables-high-end-titanium-pedals-for-bikes"
                                target="_blank" class="btn btn-outline-secondary">Read More &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('./templates/contact-info.php');
include('./templates/footer.php');
?>