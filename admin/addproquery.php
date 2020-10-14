<?php

$con = mysqli_connect('localhost', 'root', '' );
mysqli_select_db($con, 'ecom_temp');
$proname = $_POST['proname'];
$category_id = $_POST['category'];
$price = $_POST['price'];
$image = $_POST['image'];
$tags = $_POST['tag'];
$checkbox = "ecommerce";
if($category_id == 1){
    $category = "Men";
}
if($category_id == 2){
  $category = "Women";
}
if($category_id == 3){
    $category = "kids";
}
if($category_id == 4){
  $category = "Electronics";
}
if($category_id == 5){
    $category = "sports";
}
$long_desc = $_POST['description'];
$short_desc = $category;

foreach ($tags as $t){
    $reg = " insert into products_tags (product_id, tag_id) values ('$proname', '$t')";
    mysqli_query($con, $reg);
}

$reg = " insert into products (product_id, category_id, name, price, image, short_desc, long_desc) values ('$proname', '$category_id', '$proname','$price','$image','$short_desc', '$long_desc' )";
mysqli_query($con, $reg);
echo "<h2>Your process is Successful.</h2>";

?>
