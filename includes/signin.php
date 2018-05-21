<?php
session_start();
if(isset($_POST['submit'])){
include'db.php';  
$user_name= mysqli_real_escape_string($conn, $_POST['user_name']);
$pwd= mysqli_real_escape_string($conn, $_POST['password']);

//error handlers
if(empty($user_name)||empty($pwd))
{
     header("Location: .   ./login.php?login=empty");
     exit();  
} 
else
{
  $sql="SELECT*FROM user WHERE user_name='$user_name'"; 
  $result=mysqli_query($conn, $sql);
  $resultcheck=mysqli_num_rows($result);
  if($resultcheck<1)
   {
header("Location: ../login.php?login=error");
exit();
}
else
{
if($row=mysqli_fetch_assoc($result))
{
$PwdCheck = password_verify($pwd, $row['password']);
         echo'<script>alert"$pwd"</script>';
if($PwdCheck == false)
{
header("Location: ../login.php?login=error");
exit();
}
elseif($PwdCheck == true)
{
 $_SESSION['u_id']=$row['user_name'];   
header("Location: ../index.php?login=success");
exit();
}
}
}      
}
}
else{
     header("Location: ../login.php?login=unsuccess");
     exit();
}