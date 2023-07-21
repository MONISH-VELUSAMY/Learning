<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="INSERT INTO Persons(PersonID,LastName,FirstName,Address,City) VALUES ('1','gaikwad','ruturaj','MH','bhopal');";

if($conn->query($sql)){
    echo "values inserted";
}else{
    echo "error in insertion";
}

$conn->close();



?>