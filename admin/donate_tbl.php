

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HAPPY FOUNDATION</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

</head>

<body id="page-top"  style="background-image: url('../Assets/Images/blood1.jpeg'); background-repeat: no-repeat; background-size: cover; " >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img>
                </div>
                <div class="sidebar-brand-text mx-3">HAPPY FOUNDATION</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Manage User Data</span></a>
                <a class="nav-link" href="donate_tbl.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Manage found Donaters Data</span></a>
                <a class="nav-link" href="Blood_donate_tbl.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Manage Blood donater data</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    
                    <ul class="navbar-nav ml-auto">

        


                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                        </li>


                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy_fndy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../admin/img/userid.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../admin_login/admin_login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Donaters Tables</h1>
                 
                    <!-- DataTales Example -->
                  
                    <div class="card shadow mb-4">
                    
                           <br>
                           <style>
                                a:link { text-decoration: none; }
                                a:visited { text-decoration: none;}
                                a:hover { text-decoration: none;}
                                a:active { text-decoration: none;}
                            </style>
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success"> Found Donaters User Record  <br><br></h6>
                            <form action="#" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded shadow-none" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search Data">
                                    &nbsp;&nbsp;<button class='btn btn-outline-success' type="submit">Search</button>
                                    &nbsp;&nbsp;&nbsp;<button class='btn btn-outline-success ' type="submit" name="submit"><a href='donate_registration.php?gmail=$result[gmail]'>INSERT</a></button>
                                </div>
                                </form>
                        </div>
                    
                        <div class="card-body">
                            
                            <div class="table-responsive" >
                            <?php
                                    
                                    $conn=mysqli_connect("localhost","root","","donate");
                                    error_reporting(0);
                                    $filtervalues = $_GET['search'];
                                    $searchQuery="SELECT * FROM don_tbl WHERE CONCAT(fname,lname,type_don,don_amt,gmail) LIKE'%$filtervalues%'";
                                    $searchData=mysqli_query($conn,$searchQuery);
                                    $searchRow=(mysqli_num_rows($searchData)>0);

                                    $query = "select * from don_tbl";
                                    $data = mysqli_query($conn,$query);
                                    $total = mysqli_num_rows($data);

                                    if($filtervalues == "")
                                    {
                                        echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                        if($total != 0)
                                        {
                                            echo "<thead>";
                                                echo "<tr>";
                                                echo "<th>First Name</th>";
                                                echo "<th>Last Name</th>";
                                                echo "<th>Email</th>";
                                                echo "<th>Mobile No.</th>";
                                                echo "<th>Type Of Data</th>";
                                                echo "<th>discription</th>";
                                                echo "<th>Donation_Amount</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            while($row = mysqli_fetch_assoc($data))
                                            {
                                                echo "<tbody>";
                                                    echo "<tr>";
                                                    echo "<tr>";
                                                    echo "<td>"; echo $row["fname"]; echo"</td>";
                                                    echo "<td>"; echo $row["lname"]; echo"</td>";
                                                    echo "<td>"; echo $row["gmail"]; echo"</td>";
                                                    echo "<td>"; echo $row["mobile"]; echo"</td>";
                                                    echo "<td>"; echo $row["type_don"]; echo"</td>";
                                                    echo "<td>"; echo $row["discription"]; echo"</td>";
                                                    echo "<td>"; echo $row["don_amt"]; echo"</td>";
                                                        // echo "<td>"; echo "<a href='../admin/reg_edit.php?fname=$row[fname]&lname=$row[lname]&uname=$row[uname]&gen=$row[gen]&gmail=$row[gmail]&mobile=$row[mobile]'><button class='btn btn-warning btn-block' type='submit' name='edit'>EDIT</button></a>"; echo"</td>";
                                                        // echo "<td>"; echo "<button class='btn btn-warning btn-block' type='submit' name='delete'><a href='../admin/reg_delete.php?uname=$row[uname]'>DELETE</a></button>"; echo"</td>";
                                                    echo "</tr>";
                                                echo "</tbody>";
                                            }
                                        }
                                      
                                       
                                        echo "</table>";
                                    }
                                    else
                                    {
                                        echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                        if($searchRow != 0)
                                        {
                                            echo "<thead>";
                                                echo "<tr>";
                                                echo "<th>First Name</th>";
                                                echo "<th>Last Name</th>";
                                                echo "<th>Email</th>";
                                                echo "<th>Mobile No.</th>";
                                                echo "<th>Type Of Data</th>";
                                                echo "<th>discription</th>";
                                                echo "<th>Donation_Amount</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            while($searchRow = mysqli_fetch_assoc($searchData))
                                            {
                                                echo "<tbody>";
                                                    echo "<tr>";
                                                    echo "<td>"; echo $searchRow["fname"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["lname"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["gmail"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["mobile"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["type_don"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["discription"]; echo"</td>";
                                                    echo "<td>"; echo $searchRow["don_amt"]; echo"</td>";
                                                        // echo "<td>"; echo "<a href='../admin/reg_edit.php?fname=$searchRow[fname]&uname=$searchRow[uname]&gender=$searchRow[gender]&email=$searchRow[email]&mono=$searchRow[mono]'><button class='btn btn-warning btn-block' type='submit' name='edit'>EDIT</button></a>"; echo"</td>";
                                                        // echo "<td>"; echo "<button type='submit' name='submit' value='Delete' class='btn btn-warning btn-block text-white' onclick='return checkdelete()'><a href='../admin/reg_delete.php?uname=$searchRow[uname]'>DELETE</a></button>";echo"</td>";
                                                    echo "</tr>";
                                                echo "</tbody>";
                                            }
                                        }
                                        else{
                                            echo"<td colspan='8' style='padding-left:600px'><h5>No Record Found</h5></td>";
                                        }
                                        
                                    
                                    }
                                ?>
                                
                            
                            </div>
                        </div>
                    </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="../admin_login/admin_login.php">Logout</a>
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

    <!-- Page level plugins -->
    <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/datatables-demo.js"></script> -->

</body>

</html>

<?php
                                 
                                //  $query = "select * from don_tbl";
                                //  $data = mysqli_query($con,$query);
                                //  $total = mysqli_num_rows($data);
                                //  echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                //  if($total != 0)
                                //  {
                                //      echo "<thead>";
                                //          echo "<tr>";
                                //              echo "<th>First Name</th>";
                                //              echo "<th>Last Name</th>";
                                //              echo "<th>Email</th>";
                                //              echo "<th>Mobile No.</th>";
                                //              echo "<th>Type Of Data</th>";
                                //              echo "<th>discription</th>";
                                //              echo "<th>Donation_Amount</th>";
                                             
                                //          echo "</tr>";
                                //      echo "</thead>";
                                //      while($result = mysqli_fetch_assoc($data))
                                //      {
                                //          echo "<tbody>";
                                //              echo "<tr>";
                                //                  echo "<td>"; echo $result["fname"]; echo"</td>";
                                //                  echo "<td>"; echo $result["lname"]; echo"</td>";
                                //                  echo "<td>"; echo $result["gmail"]; echo"</td>";
                                //                  echo "<td>"; echo $result["mobile"]; echo"</td>";
                                //                  echo "<td>"; echo $result["type_don"]; echo"</td>";
                                //                  echo "<td>"; echo $result["discription"]; echo"</td>";
                                //                  echo "<td>"; echo $result["don_amt"]; echo"</td>";
                                                 
                                //              echo "</tr>";
                                //          echo "</tbody>";
                                //      }
                                //  }
                                //  echo "</table>";

                             ?>