<?php include 'partials/header.php';?>
<?php include 'partials/nav.php';?>

<?php

if ($login) {
    header('Location: /customcss');
    exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u_email = $_POST['email'];
    $u_password = $_POST['password'];

    if($u_email == $email and $u_password == $password) {
        login();
        header('Location: /customcss/protected');
        exit;
    }
}

?>

<h1>Login</h1>
    <form action="/customcss/login" method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type= "submit" value="Login">
    </form>

<?php include 'partials/footer.php';?>