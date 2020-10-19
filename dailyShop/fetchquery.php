<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $_SESSION["fth"] = 1;
    include 'configg.php';
    include 'productlist.php';
    $val = $_GET['c'];
  
           $sql = "SELECT DISTINCT * FROM products WHERE category_id = '".$val."'";
            $ref = "";
            if ($result = $conn -> query($sql)) {
            while ($row = $result -> fetch_row()) {
    
             $ref .= '<li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="basketball.png" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">'.$row[2].'</a></h4>
                      <span class="aa-product-price">$ '.$row[3].'</span>
                      <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                  </div>
                  
                </li>';
                
            
            }
          $result -> free_result();
           }
        //echo $ref;   
      //header('location: productlist.php');

?>