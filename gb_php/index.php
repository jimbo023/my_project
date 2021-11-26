
<form action="/products/index.php" method="post">
    <h4>iPhone</h4>
    <h5>50000</h5>
    <input type="submit" value="Buy" name="product1">
    <h4>Samsung</h4>
    <h5>45000</h5>
    <input type="submit" value="Buy" name="product2">
    <h4>Motorola</h4>
    <h5>10000</h5>
    <input type="submit" value="Buy" name="product3">
</form>
<h2>Добавленные товары в корзине</h2>

<?php
session_start();
$linkDB = mysqli_connect('localhost', 'root', '', 'gb');
if ($linkDB) {

    if (isset($_SESSION['cart'])) {
        $arra = $_SESSION['cart'];
    }

    if (isset($_POST['product3'])) {
        $querySELECT = "SELECT * FROM products WHERE id = 3;";
        $result = mysqli_query($linkDB, $querySELECT);
        while ($row = mysqli_fetch_assoc($result)) {
            $pro = $row['name'] . ' ' . $row['price'].' rub';
        };
    } elseif (isset($_POST['product1'])) {
        $querySELECT = "SELECT * FROM products WHERE id = 1;";
        $result = mysqli_query($linkDB, $querySELECT);
        while ($row = mysqli_fetch_assoc($result)) {
            $pro = $row['name'] . ' ' . $row['price'].' rub';
        };
    } elseif (isset($_POST['product2'])) {
        $querySELECT = "SELECT * FROM products WHERE id = 2;";
        $result = mysqli_query($linkDB, $querySELECT);
        while ($row = mysqli_fetch_assoc($result)) {
            $pro = $row['name'] . ' ' . $row['price'].' rub';
        };
    } else {
        $array = '';
    }
    if (isset($pro)) {
        $arra[] = $pro;
    }
    if (isset($arra)) {
        foreach ($arra as $arr) {
            if (!is_null($arr)) {
                echo "$arr </br>";
            }
        }
    }
    if(isset($arra)){
        $_SESSION['cart'] = $arra;
    }

} else {
    echo 'ERROR: trouble connecting to DB';
};



/*if ($linkDB) {
    $value = session_id();
    setcookie('cart', $value);
    $_SESSION['mypost'] = $_POST;

        if (isset($_POST['product1'])) {
            $querySELECT = "SELECT * FROM products WHERE id = 1;";
            $result = mysqli_query($linkDB, $querySELECT);
            while ($row = mysqli_fetch_assoc($result)) {
                $arr = $row['name'];
            };
        }

        if (isset($_POST['product2'])) {
            $querySELECT = "SELECT * FROM products WHERE id = 2;";
            $result = mysqli_query($linkDB, $querySELECT);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name'];
            }
        }

        if (isset($_POST['product3'])) {
            $querySELECT = "SELECT * FROM products WHERE id = 3;";
            $result = mysqli_query($linkDB, $querySELECT);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name'];
            }
        }

    if(isset($_SESSION['mypost'])){
        if(isset($arr)){
            echo $arr;
        }
    }
      
} else {
    echo 'ERROR: trouble connecting to DB';
}; */