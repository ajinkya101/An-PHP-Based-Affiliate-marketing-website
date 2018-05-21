
<?php

include("functions/functions.php");
include("includes/db.php");

include ('header.php');
?>
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
  <div id="form">


	<div class="formbox1" >

		<h1>Register</h1>
		<form action="includes/signup.php" method="POST">

		<p><input id="text2"  name="name" type="text" placeholder="&nbsp;&nbsp;&nbsp;Name" required/></p>
		
		<p><input id="text2"  name="e_mail" type="text" placeholder="&nbsp;&nbsp;&nbsp;E-Mail" required/></p>

		<p><input id="text2"  name="password1" type="text" placeholder="&nbsp;&nbsp;&nbsp;Enter Password" required/></p>
		
		<p><input id="text2" name="password2"type="text" placeholder="&nbsp;&nbsp;&nbsp;Confirm Password" required/></p>
						
		<p><input id="text2" name="gender" type="text" placeholder="&nbsp;&nbsp;&nbsp;Gender" required/></p>
		
		<p><input id="text2"  name="mobile_no" type="text" placeholder="&nbsp;&nbsp;&nbsp;Mobile No." required/></p>
		
		<!--<p><strong class="pi">Upload Your Image:</strong></p>
		<p><input type="file" id="text2" name="image" required/></p>-->
		
		<p><input id="btn1" type="submit" name="submit" value="Sign Up&nbsp;&nbsp;&nbsp";/>
		
        </form>
	</div>
</div>
</div>
  
 
  
  
 
    <!-- end of center content -->
<div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Guest!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;item(s) <br />
          <span class="border_cart"></span> Total:<span class="price"><?php total_price(); ?> </span> </div>
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
</body>

</html>
