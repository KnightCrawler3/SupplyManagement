<?php 
require("connect.php");  
$tql = "select s_name from supplier";
$result = $conn->query($tql);
 if ($result->num_rows > 0) { 
 //$val =1;
 	while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
       //echo $row["s_name"];
	echo "<option>".$row["s_name"]."</option>"."<br>";
		//$val+=1;
    }
   } else {
   	     echo "unable to load item";
    }

$conn->close(); 
?>
