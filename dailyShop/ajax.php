<?php
include "configg.php";
global $flag; 
$query="select * from products where Productid is not null "; 
 
  if (isset($_POST['category'])) {
 	$category=$_POST['category'];
 	  if ($flag==0) {
 		   $query.=" AND category='".$category."'";
 		   $flag=1; 
    }
    else{
    	$query.="AND category='".$category."'";  
    }
  } 
  if (isset($_POST['tag'])) {
 	$tag=$_POST['tag'];
 	  if ($flag==0) {
 		   $query.="AND tag='".$tag."'";
 		   $flag=1; 
    }
    else{
    	$query.="AND tag='".$tag."'";  
    	}
  } 
    
  if (isset($_POST['min'])) 
  {
     $min = str_replace("$", "", $_POST['min']);
     $max = str_replace("$", "", $_POST['max']);
     $query.="And Productprice  BETWEEN ".$min." and ".$max." ";
   
  }

  if (isset($_POST['color'])) 
  {
 	$color=$_POST['color'];
   	if ($flag==0) {
   		$query.="AND color='".$color."'";
   		$flag=1;}
   	else{
   		$query.="AND color='".$color."'";
  		}
  } 

  if (isset($_POST['size'])) {
 	$size=$_POST['size'];
   	if ($flag==0) {
   		$query.="AND size='".$size."'";
   		$flag=1;}
   	else{
   		$query.="AND size='".$size."'";
  		}
 	} 
 
 if (isset($_POST['brand'])) {
 	$brand=$_POST['brand'];
  $getselectbrand = implode("','",$brand);
  if ($flag==0) 
  {
    $query.=" AND Productbrand IN ('".$getselectbrand."')";
  }
  else
  {
    $query.="AND Productbrand IN ('".$getselectbrand."')";
	} 
}

 if (isset($_POST['price'])) {
   if($_POST['price']=='LOWTOHIGH')
   {
    $query.=" order by Productprice ASC";
   }
   if($_POST['price']=='HIGHTOLOW')
   {
    $query.=" order by Productprice DESC";
   }
  
  } 
 $result=mysqli_query($conn,$query);
 $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
 echo json_encode($res);

?>