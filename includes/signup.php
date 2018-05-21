<?php
include_once'db.php';
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn,$_POST['name']);
$e_mail= mysqli_real_escape_string($conn,$_POST['e_mail']);
$password1= mysqli_real_escape_string($conn,$_POST['password1']);
$password2= mysqli_real_escape_string($conn,$_POST['password2']);
$gender= mysqli_real_escape_string($conn,$_POST['gender']);
$mobile_no= mysqli_real_escape_string($conn,$_POST['mobile_no']);
//$image= mysqli_real_escape_string('images/'.$_FILES['image']['name']);

//error handlers
if(empty($name)||empty($e_mail)||empty($password1)||empty($password2)||empty($gender)||empty($mobile_no))
{
     header("Location: ../register.php?register=empty");
     exit();  
}
else if(!preg_match("/^[a-zA-Z]*$/",$name)||!preg_match("/^[1-9]*$/",$mobile_no||!preg_match("/^[a-zA-Z]*$/",$gender)))
{
      header("Location: ../register.php?register=invalid");
      exit();      
}
else if (!filter_var($e_mail,FILTER_VALIDATE_EMAIL))
{      
      $sql="SELECT*FROM user WHERE e_mail='$e_mail'";
      $result=mysqli_query($conn, $sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck > 0)
      {
      header("Location: ../register.php?register=email already exist");
          exit(); 
      }
}
else if ($password1!=$password2)
{
      header("Location: ../register.php?register=password not matched");
      exit(); 
}
else if (strlen($mobile_no)!=10)
{
      header("Location: ../register.php?register=invalid no");
      exit(); 
}
else
{
      $hashedPwd = password_hash($password2, PASSWORD_DEFAULT);  
      $sql="INSERT INTO user (name, user_name, password, gender, contact) VALUES ('$name','$e_mail', '$hashedPwd', '$gender', '$mobile_no');"; 
      $result1=mysqli_query($conn, $sql);  
      $resultcheck1= mysqli_num_rows($result);
               if($resultcheck1>=0){
                        
                        header("Location: ../login.php?login=sucess");
                       

      exit(); }
         else{header("Location: ../register.php?register=unsuccessdatabase");

     exit();}
}             
}

else{
     header("Location: ../register.php?register=unsuccess");
     exit();
}
