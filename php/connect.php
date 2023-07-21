<?php

$servername="localhost";
$username="root";
$password="";

#create connection
$conn=new mysqli($servername,$username,$password); //mysqli_connect();
#check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error); //mysqli_connect_error();

}
//create database

$sql="CREATE DATABASE myDB";
if($conn->query($sql)==TRUE){               //mysqli_query($conn,$sql)
    echo 'db created successfully';
}else{
    echo 'error in creating db';
}


$conn->close();








?>