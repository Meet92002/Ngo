<?php
session_start();

require("config.php");
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png"width =60px>
    <link rel="stylesheet" href="../Home/home.css"></link>
    <link rel="stylesheet" href="../Home/gradient.css"></link>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.30/dist/sweetalert2.all.min.js" integrity="sha256-QEUeVT/LLRRnn4z/6Wi9gqhUeiUvIsVMSdMgNENJu90=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
     
     </script>
    
     <script>
        $(function () 
        {
           $(".togglePassword1").click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-eye") ? "text" : "password";
            $("#formGroupExampleInput4").attr("type", type);
          });
        });
     </script>
     <style>
        a:link { text-decoration: none; }
        a:visited { text-decoration: none; color: black;}
        a:hover { text-decoration: none;}
        a:active { text-decoration: none;}
    </style>
</head>
<body style="background-image: url('../Assets/Images/bg8.jpeg'); background-repeat: no-repeat; background-size: cover;">  
<nav class="navbar navbar-expand-lg  sticky-top navbar-light shadow-lg">
      <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img> <strong>HAPPY FOUNDATION</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       
         </ul>
      </div>
  
  </nav>
  

  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
      </div>
      <div class="modal-body">
        <i class="bi bi-exclamation-octagon" style="color: red"></i> Do you really wish to leave and logout? All unsaved changes will be lost!
      </div>                      
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" onclick="window.location.href='../Home/home.php'">Yes, I am sure!</button>
        <button type="button" class="btn btn-outline-success btn-block" data-bs-dismiss="modal">No, I am not sure!</button>
      </div>
    </div>
  </div>
</div>


  <form action="" method="post" class="needs-validation">
  
  <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
       
        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
        <div class="card-body p-5 ">
          <div class="container my-3">
            <div class="row g-3 mb-3">
          
          
              <center><u><h2 class="fw-bold my-3 text-uppercase">SIGN-IN HAPPY FOUNDATION</h2></u></center>
              <hr>
              <p class="text-white-50 mb-3">Please enter your login and password!</p>
                              
              <div class="mb-4">
                <label class="form-label" > Username  :</label>
                <input type="text" class="form-control" name="uname" placeholder="e.g. xyz.com" required>
                <div class="invalid-feedback">Please fill out this field</div>
                </div>

                <div class="mb-4">
                <label class="form-label">Password :</label>
                <input type="password" id="formGroupExampleInput4" class="form-control" minlength="6" maxlength="16" name="pass"
                  placeholder="e.g. Type your password">
                <span class="fa fa-fw fa-eye-slash field_icon togglePassword1" toggle="#password_feild1"
                  style=" color:black; margin-top: -27px; margin-left: 350px; cursor: pointer; position: absolute"></span>
                <div class="invalid-feedback">Please fill out this field</div>
              </div> 
              <!-- <p class="small mb-3" style="text-align:right"><a class="text-white-50" href="../Home/forgotpass.php">Forgot password?</a></p> -->

              
              <button type="submit" class="btn btn-outline-success mt-4" name="submit" style= "width: 475px"><a class="text-white-50">SIGN-IN</a></button>
            </div>
            
            <div>
              <p class="mb-0">Don't have an account? <a href="../Home/sign-up.php" class="text-white-50 fw-bold">  SIGN-UP <i class="bi bi-arrow-right-square-fill"></i></a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{   
  $uname=$_POST['uname'];
  $password =md5($_POST['pass']);

    
    $query="SELECT * FROM `happy_fnd` WHERE  uname='$uname' AND  password='$password'";
    $data=mysqli_query($conn,$query);  
    // print($query);
    if($data)     
    { 
      // print_r($data);  
      if(mysqli_num_rows($data)==1)
      {
        
        $data_fetch=mysqli_fetch_assoc($data);
        // echo $password=$data_fetch['password'];
        // print($password);
        // $password= md5($_POST['pass']);
        //print_r($data_fetch);  
        // echo($data_fetch);
          if(md5($password) == "$password")
          {
        
           
                       
          }
          else
          {
            $_SESSION['logged_in']=true;
            $_SESSION['uname']=$data_fetch['uname'];
          
            ?>
             <!-- header("location: home.php"); -->
             <meta http-equiv = "refresh" content="0 url=http://localhost/Ngo/Home/">
            <?php
           
          }
         }
      
      else
      {
        
          echo '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire({
              position: "center",
              icon: "error",
              title: "Username OR Password INVALID",
              showConfirmButton: false,
              timer: 2500
            })
          });
          </script>
          ';

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
// if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
// {
//   echo "<h1> Welcome to this website-$_SESSION[uname]</h1>";
// }
?>
 <!-- echo"<div class='sign-in-up'>
  <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/sign-up.php">SIGN-UP</a></button>
  <button type="botton" class=" mx-2 btn btn-outline-light " ><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button>
        </div>
  "; -->