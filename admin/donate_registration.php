
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png"width =60px>
    <link rel="stylesheet" href="../Home/home.css"></link>
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
        a:visited { text-decoration: none;}
        a:hover { text-decoration: none;}
        a:active { text-decoration: none;}
    </style>
</head>
<body style="background-image: url('../Assets/Images/pic6.jpg'); background-repeat: no-repeat; background-size: cover; ">
<nav class="navbar navbar-expand-lg sticky-top navbar-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png"
        style="width:50px; height: 45px"></img> <strong  style="color:white">HAPPY FOUNDATION</strong></a>
</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ms-auto ">
      <!-- <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-up.php" style="color:black"><i class="bi bi-door-open-fill me-1 " ></i>SIGN-UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-in.php" style="color:black"><i class="fa-solid fa-circle-user me-1  "></i>SIGN-IN</a>
          </li> -->
      <!-- <button type="button" class=" mx-2 btn btn-outline-warning "><a href="../Home/sign-up.php">SIGN-UP</a></button>
      <button type="botton" class=" mx-2 btn btn-outline-light "><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button> -->
      <button type="button" class=" mx-2 btn btn-outline-success" ><a href="../admin/donate_tbl.php" style="color:white"> 🡸 BACK TO BLOOD ADMIN</a></button>
    </ul>
    
    </div>

  </nav>

  <form action="../admin/donate_tbl.php" method="post" class="needs-validation">
    <!-- <section class="h-100 gradient-custom"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem;box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
        <div class="card-body p-4 ">
  <div class="container my-3">
    <div class="row g-3 mb-3">  
    <center><h2><U>DONATE HAPPY FOUNDATION </U></h2></center><hr>
      <div class="col">
      <label class="form-label">First Name :</label>
        <input type="text" class="form-control" name="fname" placeholder="First name" required >
      <div class="invalid-feedback">Please fill out this notfield</div>
      
      </div>

      <div class="col">
      <label class="form-label">Last Name :</label>
        <input type="text" class="form-control" name="lname" placeholder="Last name" required>
        <div class="invalid-feedback">Please fill out this field</div>     
      </div>  
      <div class="mb-0">
      <label class="form-label" > Email Address *</label>
      <input type="email" class="form-control" id="formGroupExampleInput2" name="gmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="e.g. xyz@info.com" required>
      <div class="invalid-feedback">Please fill out this field</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Phone Number *</label>
      <input type="tel" class="form-control" id="formGroupExampleInput3" minlength="10" maxlength="10" name="mobile"  placeholder="e.g. (0000) 000 000" required>
      <div class="invalid-feedback">Please fill out this field</div>
   
    </div>
    <div class="mb-3">
      <label class="form-label">Type of Donation *</label>
    <br><br>

    <div class="mb-2">
  <input class="form-check-input" name="type_don" type="checkbox" value="Annapurna" id="formGroupExampleInput4">
  <label class="form-check-label" for="flexCheckDefault">
  Annapurna
  </label>
</div>
<div class="mb-2">
  <input class="form-check-input" name="type_don" type="checkbox" value="Donate Anything" id="formGroupExampleInput4" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Donate Anything
  </label>
</div>
<div class="mb-2">
  <input class="form-check-input" name="type_don" type="checkbox" value="Health Care and Medical" id="formGroupExampleInput4" >
  <label class="form-check-label" for="flexCheckDefault">
  Health Care and Medical
  </label>
</div>
<div class="mb-2">
  <input class="form-check-input" name="typ_don" type="checkbox" value="Education scholarship and sports" id="formGroupExampleInput4" >
  <label class="form-check-label" for="flexCheckDefault">
  Education scholarship and sports
  </label>
</div>
</div>
 <div class="mb-3">
 <label class="form-label">Discription *</label>
      <input type="Message" class="form-control" name="discription" id="formGroupExampleInput5"  name="msg"  placeholder="e.g.Enteryour Discription" required>

 </div>
 <div class="mb-3">
      <label class="form-label">Donation Amount *</label>
      <input type="tel" class="form-control" id="formGroupExampleInput3" name="don_amt"  placeholder="Please Enter your Donation Amount" required>
      <small style="color:#949494;font-weight: bold">Please Enter your Donation Amount</small>
      
      <div class="invalid-feedback">Please fill out this field</div>
    
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-outline-success mt-4" name="submit" style="width: 430px">DONATE</button>
 
</div>
</body>
</html>
<?php 
error_reporting(0) ;
$servername="localhost";
$username="root";
$password="";
$dbname="donate";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "";
}
else
{
    echo"Fail";
}
?>
<?php

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gmail=$_POST['gmail'];
    $mobile=$_POST['mobile'];
    $type_don=$_POST['type_don'];
    $discription=$_POST['discription'];
    $don_amt=$_POST['don_amt'];
    

		    
      $result="INSERT INTO don_tbl VALUES ('','$fname','$lname','$gmail','$mobile','$type_don','$discription','$don_amt')";
      $data=mysqli_query($conn,$result);
      
      if($data)
        {
        echo "<script>alert('Donate Registration successfully')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL= http://localhost/Ngo/admin/donate_tbl.php"> 
        <?php                          
        }
        else{
        echo "Failed to update record";
        }
      
    }
    

?>