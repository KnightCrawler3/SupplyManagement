<?php
require("connect.php");
$id=$_POST["id"];
$password=$_POST["password"];

$aa="select status from  login where id = '$id' and password='$password'";

$result = $conn->query($aa);

// if($result==TRUE) {
    // echo " $dbname is selected successfully";
// } else{
// echo "fail";
// }


if ($result->num_rows > 0) {
	
			
	while($row = $result->fetch_array(MYSQLI_ASSOC) ) 
 
	{
		if($row['status']=="admin"){
        echo "ok";}
         
		 if ($row['status']=="user"){
			 echo "ok1";
		 }
	}
}
     else{
   	 echo"Please Enter correct id and password";
    }
	
$conn->close();
?>
