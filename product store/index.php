<?php
include "product.php";

$products = array();

$products[1] = new product("Shoes", 15.99, "Makes your feet soft");
$products[2] = new product("Shirt", 8.99, "Covers your body");
$products[3] = new product("Pants", 10.99, "Hides your pee pee");
$products[4] = new product("Socks", 3.99, "Warms your toes");

echo "<h3></h3>";

if (isset($_GET["view_product"])) {
    $product_id = $_GET["view_product"];
    echo "View Product: " . $product_id . "<br/>";
    
    echo "<p>";
    echo "<strong>Name: " . $products[$product_id]->name . "</strong></br>";
    echo "Price: " . $products[$product_id]->price . "</br>";
    echo "Description: " . $products[$product_id]->description . "</br>";
    echo "</p>";
} else {
    foreach ($products as $id => $product) {
        echo "
            <p>
                <strong><a href='./index.php?view_product=$id'>Name: $product->name</a></strong></br>
                Price: $product->price</br>
                Description: $product->description</br>
            </p>
        ";
    }
}