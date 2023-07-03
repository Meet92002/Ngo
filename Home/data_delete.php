<?php
	include('../Home/config2.php');

?>
<?php
	if(isset($_POST['btndelete']))
	{
		    $fn=$_POST['fname'];
		
		$query="delete from happy_fnd where gmail='$gmail'";
        $data=mysqli_query($conn,$query);
    }
    ?>