<?php

    require "configg.php";
?>
<?php 
 

 if (isset($_GET['id']) ) {
    $update=$_GET['id'];
}
echo $update;
$sql1="DELETE from cartedit WHERE id='".$update."'";
$result=$conn->query($sql1);
header("Location: cartadd.php");

?>
