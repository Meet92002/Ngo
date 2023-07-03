<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:sign_up.php");
}
$gmail=$_SESSION["login_email"];
$findresult=mysqli_query($conn,"SELECT * FROM happy_fnd WHERE gmail='$gmail'");
if($res =mysqli_fetch_array($findresult))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $gen=$_POST['gen'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['pass']; 
}
?>
<html>
    <body>
    <form  action="" method="post" class="needs-validation">
  <p><a href="logout.php"><span style="color:red; float:right;">Logout</span></a></p>
<p> Welcome!<span style="color:#33cc00"><?php echo $uname;?></span></a></p>
  <!-- <section class="h-100 gradient-custom"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
     
      <div class="card text-white" style="border-radius: 1rem; box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);background:rgba(0,0,0,0.6);overflow:hiddent;">
      <div class="card-body p-4 ">
        <div class="container my-3">
          <div class="row g-3 mb-3">
          
            <hr>
      <table class ="table">
        <tr>
            <th>First Name</th>
            <td><?php echo $fname;?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo $lname;?></td>
        </tr>
        <tr>
            <th>UserName</th>
            <td><?php echo $uname;?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gen;?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $gmail;?></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><?php echo $gmail;?></td>
        </tr>
        
      </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
             
</body>
</html>