<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Deals 4 Deal</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
  
  
  <div id="form">
  
  <form method="get" action="results.php" enctype="multipart/form-data">
  
  
    <div class="top_search">
      <div class="text">Advance Search</div>
      <input type="text" class="search_input" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search your need"/>
      <input type="submit" value="Search" class="search_bt" name="search"/>
    </div>
    
    
    </form>
    
    </div>
    
    
    </div>
  <div id="header">
    <div id="logo"> <a href="index.php"><img src="images/logo4.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
       
    <?php
    
    sliderdata();



?>
      </div>

      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
       
        <li class="divider"></li>
        <li><a href="cart.php" class="nav3">Cart</a></li>
        <li class="divider"></li>
        <li><a href="service.php" class="nav4">Service</a></li>   <li class="divider"></li>  
        <li><a href="contact.php" class="nav6">Contact us </a></li>      
        <li class="divider"></li>
        <?php
         if(isset($_SESSION['u_id'])){
         echo'<form action="includes/logout.php" method="POST">
         <button type="submit" name="submit" class="search_bt1">LOGOUT</button>
         </form>';     
         }
         else{
         echo' <li ><a href="register.php"><button class="search_bt1" >SIGN-IN</button></a></li>   
         <li ><a href="login.php"><button class="search_bt1" >LOGIN</button></a></li>';
         }
         ?>
                    
      </ul>
      
      <div class="right_menu_corner"></div>
    </div>
