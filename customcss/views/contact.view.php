<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>


<?php foreach ($post as $p) { ?>
    <p>
        <?= $p['title'] ?>
    </p>

<?php } ?>

<?= $post2['title']; ?>

<?php


$sql3 = 'insert into 
          author(name) 
          values ';
for($i=0; $i<20000;$i++){
    $sql3 .= '(\'Author ' . $i . '\'),';
}
//echo $sql;
// makni zadnji zarez
$sql3 = substr($sql3,0,strlen($sql3)-1);


$statement3= $pdo->prepare($sql3);

$statement3->execute();


?>


    <div class="map-responsive">

        <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44707.134459526686!2d18.647659434234253!3d45.546384506024125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a869728075%3A0x5b8c725621a41195!2sOsijek!5e0!3m2!1sen!2shr!4v1672785361625!5m2!1sen!2shr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h1>Contact us</h1>
        <form action="/customcss/contact" method="POST">
            <label for="title">Name:</label>
            <input type="text" name="title" id="title">
            <label for="body">Text</label>
            <input type="text" name="body" id="body">
            <label for="author_id">id</label>
            <input type="text" name="author_id" id="author_id">
            <input type="submit">Submit

        </form>
        <form action="/customcss/contact" method="POST">
            <div class="row_contact">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>

            <label for="subject">Your subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Your message:</label>
            <input type="textarea" name="message" id="message">
            <input type="submit" value="Save">

        </form>
        <div class="box"></div>

    </div>


<?php include 'partials/footer.php'; ?>