<?php

include 'configg.php';
$pname = $_GET['p'];

    
$sql = "SELECT * FROM products WHERE name = '".$pname."' ";
        
if ($result = $conn -> query($sql)) {
    while ($row = $result -> fetch_row()) {
    
    $price = $row[3];
    $image = $row[4];

        }
    }
    
    $quantity = '1';
   // (image, product, price, quantity, total)
            
          echo $price;
          echo $pname;  
        
    $reg = " INSERT INTO cartedit ( image, product, price, quantity, total) VALUES ('$image', '$pname', '$price', '$quantity', '$price')";
    mysqli_query($conn, $reg);
    header('location: product.php');
    

?>