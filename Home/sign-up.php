<?php
  // include("../Home/config.php");

  require("config.php");
  
  error_reporting(0);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HAPPY FOUNDATION</title>
  <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png" width=60px>
  <link rel="stylesheet" href="../Home/home.css">
  </link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </link>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  <script>
    $(function () {

      $(".togglePassword1").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye") ? "text" : "password";
        $("#formGroupExampleInput4").attr("type", type);
      });
    });
    $(function () {
      $(".togglePassword2").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye") ? "text" : "password";
        $("#formGroupExampleInput5").attr("type", type);
      });
    });
</script>


  <style>
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
      color: black;
    }

    a:hover {
      text-decoration: none;
    }

    a:active {
      text-decoration: none;
    }
  </style>

</head>

<body style="background-image: url('../Assets/Images/bg8.jpeg'); background-repeat: no-repeat; background-size: cover; ">
  <nav >
    <br >
    <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png"
     style="width:50px; height: 45px"></img> <strong>HAPPY FOUNDATION</strong></a>
     </div>'
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
  
  
<?php
// if(isset($_POST['submit']))
// {
  
//   $fname=$_POST['fname'];
//   $lname=$_POST['lname'];
//   $uname=$_POST['uname'];
//   $gen=$_POST['gen'];
//   $gmail=$_POST['gmail'];
//   $mobile=$_POST['mobile'];
//   $password=$_POST['password'];
  


//   if(!$error)
  
  // {
//     echo '
//     <script type="text/javascript">
//     $(document).ready(function(){
//       Swal.fire({
//         position: "center",
//         icon: "success",
//         title: "Your work has been saved",
//         showConfirmButton: false,
//         timer: 7500
//       })
//     });
//     </script>
//     ';
//   }
//   else
//   {
//     echo '
//     <script type="text/javascript">
//     $(document).ready(function(){
//       Swal.fire({
//         position: "center",
//         icon: "error",
//         title: "Please fill out all field",
//         showConfirmButton: false,
//         timer: 7500
//       })
//     });
//     </script>
//     ';
//   }
// }
?>

  <form  action="" method="post" class="needs-validation">
  
    <!-- <section class="h-100 gradient-custom"> -->
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
       
        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
        <div class="card-body p-3 ">
          <div class="container my-3">
            <div class="row g-3 mb-3">
           
            
              <center>
                <h2><U>SIGN-UP HAPPY FOUNDATION </U></h2>
              </center>
              <hr>

               
              <div class="col">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" name="fname"placeholder="First name"  minlength="3"  required="true">
                <div class="invalid-feedback">Please fill out this notfield</div>
               </div>
              
              <div class="col">
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" name="lname"  placeholder="Last name"  minlength="3"  required="true">
                <div class="invalid-feedback">Please fill out this field</div>
              </div>  
              
              <div class="mb-2">
                <label class="form-label">Username :</label>
                <input type="text" class="form-control" id="formGroupExampleInput1" name="uname"  minlength="3" maxlength="17"  placeholder="e.g. xyz" oninvalid="this.setCustomValidity('Enter User Name Here')"
  oninput="this.setCustomValidity('')" required>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>
              <br><br>
              <div class="mb-2">
                <label class="form-label " >Gender :</label>
                 <br>
                <input type="radio"  name="gen" value="MALE" > Male
                <input type="radio"  name="gen" value="FEMALE" > Female
                <input type="radio"  name="gen" value="OTHER" > Other
                
              

                <div class="invalid-feedback">Please fill out this field</div>
              </div>

              <div class="mb-2">
                <label class="form-label"> Email Address :</label>
                <input type="email" class="form-control" name="gmail" 
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="e.g. xyz@info.com" required>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>

              <div class="mb-2">
                <label class="form-label">Phone Number :</label>
                <input type="tel" class="form-control"  minlength="10" maxlength="10" 
                  name="mobile" placeholder="e.g. (0000) 000 000"  required>
                <div class="invalid-feedback">Please fill out this field</div>

              </div>
              <div class="mb-2">
                <label class="form-label">Password :</label>
                <input type="password" id="formGroupExampleInput4" class="form-control" minlength="6" maxlength="16" name="password"
                  placeholder="e.g. Type your password" required>
                <span class="fa fa-fw fa-eye-slash field_icon togglePassword1" toggle="#password_feild1"
                  style=" color:black; margin-top: -27px; margin-left: 400px; cursor: pointer; position: absolute"></span>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>
              <div class="mb-2">
                <label class="form-label">Conform-Password :</label>
                <input type="password"  id="formGroupExampleInput5" class="form-control" minlength="6" maxlength="16" name="cpassword"
                  placeholder="e.g. Type your Conform-password" required>
                <span class="fa fa-fw fa-eye-slash field_icon togglePassword2" toggle="#password_feild1"
                  style=" color:black; margin-top: -27px; margin-left: 400px; cursor: pointer; position: absolute"></span>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>
              
                
              <button type="submit" class="btn btn-outline-success mt-4" name="submit"  href="#" >SIGN-UP</button>

              <div>
              <p class="mb-2">Have you an account? <a href="../Home/sign-in.php" class="text-white-50 fw-bold">  SIGN-IN <i class="bi bi-arrow-right-square-fill"></i></a>
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
  </form>
  </section>
</body>


</html>
<?php

if(isset($_POST['submit']))
{
  $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 $user_exists_query="SELECT * FROM `happy_fnd` WHERE `gmail`= '$_POST[gmail]' OR `uname`='$_POST[uname]'";
 $query=mysqli_query($conn,$user_exists_query);
if($query)
{
  if(mysqli_num_rows($query)>0)  #if any user has alrady taken username or email
  {
    $query_fetch=mysqli_fetch_assoc($query);
    if($query_fetch['uname']==$_POST['uname'])
    {
      #error for username already existse
      echo "<script>
          alert('$query_fetch[uname] - Username aleardy exists');
        </script>";
    }

    #error for email already existse
    else{
      echo "<script>
        alert('$query_fetch[gmail] - Email aleardy Registered');
      </script>";
    }
  }
  else if($password != $cpassword)
  {
    echo "<script>
      alert('Password Mismatch');
    </script>";
  }
  else{
    $password = md5($_POST['password']);
    
    // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $result= "INSERT INTO `happy_fnd`(`fname`, `lname`, `uname`, `gen`, `gmail`, `mobile`, `password`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[gen]','$_POST[gmail]','$_POST[mobile]','$password')";
    // $result= "INSERT INTO happ values('$fname','$lname','$uname','$gen','$gmail','$mobile','$password')";
    $query1=mysqli_query($conn,$result);
    
    if($query1)
      
    { #if data <inser></inser>ted succesfully
          
            ?>
             <!-- header("location: home.php"); -->
             <meta http-equiv = "refresh" content="0 url=http://localhost/Ngo/Home/sign-in.php">
            <?php
           
    }
  }

}
else{
  echo "<script>
  alert('Connot Run query');
</script>";
}
}
?>
<?php

?>


