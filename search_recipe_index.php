<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();

if (isset($_POST['rname'])) 

{
	extract($_POST);
	
	$q=$d->select("recipe_details","recipe_name='$rname'","");
	$data=mysqli_fetch_array($q);
	extract($data);

	if($data>0)
	{
		header("location:search.php?recipe_id=".$recipe_id);
	}
}	


?>