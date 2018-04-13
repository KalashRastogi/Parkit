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
	$parkingname=$_POST['parkingname'];
	$intime=$_POST['intime'];
	$outtime=$_POST['outtime'];
	
	$sql="INSERT INTO booked (username,parkinglot,intime,outtime) VALUES ('$username','$parkingname','$intime','$outtime')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		
	header("refresh:1;url=booked.html");
	}
?>