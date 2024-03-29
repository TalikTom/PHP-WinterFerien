<?php require 'partials/header.php'; ?>


<?php require 'partials/nav.php'; ?>


    <div class="container mt-4">
        <div class="row align-items-stretch no-gutters contact-wrap">
            <iframe class="mb-4"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44707.134459526686!2d18.647659434234253!3d45.546384506024125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a869728075%3A0x5b8c725621a41195!2sOsijek!5e0!3m2!1sen!2shr!4v1672785361625!5m2!1sen!2shr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Your email">
                            </div>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Subject *</label>
                            <input type="text" class="form-control" name="subject" id="subject"
                                   placeholder="Your subject">
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