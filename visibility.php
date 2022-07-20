<?php 
require_once 'product.php';

use Produk\{Product, ProductDummy};

$product = new Product("Banana", 15000);

echo $product->getName();
echo $product->getPrice();

$productDummy = new ProductDummy("Dummy", 2000);
echo $productDummy->info();