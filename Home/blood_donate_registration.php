
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HAPPY FOUNDATION</title>
  <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png" width=60px>
  <link rel="stylesheet" href="../Home/home.css"></link>
  <link rel="stylesheet" href="../Home/gradient.css"></link>
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

<body style="background-image: url('../Assets/Images/blood2.jpeg'); background-repeat: no-repeat; background-size: cover; ">
  <nav class="navbar navbar-expand-lg sticky-top navbar-light shadow-sm">
    <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png"
        style="width:50px; height: 45px"></img> <strong  style="color:white">HAPPY FOUNDATION</strong></a>
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
      <!-- <button type="button" class=" mx-2 btn btn-outline-warning "><a href="../Home/sign-up.php">SIGN-UP</a></button>
      <button type="botton" class=" mx-2 btn btn-outline-light "><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button> -->
      <button type="button" class=" mx-2 btn btn-outline-success" ><a href="../Home/Donate.php" style="color:white">DONATE</a></button>
    </ul>
    </div>

  </nav>
  <form action="../Home/blood_donate.php" method="post" class="needs-validation">
      <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
        <div class="card-body p-4 ">
          <div class="container my-3">
            <div class="row g-3 mb-3">
              <center>
                <h2><u>BLOOD DONATION FORM </U></h2>
              </center>
              <hr>
              
              <!-- <div class="successmsg">
                <span style="font-size:100px;">&#9989;</span>
                <br>You have Registred successfully.<br><a href="../Home/sign-up.php" style="color:#fff;">Sign-up here...</a>
              </div> -->
             
              <div class="col">
                <label class="form-label">First Name :</label>
                <input type="text" class="form-control" name="fname"placeholder="First name" minlength="2" required>
                <div class="invalid-feedback">Please fill out this notfield</div>
               </div>
              
              <div class="col">
                <label class="form-label">Last Name :</label>
                <input type="text" class="form-control" name="lname" minlength="2" placeholder="Last name"  required>
                <div class="invalid-feedback">Please fill out this field</div>
              </div> 
              
            
              
              <div class="mb-2">
                <label class="form-label"> Email Address :</label>
                <input type="email" class="form-control"  name="gmail" 
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="e.g. xyz@info.com" required>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>

              <div class="mb-2">
                <label class="form-label">Blood group :</label>
                <select class="form-select" name="bldg">
                  <option selected>Select your Blood group...</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>    
                </select>
                <div class="invalid-feedback">Please fill out this field</div>
              </div>

              <br>
              </div>
              <div class="mb-2">
                <h6>Have you donate blood donation before?</h6>
                <input type="radio" class="form-check-input" id="radio1" name="option1" value="Yes" >Yes
                <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" id="radio1" name="option1" value="NO">No
                <label class="form-check-label" for="radio2"></label>
                </div>

                <div class="mb-2">
                <h6>Have you had any disease?</h6>
                <input type="radio" class="form-check-input" id="radio2" name="option2" value="Yes" >Yes
                <label class="form-check-label" for="radio3"></label>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" id="radio2" name="option2" value="No">No
                <label class="form-check-label" for="radio4"></label>
                </div>

                <div class="mb-2">
                <h6>Do you have any allergies?</h6>
                <input type="radio" class="form-check-input" id="radio3" name="option3" value="Yes">Yes
                <label class="form-check-label" for="radio5"></label>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" id="radio3" name="option3" value="No">No
                <label class="form-check-label" for="radio6"></label>
                </div>
                            

              <button type="submit" class="btn btn-outline-success mt-4 btn-block" style="width: 430px" name="submit">Submit</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </form>

</body>

</html>
<!-- connection code -->
<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="demo";
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

<!-- Insert code -->

<?php
if(isset($_POST['submit']))
{
  
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $mail=$_POST['gmail'];
    $bldg=$_POST['bldg'];
    $optradio1=$_POST['option1'];
    $optradio2=$_POST['option2'];
    $optradio3=$_POST['option3'];

    
     
      
    $result="INSERT INTO blood_donate values('','$fn','$ln','$mail','$bldg','$optradio1','$optradio2','$optradio3')";

    $data=mysqli_query($conn,$result);
    
}
    

?>  



