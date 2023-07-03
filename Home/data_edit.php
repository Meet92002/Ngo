<?php
	include('../Home/config2.php'); 
 
  
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
      /* a.donate:visited { text-decoration: none; color: white;} */
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
    </head>
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
          <center><h2><U>EDIT BLOOD DONATE FORM</U></h2></center><hr>
            
            <div class="col">
                
                First Name :<input type="text" class="form-control" name="fname"  value="<?php echo $fname = $_GET['fn'];?>"placeholder="First name" required >
                
               </div>
              
               <div class="col">
                
                Last Name :<input type="text" class="form-control" name="lname" value="<?php echo $lname = $_GET['ln'];?> "placeholder="Last name"  required>
                
              </div> 
              
            
              
              <div class="mb-2">
                
              Email Address :<input type="email" class="form-control" value="<?php echo $gmail = $_GET['mail'];?> "  name="gmail" 
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="e.g. xyz@info.com" required>
                  
              </div>

              
              <div class="col">
                
                Phone Number :<input type="tel" class="form-control" value="<?php echo $mobile = $_GET['mob'];?>" minlength="10" maxlength="10" 
                  name="mobile" placeholder="e.g. (0000) 000 000" required>
                   
                <br>
                
              <div class="mb-2">
               
                Blood group :<select class="form-select" name="bldg">
                  <option selected> <?php echo $bldg = $_GET['bldg'];?></option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>    
                </select>
               
              </div>
            
              <br>
              </div>
            
              <div class="mb-2">
                
                <h4>Have you done a blood donation before?</h4><input type="radio" value="<?php echo $option1 = $_GET['optradio1'];?>" class="form-check-input" id="radio1" name="option1" value="Yes" >Yes
                <label class="form-check-label" for="radio1"></label>
                </div>
            
                <div class="col">
               <input type="radio" class="form-check-input" id="radio1" value="<?php echo $option2 = $_GET['optradio2'];?>" name="option1" value="NO">No
                <label class="form-check-label" for="radio2"></label>
                </div>
              
                <div class="mb-2">
               
                <h3>Have you had any disease?</h3></t><input type="radio" value="<?php echo $option3 = $_GET['optradio3'];?>" class="form-check-input" id="radio2" name="option2" value="Yes" >Yes
                <label class="form-check-label" for="radio3"></label>
                </div>

                <div class="col">
                <input type="radio" class="form-check-input" id="radio2" name="option2" value="No">No
                <label class="form-check-label" for="radio4"></label>
                </div>
                
                <div class="mb-2">

                <h3>Do you have any allergies?</h3><input type="radio" class="form-check-input" id="radio3" name="option3" value="Yes">Yes
                <label class="form-check-label" for="radio5"></label>
                </div>
                <div class="col">
                <input type="radio" class="form-check-input" id="radio3" name="option3" value="No">No
                <label class="form-check-label" for="radio6"></label>
                </div>
                
                
              <button type="submit" class="btn btn-outline-success mt-4" name="submit">Edit</button>
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
	if(isset($_POST['submit']))
	{
		     $fn=$_GET['fname'];
        $ln=$_POST['lname'];
        $mail=$_POST['gmail'];
        $mob=$_POST['mobile'];
        $bldg=$_POST['bldg'];
        $optradio1=$_POST['option1'];
        $optradio2=$_POST['option2'];
        $optradio3=$_POST['option3'];

		
		$query="UPDATE blood_donate set fname='$fn',lname='$ln',gmail='$mail',mobile='$mob',bldg='$bldg',option1='$optradio1',option2='$optradio2',option3='$optradio3' WHERE fname='$fn'";
        $data=mysqli_query($conn,$query);
    }
    ?>
