<?php 
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected successfully";

//create database
$sql="CREATE DATABASE mygyan12";
if($con->query($sql)==TRUE)
{
echo "Database created successfully";
}
else
{
echo "Error creating database:".$con->error;
} 
/*$con=mysqli_connect("localhost","root","","mygyan12");
if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected successfully";*/
//create table
mysqli_select_db($con,"mygyan12");
$sql="create table Persons
(FirstName varchar(15),LastName varchar(15),Age int)";
//execute query
mysqli_query($con,$sql);
mysqli_close($con);
?>
<?php
//Insert data into a database table
//create connection
$con=mysqli_connect("localhost","root","","mygyan12");
//check connection
if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected successfully"."<br>";
$sql="INSERT INTO Persons(FirstName,LastName,Age)
VALUES('John','Doe',25)";
if(mysqli_query($con,$sql)){
echo "New record created successfully";
}
else{
echo "Error:".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>
