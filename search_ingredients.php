<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();

if (isset($_POST['iname'])) 

{
	extract($_POST);
	$q=$d->select("ingredients_details","ingredient_name='$iname'","");
	$data=mysqli_fetch_array($q);
	extract($data);
	if(!isset($_SESSION['response']))
	{
		$_SESSION['response'] = array();
	 
	}

	// $_SESSION['response']=

	$b[$ingredient_id]=$ingredient_name;
	array_push($_SESSION['response'],$b);


}	


?>