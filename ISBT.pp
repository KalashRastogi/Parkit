<!DOCTYPE html>
<html>
    <head>
        <title>ClementTown</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Locations</th>
                <th>Total Slots</th>
                <th>Slots Occupied</th>
                <th>Slots Available</th>
                <th>Booked</th>
            </tr>
            <?php
            require 'p9.php'; 
            $query = "SELECT * from parkingisbt";
         if($is_query_run=mysql_query($query))
	{	
   		 echo "query exec<br>";
   		 while($query_execute=mysql_fetch_assoc($is_query_run))
   	        {
   		     echo '<table ><tr><td>'.$query_execute['Locations'].'</td><td>'.$query_execute['Total Slots'].'</td><td>'.$query_execute['Slots Occupied'].'</td><td>'.$query_execute['Slot Available'].'</td><td>'.$query_execute['Booked'].'</td></tr>';
   	 	}
	}
	else
	{
 	   echo "not successful";
	}
            ?>
        </table>
    </body>
</html>