<?php
require_once('Product.php');

$product1 = new Product();
$product1->name = "Laptop";
$product1->price = 10000;
$product1->brand = "Dell";
$product1->image = "image/lap.jpg";
$product1->description = "High performance laptop";
// echo $product1->getName() . "<br>";
// echo $product1->getFinalPrice(500) . "<hr>";





$product2 = new Product();
$product2->name = "LED Monitor";
$product2->price = 4200;
$product2->brand = "LG";
$product2->image = "image/led.jpg";
$product2->description = "high Led monitor";
// echo $product2->getName() . "<br>";
// echo $product2->getFinalPrice(100) . "<hr>";




$product3 = new Product();
$product3->name = "Headphones";
$product3->price = 1200;
$product3->brand = "Sony";
$product3->image = "image/hedphon.jpg";
$product3->description = "Noise-cancelling headphones";
// echo $product3->getName() . "<br>";
// echo $product3->getFinalPrice(100) . "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
    <h1 class="text-center mb-4"> Products</h1>
    <div class="row">
        <?php
        $product1->display(500);
        $product2->display(100);
        $product3->display(100);
        ?>
    </div>
</div>
</body>
</html>