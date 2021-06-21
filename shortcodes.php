<?php include('templates/header.php') ?>

<style>
.color-card {
    width: 75px;
    height: 75px;
    line-height: 75px;
    text-align: center;
    border-radius: 50%;
}

.color-block {
    margin-bottom: 1em;
    margin-right: 1em;
}
</style>

<div class="main">
    <!-- banner -->
    <section class="hero-banner">
        <div class="container">
            <h1>Shortcodes</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shortcodes</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container">
        <div class="row" data-masonry='{"percentPosition": true }'>
            <!-- typography -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Typography</h2>
                    <div class="card">
                        <div class="card-body">
                            <h1>&lt;h1&gt; Lorem ipsum dolor sit.</h1>
                            <h2>&lt;h2&gt; Lorem ipsum dolor sit amet.</h2>
                            <h3>&lt;h3&gt; Lorem ipsum dolor sit amet consectetur.</h3>
                            <h4>&lt;h4&gt; Lorem ipsum dolor sit amet consectetur.</h4>
                            <h5>&lt;h5&gt; Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <h6>&lt;h6&gt; Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <div class="spacer"></div>
                            <p>&lt;p&gt; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit temporibus
                                <a href="">provident</a>
                                consequatur quos!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- colors -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Colors</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-block">
                                <h4>Theme</h4>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-primary text-white shadow">F3E816</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-secondary text-white shadow">243742</span>
                                </div>
                            </div>
                            <div class="d-block spacer">
                                <h4>Accent</h4>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-info text-white shadow">1D84B5</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-warning text-white shadow">f5533d</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-danger text-white shadow">C33149</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-success text-white shadow">A3BE4B</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-grey text-white shadow">D7D0C8</span>
                                </div>
                                <div class="d-inline-block color-block">
                                    <span class="color-card d-block bg-black text-white shadow">3E3E3C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- buttons -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Buttons</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-block">
                                <h4>Theme</h4>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-primary">Primary</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-secondary">Secondary</button>
                                </div>
                            </div>
                            <div class="d-block spacer">
                                <h4>Accent</h4>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-info">Info</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-warning">Warning</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-danger">Danger</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-success">Success</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-light">Light</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-link">Link</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-default">Default</button>
                                </div>
                            </div>
                            <div class="d-block spacer">
                                <h4>Sizes & Types</h4>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-primary btn-sm">Small</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-priamry">Default</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-primary btn-lg">Large</button>
                                </div>
                                <div class="d-inline-block color-block">
                                    <button class="btn btn-outline-primary">Outlined</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alerts -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Alerts</h2>
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it
                        a click if you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give
                        it a click if you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it
                        a click if you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a
                        click if you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it
                        a click if you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a
                        click if you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                        click if you like.
                    </div>
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a
                        click if you like.
                    </div>
                </div>
            </div>

            <!-- accordion -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Accordion</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- horizontal tabs -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Horizontal Tabs</h2>
                    <div class="tabs tabs-horizontal">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#tab-h-1" data-bs-toggle="tab" role="tab" class="nav-link active">Tab 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-h-2" data-bs-toggle="tab" role="tab" class="nav-link">Tab 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-h-3" data-bs-toggle="tab" role="tab" class="nav-link">Tab 3</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-h-4" data-bs-toggle="tab" role="tab" class="nav-link disabled">Tab 4</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-h-1" role="tabpanel"
                                aria-labelledby="list-home-list">Tab 1</div>
                            <div class="tab-pane fade" id="tab-h-2" role="tabpanel" aria-labelledby="list-profile-list">
                                Tab 2</div>
                            <div class="tab-pane fade" id="tab-h-3" role="tabpanel"
                                aria-labelledby="list-messages-list">
                                Tab 3</div>
                            <div class="tab-pane fade" id="tab-h-4" role="tabpanel"
                                aria-labelledby="list-settings-list">
                                Tab 4</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vertical tabs -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Vertical Tabs</h2>
                    <div class="tabs tabs-vertical">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#tab-v-1" data-bs-toggle="tab" role="tab" class="nav-link active">Tab
                                            1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-v-2" data-bs-toggle="tab" role="tab" class="nav-link">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-v-3" data-bs-toggle="tab" role="tab" class="nav-link">Tab 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-v-4" data-bs-toggle="tab" role="tab" class="nav-link disabled">Tab
                                            4</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel"
                                        aria-labelledby="list-home-list">Tab 1</div>
                                    <div class="tab-pane fade" id="tab-v-2" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        Tab 2</div>
                                    <div class="tab-pane fade" id="tab-v-3" role="tabpanel"
                                        aria-labelledby="list-messages-list">
                                        Tab 3</div>
                                    <div class="tab-pane fade" id="tab-v-4" role="tabpanel"
                                        aria-labelledby="list-settings-list">
                                        Tab 4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- breadcrumbs -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Breadcrumb</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shortcodes</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- cards -->
            <div class="col-md-4">
                <div class=" mt-4">
                    <h2>Cards</h2>
                    <div class="card">
                        <img src="https://images.pexels.com/photos/371589/pexels-photo-371589.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- animated cards -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Animated Cards</h2>
                    <div class="row animated-cards">
                        <div class="col-md-6">
                            <div class="card card-with-icon animated bg-dark">
                                <div class="card-body">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-with-icon animated bg-dark">
                                <div class="card-body">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- carousel -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Carousel</h2>
                    <div id="shortcodes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#shortcodes" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#shortcodes" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#shortcodes" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/589840/pexels-photo-589840.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#shortcodes"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#shortcodes"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- modal -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h2>Modals / Popups</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modal-shortcodes">
                        Launch demo modal
                    </button>
                </div>
            </div>

            <!-- popovers -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h4>Popovers</h4>
                    <div class="d-block">
                        <button type="button" class="btn btn-secondary mb-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-tigger="hover" data-bs-placement="top"
                            title="Popover Title" data-bs-content="Top popover">
                            Popover on top
                        </button>
                        <button type="button" class="btn btn-secondary mb-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-tigger="hover" data-bs-placement="right"
                            title="Popover Title" data-bs-content="Right popover">
                            Popover on right
                        </button>
                        <button type="button" class="btn btn-secondary mb-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-tigger="hover" data-bs-placement="bottom"
                            title="Popover Title" data-bs-content="Bottom popover">
                            Popover on bottom
                        </button>
                        <button type="button" class="btn btn-secondary mb-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-tigger="hover" data-bs-placement="left"
                            title="Popover Title" data-bs-content="Left popover">
                            Popover on left
                        </button>
                    </div>
                </div>
            </div>

            <!-- progress -->
            <div class="col-md-4">
                <div class="mt-4">
                    <h4>Progress Bar</h4>
                    <div class="d-block">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal content -->
    <div class="modal fade" id="modal-shortcodes" data-backdrop="static" tabindex="-1"
        aria-labelledby="modal-shortcodesLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-shortcodesLabel">Modal title</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum impedit animi,
                    perferendis consequuntur minima maiores provident ipsum? Eveniet corporis id tempore
                    cupiditate reiciendis dolorum repellendus ad sapiente voluptate. Recusandae, et.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('templates/footer.php') ?>