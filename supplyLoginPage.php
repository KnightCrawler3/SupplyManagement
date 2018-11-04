<?php
require("connect.php");
$id=$_POST["id"];
$password=$_POST["password"];
//$tql = "select * from  login where id = 1 and password='ujjwal'";
$aa="select status from  login where id = '$id' and password='$password'";
$result = $conn->query($aa);


// if($result==TRUE) {
    // echo " $dbname is selected successfully";
// } else{
// echo "fail";
// }



if ($result->num_rows > 0) {
	if(	$aa=="admin"){				
	while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        echo "ok";
         }
     }
}
     else{
   	 echo"Please Enter correct id and password";
    }

$conn->close();
?>
