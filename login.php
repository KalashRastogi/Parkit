<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo 'Not Connected To sever';

}
if(!mysqli_select_db($con,'parking_d'))
{
  echo 'database not selected';

}
if(isset($_POST['username']) and isset($_POST['password'])){
$name=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM admins";
$f=0;
$records=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($records))
// while ($row = mysql_fetch_array($result) or die mysql_error())
{
 if($row['password']==$password&&$row['username']==$name)
  {
    $f=1;
    break;
  }

}
if($f==1)
{
    require 'adminkitable.php';
}
	
	else
	{
 	   echo "not successful";
	}
}
else {
    echo "enter correct details";
        header("refresh:2;url=index2.htm");

}

