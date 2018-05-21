
<?php

include("functions/functions.php");
include("includes/db.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("header.php");
cart();

?>


    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span>
    

    <?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
     
<div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        

    <?php  getbrands();  ?>


 
</ul>
 <br>
 <br>

     
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
      
           <br>
 <br>
 <br>
     
 
        <?php

         special();

        ?>

    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">All Products</div>


<?php  



$get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        



       if(isset($_SESSION['u_id'])){
      
    echo"
                  

                 <div class='center_title_bar'>$product_title</div>
                 <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='product_img_big'> <a href='javascript:popImage('admin_area/product_images/$product_image','Some Title')' title='header=[<img src=admin_area/product_images/$product_image>] body=[&nbsp;] fade=[on]'><img src='admin_area/product_images/$product_image' height=200 width=185 alt='' border='0' /></a>
            </div>
          <div class='details_big_box'>
            <div class='product_title_big'>$product_title</div>
            <div class='specifications'>
            $product_description
            </div>
            <div class='prod_price_big'> <span class='price'>Rs $product_price</span></div>
            <a href='details.php?addcart=$product_id' class='addtocart'>add to cart</a> <a href='index.php' class='compare'>Home</a> </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div>";

}
else{
      
    echo"
                  

                 <div class='center_title_bar'>$product_title</div>
                 <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='product_img_big'> <a href='javascript:popImage('admin_area/product_images/$product_image','Some Title')' title='header=[<img src=admin_area/product_images/$product_image>] body=[&nbsp;] fade=[on]'><img src='admin_area/product_images/$product_image' height=200 width=185 alt='' border='0' /></a>
            </div>
          <div class='details_big_box'>
            <div class='product_title_big'>$product_title</div>
            <div class='specifications'>
            $product_description
            </div>
            <div class='prod_price_big'> <span class='price'>Rs $product_price</span></div>
            <a href='index.php' class='compare'>Home</a> </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div> ";
}

 }









 ?>




  
 
  </div>
  
 
    <!-- end of center content -->
<div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Guest!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;item(s)<br />
          <span class="border_cart"></span> Total: <span class="price"><?php total_price(); ?></span> </div>
        <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
       
       <br>
     
            <?php
 
            special();

           ?> 

        <br>
     
 
        <?php

         special();

        ?>
        
             <br>
     
 
        <?php

         special();

        ?>
     <br>
     
 
        <?php

         special();

        ?>


      
        <!-- end of right content -->
</div>
  <!-- end of main content -->
  <?php

include("footer.php");

?>
 
</div>
<!-- end of main_container -->
</body>
</html>
