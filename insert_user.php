<?php
	$con= mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if(!mysqli_select_db($con,'parking_d'))
	{
		echo 'Database Not Selected';
	}
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$location=$_POST['Location'];
	$totalslots=$_POST['TotalSlots'];
	
	$sql="INSERT INTO admins (username,email,password,location,totalslots) VALUES ('$username','$email','$password','$location','$totalslots')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	header("refresh:1;url=index2.htm");
?>