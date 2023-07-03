<?php
include('../Home/config.php');
$message ='';
//  session_start();
if(isset($_POST["submit"]))
{
  if(isset($_POST["check_otp"]))  
  {
   if(empty($_POST["user_email"]))
    {
        $message=' <div class="alert alert-danger">Email Address is required</div>';
    }
    else
    {
        $data=array(
            ':user_email'  => trim($_POST["user_email"])

        );
        $quert ="SELECT * FROM register_user WHERE user_email=:user_email";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        if($statement->rowcount() >0)
        {
            $result=$statement->fetchAll();

            foreach($result as $row)
            {
               if($row["user_email_status"] == 'not verified')
               {
                    $message ='<div class="alert alert-info">Your Email Address is not verify,so first verify your email address by click on this <a href="resend-email_otp.php">link</a></div>';
               }
               else
               {
                    $user_otp =rand(10000,999999);
              
                    $sub_query ="UPDATE register_user SET user_otp='".$user_otp."'WHERE register_user_id='".$row["register_user_id"]."'";  
                    $connect->query($sub_query);

                    require 'class/class.phpemailer.php';
                    $mail=new PHPMailer;
                    $mail->IsSMTP();
                    $mail->Host='smtpout.secureserver.net';
                    $mail->Port='80';
                    $mail->SMTPAuth=true;
                    $mail->Username='abcdef@php.info';
                    $mail->Paassword='password';
                    $mail->SMTPSecure='';
                    $mail->Form='abcdef@php.info';
                    $mail->FormName='php';
                    $mail->AddAddress($row["user_email"]);
                    $mail->IsHTML(true);
                    $mail->Subject='Password reset Request for your account';
                    $message_body='<p>For reset your password,ypu have to enter this verification code when prompted:<b>'.$user_otp.'</b>.</p><p>Sincerely</p>';
                    $mail-> Body =$message_body;

                    if($mail->Send())
                    {
                        echo '<script>alert("Please check Your Email for password reset code ")</script>';
                        echo'<script>window.location.replace("forgotpass.php?step2==1&code='.$row["user_activation_code"].'")</script>';
                    }
                }
            }
        }
        else
        {
            $message='<div class="alert alert-danger">Email Address not found in our record</div>';
        }
      }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="stylesheet" href="../Home/home.css"></link>
    
    <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png"width =60px>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none; color: black;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
    

</head>
<body style="background-image: url('../Assets/Images/pic1.jpg'); background-repeat: no-repeat; background-size: cover; ">
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light shadow-sm">
      <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img> <strong>HAPPY FOUNDATION</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
        <div class="input-group">
          <span class="border-dark input-group-text bg-dark text-white"><i
              class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control border-warning" style="color:#7a7a7a">
          <button class="btn btn-dark text-white">Search</button>
        </div>
      </div>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <div class="ms-auto d-none d-lg-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i
                class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button type="button" class="btn btn-warning text-white">Search</button>
          </div>
        </div> -->

        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/home.php" style="color:green">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/products.php" style="color:green">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/blood_donate.php" style="color:green">BLOOD DONATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/event.php" style="color:green">EVENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/about.php" style="color:green">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/contact.php" style="color:green">CONTACT</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          <!-- <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-up.php" style="color:black"><i class="bi bi-door-open-fill me-1 " ></i>SIGN-UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-in.php" style="color:black"><i class="fa-solid fa-circle-user me-1  "></i>SIGN-IN</a>
          </li> -->
          <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/sign-up.php">SIGN-UP</a></button>
          <button type="botton" class=" mx-2 btn btn-outline-light " ><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button>
          <button type="button" class=" mx-2 btn btn-outline-success " ><a href="../Home/Donate.php">DONATE</a></button>
         </ul>
      </div>
  
  </nav>
  <form method="post" class="needs-validation">
  <!-- <section class="vh-100 gradient-custom"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
          <div class="card-body p-4 ">

            <div class="mb-md-5 mt-md-4 pb-5">

              <center><u><h2 class="fw-bold my-4 text-uppercase">Forgot Password</h2></u></center>
              <hr>
              <p class="text-white-50 mb-5">Forgot passwordscript in php using otp!</p>
              <div class="pannel-body">
              <?php
            //   echo $message;
            //   if(isset($_GET["step1"]))
              
              ?>
              
              <div class="mb-4">
                <label class="form-label" > Email Address :</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="e.g. xyz@info.com" required>
                <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <button type="submit" class="btn btn-outline-success mt-4" name="submit" style= "width: 475px" >send</button>  
            
            
              
               
              </div>
          

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
</body>
</html>