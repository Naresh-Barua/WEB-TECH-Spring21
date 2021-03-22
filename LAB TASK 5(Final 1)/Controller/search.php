<?php

require 'model/model.php';

if (isset($_POST['search'])) 
{
    $products = searchProduct($_POST['name']);
    require 'displayProduct.php';
}
?>