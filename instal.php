<?php 
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "supplyManagment";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected with database !!!";
}
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{ echo "connected with db";
}
$sql = "create table login (id int(10) primary key auto_increment,password varchar(20) 
 not null,status varchar(20) not null)";
 if ($conn->query($sql) === TRUE) {
    echo " login table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "create table supplier (s_id int(10) primary key auto_increment,
s_name varchar(20) not null,
s_Expire Date not null,
city_id int not null)";
if ($conn->query($sql) === TRUE) {
    echo " supplier table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = " create table city (c_id int primary key auto_increment ,c_name varchar(20) not null)";
if ($conn->query($sql) === TRUE) {
    echo " city table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "create table product(p_id int (10) primary key auto_increment,p_name varchar(20) not null)";
if ($conn->query($sql) === TRUE) {
    echo " product table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "create table details(s_id int(10) not null,p_id int(10) not  null)";
if ($conn->query($sql) === TRUE) {
    echo " details created successfully";
} else {
    echo "Error creating admin: " . $conn->error;
}
$sql = "alter table details add foreign key (s_id) REFERENCES supplier(s_id)";
if ($conn->query($sql) === TRUE) {
    echo " alter table details created successfully";
} else {
    echo "Error creating admin: " . $conn->error;
}
$sql =  "alter table details add foreign key (p_id) REFERENCES product(p_id)";
if ($conn->query($sql) === TRUE) {
    echo " alter table details created successfully";
} else {
    echo "Error creating admin: " . $conn->error;
}
$sql="insert into city (c_name)values('Bhopal'),('Jabalpur'),('Harda'),('Patna'),('Bhilai')";
if ($conn->query($sql) === TRUE) {
    echo " cities added successfully";
} else {
    echo "city adding unsuccessful " . $conn->error;
}

$conn->close();
?>
