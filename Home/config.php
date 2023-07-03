<?php 
// session_distroy();
$servername="localhost";
$username="root";
$password="";
$dbname="happy_foundation";
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