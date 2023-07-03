
<?php
	require('../Home/config.php'); 
  session_start();   
  // error_reporting(0) ;
  $fname=$_GET['fname'];  
  $lname=$_GET['lname'];
  $uname=$_GET['uname'];
  $gen=$_GET['gen'];
  $gmail=$_GET['gmail'];
  $mobile=$_GET['mobile'];
  
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
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.30/dist/sweetalert2.all.min.js" integrity="sha256-QEUeVT/LLRRnn4z/6Wi9gqhUeiUvIsVMSdMgNENJu90=" crossorigin="anonymous"></script>
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
    <!-- <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->



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
<style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none; color: black;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
    
<body  style="background-image: url('../Assets/Images/bg8.jpeg'); background-repeat: no-repeat; background-size: cover; ">   

                     <form  action="" method="post" class="needs-validation">
                        <!-- <section class="h-100 gradient-custom"> -->
                     <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        
                        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
                        <div class="card-body p-4 ">
                            <div class="container my-3">
                            <div class="row g-3 mb-3">
                            
                            
                                <center>
                                <h2><U>Edit User </U></h2>
                                </center>
                                <hr> 

                      
                                <div class="col">
                                <label class="form-label">First Name :</label>
                                <input type="text" class="form-control" name="fname"placeholder="First name" minlength="3" value="<?php echo $fname = $_GET['fname'];?>" required="true">
                                <div class="invalid-feedback">Please fill out this notfield</div>
                                </div>
                                
                                <div class="col">
                                <label class="form-label">Last Name :</label>
                                <input type="text" class="form-control" name="lname"  placeholder="Last name" minlength="3" value="<?php echo $lname = $_GET['lname'];?>"  required="true">
                                <div class="invalid-feedback">Please fill out this field</div>
                                </div>  
                                
                                <div class="mb-2">
                                <label class="form-label">Username :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput1" name="uname" minlength="3" maxlength="17" value="<?php echo $uname = $_GET['uname'];?>" placeholder="e.g. xyz" required>
                                <div class="invalid-feedback">Please fill out this field</div>
                                </div>
                                <br><br>
                                <div class="mb-2">
                                <label class="form-label " >Gender :</label>
                                <br>
                                <input type="radio"  name="gen" value="MALE" required 
                                <?php
                                if($gen = $_GET['gen']== 'MALE')
                                {
                                  echo "checked";
                                }
                                ?>>Male
                                <input type="radio"  name="gen" value="FEMALE" required
                                <?php
                                if($gen = $_GET['gen']== 'FEMALE')
                                {
                                  echo "checked";
                                }
                                ?> > Female
                                <input type="radio"  name="gen" value="OTHER" required
                                 <?php
                                if($gen = $_GET['gen']== 'OTHER')
                                {
                                  echo "checked";
                                }
                                ?>> Other
                                
                                

                                <div class="invalid-feedback">Please fill out this field</div>
                                </div>

                                <div class="mb-2">
                                <label class="form-label"> Email Address :</label>
                                <input type="email" class="form-control"  name="gmail" 
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $gmail = $_GET['gmail'];?>" placeholder="e.g. xyz@info.com" required>
                                <div class="invalid-feedback">Please fill out this field</div>
                                </div>

                                <div class="mb-2">
                                <label class="form-label">Phone Number :</label>
                                <input type="tel" class="form-control" minlength="10" maxlength="10" 
                                    name="mobile" placeholder="e.g. (0000) 000 000" value="<?php echo $mobile = $_GET['mobile'];?>" required>
                                <div class="invalid-feedback">Please fill out this field</div>

                                
                                
                                
                                <button type="submit" on class="btn btn-outline-success mt-4" style="width:425px " name="submit" href="../admin/tables.php">EDIT RECORD</button>

                                <!-- <div >
                                <p class="mb-2">Have you an account? <a href="../Home/sign-up.php" class="text-white-50 fw-bold">  SIGN-UP <i class="bi bi-arrow-right-square-fill"></i></a>
                                </p> -->
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    
                    </form>
                     <?php
                    
        // else{
                ?>
                <!-- <h4>NO Record Found</h4> -->
              
                <!-- Edit code -->

                <?php
                       if(isset($_POST['submit']))
                      {
                          $fname=$_POST['fname'];
                          $lname=$_POST['lname'];
                          $uname=$_POST['uname'];
                          $gen=$_POST['gen'];
                          $gmail=$_POST['gmail'];
                          $mobile=$_POST['mobile'];
                          

                          
                          $query="UPDATE happy_fnd SET fname='$fname',lname='$lname',uname='$uname',gen='$gen',gmail='$gmail',mobile='$mobile' WHERE gmail='$gmail'";
                          $data=mysqli_query($conn,$query);
                          if($data)
                        {
                          echo '
                          <script type="text/javascript">
                          $(document).ready(function(){
                            Swal.fire({
                              position: "center",
                              icon: "success",
                              title: "Data updated",
                              showConfirmButton: false,
                              timer: 2500
                            }).then(okay => {
                              if (okay) {
                              window.location.href = "../admin/tables.php";
                            }
                          });
                          });
                          </script>
                          ';
                        }
                        else 
                        {
                          echo '
                          <script type="text/javascript">
                          $(document).ready(function(){
                            Swal.fire({
                              position: "center",
                              icon: "error",
                              title: "Your data not updated",
                              showConfirmButton: false,
                              timer: 2500
                            })
                          });
                          </script>
                          ';
                        }
                      }
                ?>

</body>



</html>
<?php

?>