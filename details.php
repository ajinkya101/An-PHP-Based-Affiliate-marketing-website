
<?php
include("functions/functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php

include("header.php");

cart();


?>




    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <a href="#">Home</a> &lt; <span class="current">Category name</span> </div>
    <div class="left_content">
   


      <div class="title_box">Special Product</div>
     

<?php

special();


?>



      <br><br><br><br>

 <div class="title_box">Popular Product</div>
     

<?php

special();


?>
        
        <br><br><br><br>
      <div class="banner_adds"> <a href="details.php?pro_id=20"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>
    
    
    
    <!-- end of left content -->
    <div class="center_content">
     
      
<?php

details();

?>





      <div class="center_title_bar">Similar products</div>
    


  <?php
  
  getpro3();
  
  ?>
     
      
      
      
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Guest!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;item(s)<br />
          <span class="border_cart"></span> Total: <span class="price"><?php total_price(); ?></span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
      <br><br><br><br>
      
      
      <div class="title_box">What’s new</div>
     

<?php

special();


?>     
     
     
     <br /><br /><br /><br />
     
     
      <div class="banner_adds"> <a href="details.php?pro_id=22"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"> <img src="images/footer_logo.png" alt="" width="170" height="49"/> </div>
    <div class="center_footer"> All Rights Reserved 2016<br />
      
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about</a> <a href="#">sitemap</a> <a href="#">rss</a> <a href="contact.html">contact us</a> </div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
