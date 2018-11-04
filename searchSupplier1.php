<?php 
require("connect.php");  
$s_name=$_POST["s_name"];

$tql = "select s_id from supplier where s_name=$s_name";
$tql1 = "select p_name from product where p_id = (select p_id from details where s_id = ".$tql.")";
$result = $conn->query($tql1);
 if ($result->num_rows > 0) { 
 	while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
 		echo json_encode($row);
    }
   } else {
   	    $err=array("err"=>"unable to load item");
   	     echo json_encode($err);
    }
$conn->close(); 
?>
