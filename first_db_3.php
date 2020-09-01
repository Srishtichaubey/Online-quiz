
<?php
	session_start();
	$sname=$_POST["name"];
	$spassword=$_POST["password"];
        $con=mysqli_connect("localhost","root","","project1");
	if(!$con)
	{
		die("server could not found");
		
		}
	mysqli_select_db($con,'project1');
$q="select* from second where name='$sname' && password='$spassword'";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	header('location:mid.php');
}
else
{
	echo "Unauthorised user. Please log in first";

}
?>

