<?php

require_once 'gb.php';
if(isset($_COOKIE['LogIn'])){
    echo "Welcome, ".$_COOKIE['LogIn'];
} else {
    header('location: /products/login.php');
}

