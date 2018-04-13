<?php

echo '<style>
a{color:purple;}
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
 clear: both;
margin:10px;
padding:5px;   
}

a:hover {
    color: white
    background-color: black;
    text-decoration: none;
margin:10px;
clear: both;
 padding:5px;
}
a:active {
    color: white;
    background-color: transparent;
    text-decoration: none;
margin:10px;
clear:both;
padding:5px;
}
</style>
<div style="float:center;background-color: dimgrey;opacity:0.65;border-radius: 40px;padding: 5px;">
      
<a href="index2.htm" style="font-size:20px;padding:10px;color: white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
<a href="aboutus.html" style="font-size:20px;padding:10px;color: white;">About</a>

<a href="ContactUs.html" style="font-size:20px;padding:10px;color: white;">Contact Us</a>
<a href="register.html" style="font-size:20px;padding:10px;color: white;">Sign Up</a>

    
    
    
</div>';
if(isset($_POST['firstname']) and isset($_POST['secondname']))
{
		if($_POST['firstname']=="Dehradun" and $_POST['secondname']=="Clement Town")
        {
             
            require 'ClementTown.php';
		}
        else if($_POST['firstname']=="Dehradun" and $_POST['secondname']=="ISBT")
        {
            require 'ISBT.php';
        }
		else if($_POST['firstname']=="Dehradun" and $_POST['secondname']=="Rajpur")
        {
			require 'Rajpur.php';
        }
        else if($_POST['firstname']=="Dehradun" and $_POST['secondname']=="Clock Tower"){
            
            require 'ClockTower.php';
        }
        else{
            echo 'Values Incorrect';
            
	        header("refresh:1;url=index2.htm");
        }
}
?> 