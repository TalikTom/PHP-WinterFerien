<?php require 'partials/header.php'; ?>
<main>


    <?php require 'partials/nav.php'; ?>


    <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
    </div>
    </div>
    </header>
</main>



<div class="container mt-4">
    <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
            <div class="form h-100">
                <h3>Contact us</h3>
                <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Subject *</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your subject">
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <div id="form-message-warning mt-4"></div>

            </div>
        </div>
    </div>
</div>
<?php require 'partials/footer.php'; ?>