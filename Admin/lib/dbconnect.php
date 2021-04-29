<?php

class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","dbadmin","loader","dinie_recettes_db");
				return $connection;
                
    }
}

?>