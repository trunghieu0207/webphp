<?php
require 'source/class.php';
$p = new Database();
session_start();
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
$product = $p->get_sp_cart($id);
if ($product) {
    if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] += 1;
        } else {
            $_SESSION['cart'][$id]['qty'] = 1;
            $_SESSION['cart'][$id]['name'] = $product['name'];
            if ($product['promotion_price'] != 0) {
                $_SESSION['cart'][$id]['gia'] = $product['promotion_price'];
            } else {
                $_SESSION['cart'][$id]['gia'] = $product['price'];
            }
            $_SESSION['cart'][$id]['img'] = $product['image'];
        }
        echo '<script>
					history.back();
				</script>';
        exit();
    } else {
        var_dump('chua ton tai');
        $_SESSION['cart'][$id]['qty'] = 1;
        $_SESSION['cart'][$id]['name'] = $product['name'];
        if ($product['promotion_price'] != 0) {
            $_SESSION['cart'][$id]['gia'] = $product['promotion_price'];
        } else {
            $_SESSION['cart'][$id]['gia'] = $product['price'];
        }
        $_SESSION['cart'][$id]['img'] = $product['image'];
        echo '<script>
					history.back();
				</script>';
        exit();
    }
}