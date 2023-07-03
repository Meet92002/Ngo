<?php
  // include("../Home/config.php");
  require_once("config.php");
  if(isset($_POST['submit']))
  {
    $signup= $_POST['gmail'];
    $password=$_POST['password'];
    $query="select * from happy_fnd where (uname='$signup' OR gmail='$signup')";
    $res=mysqli_query($conn,$query);
    $numRows=mysqli_num_rows($res);
    if($numRows == 1){
        $row =mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
          $_SESSION["login_sess"]="1";
          $_SESSION["login_email"]=$row['gmail'];
          header("location:account.php");
        }
         else{
          header("location:sign_up.php?loginerror=".$signup);
         }
        }
        else{
          header("location:sign_up.php?loginerror=".$signup);
        }
      

    }

  
  ?>