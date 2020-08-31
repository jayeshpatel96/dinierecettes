<?php

class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","u247664301_recipe_db","recipe_db@123","u247664301_recipe_db");
				return $connection;
    }
}

?>