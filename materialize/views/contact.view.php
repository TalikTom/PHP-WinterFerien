<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<div class="contact-wrapper center-align container">
    <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44707.134459526686!2d18.647659434234253!3d45.546384506024125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a869728075%3A0x5b8c725621a41195!2sOsijek!5e0!3m2!1sen!2shr!4v1672785361625!5m2!1sen!2shr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Your name" id="name" type="text" class="validate">
                    <label for="name">Name</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="subject" type="text" class="validate">
                    <label for="subject">Subject</label>
                </div>
            </div>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                </form>
            </div>

        </form>

</div>

<?php require 'partials/footer.php'; ?>