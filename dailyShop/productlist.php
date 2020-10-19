<?php
    include 'configg.php';
    session_start();
    if($_SESSION['fth'] == 1){
      $_SESSION['fth'] = 0;
      header('location: product.php');
    }else{
  
           $sql = "SELECT * FROM products";
            $ref = "";
            if ($result = $conn -> query($sql)) {
            while ($row = $result -> fetch_row()) {
    
             $ref .= '<li>
                  <figure>
                    <a class="aa-product-img" href="product-detail.php"><img src="basketball.png" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href="cartadd.php?p='.$row[2].'"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
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
                
           // echo $ref;
            }
          $result -> free_result();
           }

        header('location: product.php');
          }

?>