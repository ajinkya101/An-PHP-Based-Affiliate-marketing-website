
<?php

include("functions/functions.php");
include("includes/db.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("header.php");

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
      <div class="center_title_bar">About Us</div>
      <br>
      <div class="about_info">
         <p>This site does the same work as of the Affiliate marketing site, but not for the sake of commission or earning money, instead helping the customer to get true views and good product in valid price. In our site we will include those site which are well licensed and well known for their product so that customer do not feel cheated or fooled. The site will show only true reviews given by the registered person or customer to our site, so that fake reviews are avoided. We will provide long term services for a product brought by a site preferred by us to the customer, even if the warranty of the product is expired, we will help the customer to get it repaired or updated with the applicable charges. It will compare the shopping site including their prices, availability of product, etc and give first preference to the best one by considering all points. Through our site no extra charges will be applied . If the customer register for notifying availability of product, he/she will be notified on their mobile number rather than e-mail.</p>
      </div>
      <br>
      <br>
      <div class="center_title_bar">Contact Us</div>
       <br>
        <div class="contact_info"><p>Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, 
            eget tincidunt nibh pulvinar a. Curabitur arcu erat, 
            accumsan id imperdiet et, porttitor at sem.</p>
        </div>
        <div class="center_title_bar"> Email: contact@deals4deal.com </div>
        <div class="center_title_bar"> Phone: +91 1800 2399 10</div>
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
  
<?php

include("footer.php");

?>
</div>
<!-- end of main_container -->
</body>
</html>
