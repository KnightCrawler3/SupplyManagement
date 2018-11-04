<?php
require("connect.php");
$s_name=$_POST["s_name"];
$s_Expire=$_POST["s_Expire"];
$city_id=$_POST["city_id"];
$city=(int)$city_id;


$sql="insert into supplier (s_name,s_Expire,city_id)values('".$s_name."','".$s_Expire."','".$city."')";

$result=$conn->query($sql);
if($result==TRUE)
{
	echo "Supplier information added successfully";
	
}
else
	echo "supplier data not added because ".$conn->error;

?>