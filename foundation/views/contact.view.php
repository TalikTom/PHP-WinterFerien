<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>



<form>
    <div class="grid-container">
        <div class="grid-x">
        <iframe class="large-12"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44707.134459526686!2d18.647659434234253!3d45.546384506024125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a869728075%3A0x5b8c725621a41195!2sOsijek!5e0!3m2!1sen!2shr!4v1672785361625!5m2!1sen!2shr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label>Name
                    <input type="text" placeholder="Enter your name">
                </label>
            </div>
            <div class="medium-6 cell">
                <label>Email
                    <input type="text" placeholder="Enter your email">
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">

            <div class="medium-6 cell">
                <label>Subject
                    <input type="text" placeholder="Enter subject">
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">

            <div class="medium-6 cell">
                <label>
                    Message
                    <textarea placeholder="Enter your message"></textarea>
                </label>
            </div>
        </div>
    </div>
</form>
<?php require 'partials/footer.php'; ?>

