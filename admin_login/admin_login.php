<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HAPPY FOUNDATION</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Home/home.css"></link>
    <link rel="stylesheet" href="../Home/gradient.css"></link>
    
    <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png"width =60px>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.30/dist/sweetalert2.all.min.js" integrity="sha256-QEUeVT/LLRRnn4z/6Wi9gqhUeiUvIsVMSdMgNENJu90=" crossorigin="anonymous"></script>
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
</head>

<body style="background-image: url('../admin_login/img/adminimg.jpeg'); background-repeat: no-repeat; background-size: cover;">  
<nav class="navbar navbar-expand-lg  sticky-top navbar-light shadow-lg">
<a class="navbar-brand" style="padding-left: 40px" href="#"><img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img> <strong style="color:white">HAPPY FOUNDATION</strong></a>

         </ul>
      </div>
  
  </nav>
    <div class="container">

        <!-- Outer Row -->
        
                
                <div class="container py-5 h-100" >
                    <div class="row d-flex justify-content-center align-items-center h-100" style="padding-top: 100px">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
                        <div class="card-body p-5 ">
                         <!-- <div class="container my-3"> -->
                         <!-- <div class="row g-3 mb-3">  -->
                        <!-- Nested Row within Card Body -->
                        
                                    <div class="text-center">
                                        <h1 class="h4 text-white-900 mb-4">Welcome To Happy Foundation Admin!</h1>
                                    </div>
                                    <hr>
                                    
                                    <form class="user" method="post" >
                                        <div class="form-group">
                                        <label class="form-label" > Username  :</label>
                                        <input type="text" class="form-control" name="uname"style="width: 100%" placeholder="e.g. xyz.com" required>
                                        </div>
                                        <div class="form-group">
                                        <label class="form-label">Password :</label>
                                        <input type="password" id="formGroupExampleInput4" class="form-control" minlength="5" maxlength="16" name="pass" placeholder="e.g. Type your password">
                                        <span class="fa fa-fw fa-eye-slash field_icon togglePassword1" toggle="#password_feild1"
                                         style=" color:black; margin-top: -27px; margin-left: 290px; cursor: pointer; position: absolute"></span>    
                                       </div>
                                       <!-- <button name="login" type="submit" class="btn btn-success btn-user btn-block btn-square  " >Login</button> -->
                                       <button type="submit" class="btn btn-outline-success mt-4" name="login" style= "width: 325px"><a class="text-white">LOGIN</a></button>        
                                    </div>
                                            
                                        </div>
    
                                        
                                        <?php
                                            $user = isset($_POST['uname']);
                                            $pass = isset($_POST['pass']);
                                            if(isset($_POST['login']))
                                            { 
                                                if ((strcmp($_POST['uname'],"Admin")==0) and (strcmp($_POST['pass'],"12345")==0) )
                                                { 
                                                    echo '
                                                        <script type="text/javascript">
                                                            $(document).ready(function(){
                                                                Swal.fire({
                                                                    position: "center",
                                                                    icon: "success",
                                                                    title: "Admin login successfully",
                                                                    showConfirmButton: false,
                                                                    timer: 2500
                                                                }).then(okay => {
                                                                    if (okay) {
                                                                    window.location.href = "../admin/index.php";
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    ';
                                                }
                                                else{
                                                    echo '
                                                        <script type="text/javascript">
                                                            $(document).ready(function(){
                                                                Swal.fire({
                                                                    position: "center",
                                                                    icon: "error",
                                                                    title: "Please enter valid Email & Password",
                                                                    showConfirmButton: false,
                                                                    timer: 2500
                                                                })
                                                            });
                                                        </script>
                                                    '; 
                                                }
                                            
                                            }
                                          
                                        ?>
                                
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html> 

<?php

    // if(isset($_POST['login']))
    // {
    //     if($user == 'admin' && $pass == '12345')
    //     {
    //         echo '
    //             <script type="text/javascript">
    //                 $(document).ready(function(){
    //                     Swal.fire({
    //                         position: "center",
    //                         icon: "success",
    //                         title: "Admin login successfully",
    //                         showConfirmButton: false,
    //                         timer: 4500
    //                     }).then(okay => {
    //                         if (okay) {
    //                         window.location.href = "../admin/index.php";
    //                         }
    //                     });
    //                 });
    //             </script>
    //         ';
    //     }
        // else
        // {
        //     echo '
        //         <script type="text/javascript">
        //             $(document).ready(function(){
        //                 Swal.fire({
        //                     position: "center",
        //                     icon: "success",
        //                     title: "Please enter valid Email & Password",
        //                     showConfirmButton: false,
        //                     timer: 4500
        //                 })
        //             });
        //         </script>
        //     '; 
        // }
  //  }
?>