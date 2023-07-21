<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error); //mysqli_connect_error();

}
$sql="CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);";

if($conn->query($sql)==TRUE){               //mysqli_query($conn,$sql)
    echo 'table created successfully';
}else{
    echo 'error in creating table';
}
$conn->close();

?>