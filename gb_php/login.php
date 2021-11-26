
<form action="/products/login.php" method="post">
    <input type="input" placeholder="email" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value="LogIn">
</form>

<?php
    require_once 'gb.php';
    global $linkDB;

if (isset($_POST['email'], $_POST['password'])) {

    $result = mysqli_query($linkDB, "SELECT * FROM users WHERE email='" . $_POST['email'] . "';");
    $result = mysqli_fetch_assoc($result);
        if (password_verify($_POST['password'], $result['passwords'])) {
            echo "Login successed";
            setcookie('LogIn', $_POST['email']);
            header('location: /products/index2.php');
            die();
        } else {
        echo "Incorrected login/password";
    }
}
