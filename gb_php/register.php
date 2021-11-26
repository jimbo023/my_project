
<form action="/products/register.php" method="post">
    <input type="input" placeholder="email" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value="register">
</form>

<?php
require_once 'gb.php';
global $linkDB;

if (isset($linkDB)) {
    if (isset($_POST['email'], $_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users set email='" . $_POST['email'] . "', passwords='$password';";
        mysqli_query($linkDB, $query);
        echo "register successed!";
    }
} else {
    echo "Troubles connecting to DB";
}
