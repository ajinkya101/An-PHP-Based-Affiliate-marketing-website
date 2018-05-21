<?php



if(!isset($_POST["answer"]))
{
	header("location:login.html");
}

else
{

 $con = mysqli_connect("localhost","root","","electronix");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}

$answ = $_POST["answer"];

$get_answer = "select secques from ad_log";
$run = mysqli_query($con,$get_answer);

$e = mysqli_fetch_row($run);

$ans = $e[0];

if($answ==$ans)
{
	header("location:fp2.php");
}

else 
{
	echo"<script>alert('Invalid Answer.Please Try Again')</script>";
	echo"<script>window.open('forgotpassword.php','_self')</script>";
}

}
?>