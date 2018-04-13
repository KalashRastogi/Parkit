<?php
$mysql_host='localhost';
$mysql_user='root';

if(!@mysql_connect($mysql_host,$mysql_user))
{
    die('connection not established');
}
else
{
    if(!@mysql_select_db('parking_D'))
    {
        die('cannot connect to database');    
    }
}
?>