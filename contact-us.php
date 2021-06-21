<?php include('./templates/header.php') ?>

<!-- main -->
<div class="main contact-us">
    <!-- banner -->
    <section class="hero-banner">
        <div class="container">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- info -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control">
                                    <label for="">Enter your name</label>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control">
                                    <label for="">Enter your name</label>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control">
                                    <label for="">Enter your name</label>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control">
                                    <label for="">Enter your name</label>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group floating-label">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <label for="">Enter your name</label>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d314.8941834955135!2d77.50715675173483!3d13.0496824559408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1st%20main%20havanoor%20extension!5e0!3m2!1sen!2sin!4v1624301781887!5m2!1sen!2sin"
                            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <ul class="list-unstyled info">
                        <li>
                            <i class="fas fa-marker"></i>
                            <span>#33, 1st Main, Havnoor Extension, Near Soundarya School, Hesarghatta Main Road,
                                Bangalore
                                - 560073</span>
                        </li>
                        <li><i class="fas fa-phone"></i> <a href="tel:8123098861"><span>8123098861</span></a></li>
                        <?php //<li><i class="fas fa-envelope"></i> <span>needhelp@linoor.com</span></li> ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('./templates/footer.php') ?>