<?php  
include('../includes/header.php');
include('../includes/navbar.php');
?>
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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


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
                <div class="row" style="padding:20px;">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Register Data</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    include('../Home/config.php');
                                                    $query = "SELECT gmail FROM happy_fnd ORDER BY gmail";
                                                    $query_run = mysqli_query($conn,$query);

                                                    $rows = mysqli_num_rows($query_run);

                                                    echo $rows;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Total blood data</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                    include('../Home/config2.php');
                                                    $blood_query1 = "SELECT gmail FROM blood_donate ORDER BY gmail";
                                                    $blood_query_run1 = mysqli_query($conn,$blood_query1);

                                                    $blood_rows1 = mysqli_num_rows($blood_query_run1);

                                                    echo $blood_rows1;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-holding-medical fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                    include('../Home/config.php');
                                                    $reg_query = "SELECT gmail FROM happy_fnd ORDER BY gmail";
                                                    $reg_query_run = mysqli_query($conn,$reg_query);

                                                    $reg_rows = mysqli_num_rows($reg_query_run);

                                                    echo $reg_rows;
                                                ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: <?php echo $reg_rows.'%';?>" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Donation</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
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
                                                $donate_query = "SELECT SUM(don_amt) AS total FROM `don_tbl`";
                                                $donate_query_run = mysqli_query($conn,$donate_query);

                                                while($result = mysqli_fetch_assoc($donate_query_run)) {
                                                    echo "₹"." ".$result['total'];
                                                }
                                            ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Donate Tables</h1>
                   
                    <!-- <form method="post"> -->
                    <!-- DataTales Example -->
                    <?php include('message.php');?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class='m-0 font-weight-bold text-success'>Registred User <br><br> </h6>
                            <form action="#" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded shadow-none" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search Data">
                                    &nbsp;&nbsp;<button class='btn btn-outline-success' type="submit">Search</button>
                                    <!-- &nbsp;&nbsp;&nbsp;<button class='btn btn-outline-success ' type="submit" name="submit"><a href='registration.php?gmail=$result[gmail]'>INSERT</a></button> -->
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive" >
                                
                            <?php
                                    error_reporting(0);
                                    include("../Home/config.php");
                                    $filtervalues = $_GET['search'];
                                    $searchQuery="SELECT * FROM happy_fnd WHERE CONCAT(fname,lname,uname,gen,gmail,mobile) LIKE'%$filtervalues%'";
                                    $searchData=mysqli_query($conn,$searchQuery);
                                    $searchRow=(mysqli_num_rows($searchData)>0);

                                    $query = "select * from happy_fnd";
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
                                                    echo "<th>Username</th>";
                                                    echo "<th>Gender</th>";
                                                    echo "<th>Email</th>";
                                                    echo "<th>Mobile No.</th>";
                                                    //echo "<th>Edit</th>";
                                                    //echo "<th>Delete</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            while($row = mysqli_fetch_assoc($data))
                                            {
                                                echo "<tbody>";
                                                    echo "<tr>";
                                                        echo "<td>"; echo $row["fname"]; echo"</td>";
                                                        echo "<td>"; echo $row["lname"]; echo"</td>";
                                                        echo "<td>"; echo $row["uname"]; echo"</td>";
                                                        echo "<td>"; echo $row["gen"]; echo"</td>";
                                                        echo "<td>"; echo $row["gmail"]; echo"</td>";
                                                        echo "<td>"; echo $row["mobile"]; echo"</td>";
                                                       // echo "<td>"; echo "<a href='../admin/registration_edit.php?fname=$row[fname]&lname=$row[lname]&uname=$row[uname]&gen=$row[gen]&gmail=$row[gmail]&mobile=$row[mobile]'><button class='btn btn-success btn-block' type='submit' name='edit'>EDIT</button></a>"; echo"</td>";
                                                        //echo "<td>"; echo "<button class='btn btn-warning btn-block' type='submit' name='delete'><a href='../admin/registration_delete.php?gmail=$row[gmail]'>DELETE</a></button>"; echo"</td>";
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
                                                    echo "<th>Username</th>";
                                                    echo "<th>Gender</th>";
                                                    echo "<th>Email</th>";
                                                    echo "<th>Mobile No.</th>";
                                                    //echo "<th>Edit</th>";
                                                    //echo "<th>Delete</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            while($searchRow = mysqli_fetch_assoc($searchData))
                                            {
                                                echo "<tbody>";
                                                    echo "<tr>";
                                                        echo "<td>"; echo $searchRow["fname"]; echo"</td>";
                                                        echo "<td>"; echo $searchRow['lname']; echo"</td>";
                                                        echo "<td>"; echo $searchRow["uname"]; echo"</td>";
                                                        echo "<td>"; echo $searchRow["gen"]; echo"</td>";
                                                        echo "<td>"; echo $searchRow["gmail"]; echo"</td>";
                                                        echo "<td>"; echo $searchRow["mobile"]; echo"</td>";
                                                        //echo "<td>"; echo "<a href='../admin/reg_edit.php?fname=$searchRow[fname]&lname=$searchRow[name]&uname=$searchRow[uname]&gen=$searchRow[gen]&gmail=$searchRow[gmail]&mobile=$searchRow[mobile]'><button class='btn btn-warning btn-block' type='submit' name='edit'>EDIT</button></a>"; echo"</td>";
                                                        //echo "<td>"; echo "<button type='submit' name='submit' value='Delete' class='btn btn-warning btn-block text-white' onclick='return checkdelete()'><a href='../admin/reg_delete.php?uname=$searchRow[uname]'>DELETE</a></button>";echo"</td>";
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
            
                            
                            
                            
                            <?php
                                // $conn=mysqli_connect("localhost","root","","happy_foundation");
                                //     $query = "select * from happy_fnd";
                                //     $data = mysqli_query($conn,$query);
                                //     $total = mysqli_num_rows($data);
                                //     echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                                //     if($total != 0)
                                //     {
                                //         echo "<thead>";
                                //             echo "<tr>";
                                //                 echo "<th>First Name</th>";
                                //                 echo "<th>Last Name</th>";
                                //                 echo "<th>Username</th>";
                                //                 echo "<th>Gender</th>";
                                //                 echo "<th>Email</th>";
                                //                 echo "<th>Mobile No.</th>";
                                //                 echo "<th>Password</th>";
                                //             echo "</tr>";
                                //         echo "</thead>";
                                //         while($row = mysqli_fetch_assoc($data))
			                    //         {
                                //             echo "<tbody>";
                                //                 echo "<tr>";
                                //                     echo "<td>"; echo $row['fname']; echo"</td>";
                                //                     echo "<td>"; echo $row['lname']; echo"</td>";
                                //                     echo "<td>"; echo $row['uname']; echo"</td>";
                                //                     echo "<td>"; echo $row['gen']; echo"</td>";
                                //                     echo "<td>"; echo $row['gmail']; echo"</td>";
                                //                     echo "<td>"; echo $row['mobile']; echo"</td>";
                                //                     echo "<td>"; echo $row['password']; echo"</td>";
                                //                 echo "</tr>";
                                //             echo "</tbody>";
                                //         }
                                //     }
                                    
                                ?>
                        </div>          
                    </div>
                </div>
            </div>

<?php
include('../includes/scripts.php');
?>


    
 
    