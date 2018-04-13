<!DOCTYPE html>
<html>
    <head>
        <title>booked</title>
        <style>
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
        </style>
    </head>
    <body>
         
        <div  style="font-size:150%; color:black;margin-left:175px;margin-right:175px;margin-top:150px;">
        <table>
          <h3 style="margin:0px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp username &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp parkinglot&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp intime&nbsp&nbsp&nbsp&nbsp&nbsp outtime </h3>
           
            <?php
            require 'p9.php'; 
            $query = 'SELECT * from booked';
         if($is_query_run=mysql_query($query))
	     {	
            
             while($query_execute=mysql_fetch_assoc($is_query_run))
   	        {
   		          
                       echo '<table border:1px solid black style="font-size:100%; margin-left:320px margin-top:400px"><tr><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['username'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['parkinglot'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['intime'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['outtime'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>';
                   
            
   	 	}
	}
	else
	{
 	   echo "not successful";
	}
            
            ?>
            </table></div>
       
    </body>
</html>