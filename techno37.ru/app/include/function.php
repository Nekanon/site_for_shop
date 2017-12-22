<?php

function get_popular_products() {
    
    global $link;
    $sql = "SELECT * FROM popular_product";
    
    $result = mysqli_query($link, $sql);
    
    $popular_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $popular_products;
}