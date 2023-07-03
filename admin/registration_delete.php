<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.30/dist/sweetalert2.all.min.js" integrity="sha256-QEUeVT/LLRRnn4z/6Wi9gqhUeiUvIsVMSdMgNENJu90=" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<!-- connection code -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "happy_foundation";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    $msg = "";
}
else
{
    $msg = "• DATABASE SUCCESSFULLY NOT CONNECTED!";
}
?>
<?php
        $gmail=$_GET['gmail'];
    
        $query="DELETE  FROM `happy_fnd` where gmail='$gmail'";
        $data=mysqli_query($conn,$query);

        if($data)
        {
          echo '
          <script type="text/javascript">
          $(document).ready(function(){
            Swal.fire({ 
              position: "center",
              icon: "success",
              title: "Data deleted",
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
              title: "Your data not deleted",
              showConfirmButton: false,
              timer: 2500
            })
          });
          </script>
          ';
        }
?>