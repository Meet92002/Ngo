<?php
  // include("../Home/config.php");

  // require("config.php");
  
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

<body style="background-image: url('../Assets/Images/buyreg.jpeg'); background-repeat: no-repeat; background-size: cover; ">
  <nav >
    <br >
    <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png"
     style="width:50px; height: 45px"></img> <strong style="color:white">HAPPY FOUNDATION</strong></a>
     </div>
     <button type="button" class=" mx-2 btn btn-outline-success " style="padding-right:89" ><a href="../Home/products.php" style="color:white; "> 🡸 BACK TO PRODUCTS</a></button>
   

<form action="../Home/payment.php" method="post">

  <!-- <section class="h-100 gradient-custom"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">

        <div class="card text-white"
          style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
          <div class="card-body p-3 ">
            <div class="container my-3">
              <div class="row g-3 mb-3">


                <center>
                  <h2><U>Fill your details </U></h2>
                </center>
                <hr>


                <div class="mb-2">
                  <label class="form-label"> Name :</label>
                  <input type="text" class="form-control" name="fname" placeholder="Name" minlength="3" required="true">
                  <div class="invalid-feedback">Please fill out this notfield</div>
                </div>
                <br><br>

                <div class="mb-2">
                  <label class="form-label"> Email Address :</label>
                  <input type="email" class="form-control" name="gmail"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="e.g. xyz@info.com" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>

                <div class="mb-2">
                  <label class="form-label">Contact Number :</label>
                  <input type="tel" class="form-control" minlength="10" maxlength="10" name="mobile"
                    placeholder="e.g. (0000) 000 000" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <div class="mb-2">
                  <label class="form-label">Address :</label>
                  <input type="tel" class="form-control" name="add" placeholder="Address" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <div class="mb-2">
                  <label class="form-label">City :</label>
                  <input type="tel" class="form-control" name="city" placeholder="city" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <div class="mb-2">
                  <label class="form-label">Stat :</label>
                  <input type="tel" class="form-control" name="city" placeholder="Stat" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <div class="mb-2">
                  <label class="form-label">Pincode :</label>
                  <input type="tel" class="form-control" name="city" placeholder="000000" required>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>



                <button type="submit" class="btn btn-outline-success mt-4" id="" name="submit">Place Order</button>
                <!-- onclick="location. -->
                <div>

                </div>
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
<?php
// function order()
// {
//   return alert( echo "
//   <script type='text/javascript'>
//   $(document).ready(function(){
//     Swal.fire({ 
//       position: 'center',
//       icon: 'success',
//       title: 'Data deleted',
//       showConfirmButton: false,
//       timer: 2500
//     }).then(okay => {
//       if (okay) {
//       window.location.href = '../admin/tables.php';
//     }
//   });
//   });
//   </script>
//   ")  ;
// }
?>