<!DOCTYPE html>
<html>
    <head>
        <title>Clock Tower</title>
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
         
        <div  style="font-size:150%; color:white;margin-left:225px;margin-right:85px;margin-top:150px;background-color:black;opacity:0.5;">
        <table>
          <h3 style="margin:0px;">Locations &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Total slots &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Slots occupied&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Slots available&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booked </h3>
           
            <?php
            require 'p9.php'; 
            $query = "SELECT * from parkingclocktower";
         if($is_query_run=mysql_query($query))
	     {	
            $count=1;
             while($query_execute=mysql_fetch_assoc($is_query_run))
   	        {
   		           if($count==1 or $count==2){
                       echo '<table border:1px style="font-size:150%;background-color:white; margin-left:320px margin-top:400px"><tr><td>'.$query_execute['Locations'].'</style></td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Total Slots'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Slots Occupied'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Slots Available'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Booked'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>';
                   }
             else if($count==3 or $count==4)
             {echo '<table border:1px style="font-size:150%;background-color:blue;opacity:0.5 margin-left:320px margin-top:400px"><tr><td>'.$query_execute['Locations'].'</style></td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Total Slots'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Slots Occupied'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Slots Available'].'</td><td>'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$query_execute['Booked'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>';
             $count=$count+1;}
   	 	}
	}
	else
	{
 	   echo "not successful";
	}
            ?>
            </table></div>
        <div style="margin-left:600px;">
        <a href="booking.html"><button class="button">BOOK PARKING</button></a>
        </div>
    </body>
</html>