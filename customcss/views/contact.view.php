<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44707.134459526686!2d18.647659434234253!3d45.546384506024125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a869728075%3A0x5b8c725621a41195!2sOsijek!5e0!3m2!1sen!2shr!4v1672785361625!5m2!1sen!2shr"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>


<form class="cf">
    <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name">
        <input type="email" id="input-email" placeholder="Email address">
        <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
</form>


<?php include 'partials/footer.php'; ?>