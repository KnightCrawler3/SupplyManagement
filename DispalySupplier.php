<?php
require("connect.php");
$city_id = $_POST["city_id"];
$city = (int)$city_id;
$present_date = $_POST["present_date"];
$tql = "select * from supplier where city_id ='".$city."' and s_Expire > '".$present_date."'";

$result = $conn->query($tql);

if ($result->num_rows > 0)
{
	 while($row = $result->fetch_array(MYSQLI_ASSOC) )
	 {
		 echo "SupplierId:".$row["s_id"]." ";
		 echo "SupplierName:".$row["s_name"]." ";
		 echo "SupplierExpierDate:".$row["s_Expire"]." ";
		
	 }
}
else {
   echo "Please Enter correct Details";
}
	
$conn->close();

?>
