<?php
("../Home/blood_donate_registration.php");
?>
<?php include("data_delete.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="stylesheet" href="../Home/home.css"></link>
    <link rel="stylesheet" href="../Home/gradient.css"></link>
    
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
<body style="background-image: url('../Assets/Images/blood1.jpeg'); background-repeat: no-repeat; background-size: cover; ">
<nav class="navbar navbar-expand-lg sticky-top navbar-light shadow-sm" id="app-navbar">
      <a class="navbar-brand" href="../Home/home.php"><img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img> <strong style="color:white">HAPPY FOUNDATION</strong></a>
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
          <!-- <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/sign-up.php">SIGN-UP</a></button>
          <button type="botton" class=" mx-2 btn btn-outline-light " ><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button> -->
          <button type="button" class=" mx-2 btn btn-outline-success " ><a href="../Home/Donate.php" style="color:white">DONATE</a></button>
         </ul>
      </div>
  
  </nav>
 
                
               

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
  <!-- DISPLAY CODE -->
  <?php
	$result="SELECT * FROM blood_donate";
	$data=mysqli_query($conn,$result);
	$total=mysqli_num_rows($data);

	if($total !=0)
	{
		?>
		<br><br>
		<center><h3 style="color:white">Blood Donate List</h3></center><br><br>
    

<div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
    <table border="5px" bgcolor="" align="center"><br><br><br>
			<tr>
				<th style='padding-right: 50px; padding-left: 20px '>First Name</th>
				<th style='padding-right: 50px; padding-left: 20px '>Last Name</th>
				<th style='padding-right: 50px; padding-left: 20px '>Gmail_Id</th>
				<th style='padding-right: 50px; padding-left: 20px '>Blood Group</th>
        <th style='padding-right: 50px; padding-left: 20px '>Before Blood Donated</th>
        <th style='padding-right: 50px; padding-left: 20px '>Any Disease</th>
        <th style='padding-right: 50px; padding-left: 20px '>Any Allergies</th>
				<!-- <th colspan="2">Operation</th> -->
			</tr>
		
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
      
			echo "<tr>
					<td style='padding-right: 50px; padding-left: 20px'>".$result['fname']."</td>
					<td style='padding-right: 50px; padding-left: 20px'>".$result['lname']."</td>
					<td style='padding-right: 50px; padding-left: 20px'>".$result['gmail']."</td>
					<td style='padding-right: 50px; padding-left: 20px'>".$result['bldg']."</td>
          <td style='padding-right: 50px; padding-left: 20px'>".$result['option1']."</td>
          <td style='padding-right: 50px; padding-left: 20px'>".$result['option2']."</td>
          <td style='padding-right: 50px; padding-left: 20px'>".$result['option3']."</td>

					
				</tr>";
		}
	}
	else
	{
		echo "No Record found";	
	}

?>

</div>

</table>
<br><br>
<center><button type="button" class=" mb-4  btn btn-outline-success " style="margin:  ; width: 250px; " ><a href="../Home/home.php" style="color:white"> 🡸 BACK TO HOME</a></button></center>
<!-- <script>
	function chcekdelete()
	{
		return confirm("Are you sure want to delete this data?");
	}
</script> -->

  </body>
  
  </html>
  
