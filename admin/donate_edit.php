<?php
error_reporting(0) ;
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$gmail=$_GET['gmail'];
$mobile=$_GET['mobile'];
$type_don=$_GET['type_don'];
$discription=$_GET['discription'];
$don_amt=$_GET['don_amt'];
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
<style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none; color: black;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
<body>
<form method="post" class="needs-validation">
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
        <input type="text" class="form-control" name="fname" placeholder="First name" value="<?php echo $fname = $_GET['fname'];?>" required >
      <div class="invalid-feedback">Please fill out this notfield</div>
      
      </div>

      <div class="col">
      <label class="form-label">Last Name :</label>
        <input type="text" class="form-control" name="lname" placeholder="Last name" value="<?php echo $lname = $_GET['lname'];?>" required>
        <div class="invalid-feedback">Please fill out this field</div>     
      </div>  
      <div class="mb-0">
      <label class="form-label" > Email Address *</label>
      <input type="email" class="form-control" id="formGroupExampleInput2" name="gmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $gmail = $_GET['gmail'];?>"  placeholder="e.g. xyz@info.com" required>
      <div class="invalid-feedback">Please fill out this field</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Phone Number *</label>
      <input type="tel" class="form-control" id="formGroupExampleInput3" minlength="10" maxlength="10" name="mobile" value="<?php echo $mobile = $_GET['mobile'];?>"  placeholder="e.g. (0000) 000 000" required>
      <div class="invalid-feedback">Please fill out this field</div>
   
    </div>
    <div class="mb-3">
      <label class="form-label">Type of Donation *</label>
    <br><br>

    <!-- <div class="mb-2"> -->
    <!-- Annapurna<input class="form-check-input" name="color[]" type="checkbox" value="Annapurna" id="formGroupExampleInput4"> 
    Donate Anything <input class="form-check-input" name="color[]" type="checkbox" value="Donate Anything" id="formGroupExampleInput4" checked>
    Health Care and Medical <input class="form-check-input" name="color[]" type="checkbox" value="Health Care and Medical" id="formGroupExampleInput4" >
    Education scholarship and sports<input class="form-check-input" name="color[]" type="checkbox" value="Education scholarship and sports" id="formGroupExampleInput4" > -->
    <?php
    // $name =$_GET['color'];

    // if(isset($_GET['color']))
    // {
    //   foreach($name as $color){
    //     echo $color."br/>";
    //   }
    // }
    ?>
    <div class="mb-2">
  <input class="form-check-input" name="type_don" type="checkbox" alue="Annapurna" id="formGroupExampleInput4">
  <label class="form-check-label" for="flexCheckDefault">
  Annapurna
  </label>
</div>
<div class="mb-2">
  <input class="form-check-input" name="type_don" type="checkbox" value="Donate Anything" id="formGroupExampleInput4" >
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
  <input class="form-check-input" name="type_don" type="checkbox" value="Education scholarship and sports" id="formGroupExampleInput4" >
  <label class="form-check-label" for="flexCheckDefault">
  Education scholarship and sports
  </label>
</div>
</div>
 <div class="mb-3">
 <label class="form-label">Discription *</label>
      <input type="Message" class="form-control" name="discription" id="formGroupExampleInput5" value="<?php echo $discription = $_GET['discription'];?>" name="msg"  placeholder="e.g.Enteryour Discription" required>

 </div>
 <div class="mb-3">
      <label class="form-label">Donation Amount *</label>
      <input type="tel" class="form-control" id="formGroupExampleInput3" name="don_amt" value="<?php echo $don_amt = $_GET['don_amt'];?>"  placeholder="Please Enter your Donation Amount" required>
      <small style="color:#949494;font-weight: bold">Please Enter your Donation Amount</small>
      
      <div class="invalid-feedback">Please fill out this field</div>
    
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-outline-success mt-4" name="submit" style="width: 430px" >DONATE</button>
 
</div>
</body>

</html>
       
       
       
       
       <!-- connection code -->
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "donate";

                $con = mysqli_connect($servername,$username,$password,$database);

                if($con)
                {
                    $msg = "";
                }
                else
                {
                    $msg = "• DATABASE SUCCESSFULLY NOT CONNECTED!";
                }
            ?>
 

    <!-- edit code -->
    <?php
                    if(isset($_POST['submit']))
                    {
                      $fname=$_POST['fname'];
                      $lname=$_POST['lname'];
                      $gmail=$_POST['gmail'];
                      $mobile=$_POST['mobile'];
                      $typ_don=$_POST['typ_don'];
                      $discription=$_POST['discription'];
                      $don_amt=$_POST['don_amt'];
                                            
                        
                        $result="UPDATE don_tbl set id='', fname='$fname',lname='$lname',gmail='$gmail',mobile='$mobile',typ_don='$typ_don',discription='$discription',don_amt='$don_amt' WHERE gmail='$gmail'";
                        $data=mysqli_query($con,$result);
                        if($data)
                          {
                            echo "<script>alert('Record Updated')</script>";
                            ?>
                            <META HTTP-EQUIV="Refresh" CONTENT = "0; URL= http://localhost/Ngo/admin/donate_tbl.php"> 
                            <?php                          
                          }
                          else{
                            echo "Failed to update record";
                          }
                  
                    }
        ?>