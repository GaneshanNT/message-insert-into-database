<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
    echo 'not connect to the server';
}

if(!mysqli_select_db($con,'tutorial'))
{
    echo 'database not selected';
}

$Name = $_POST['Name'];
$Email = $_POST['Email']; 

$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

if(!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else
{
    echo 'Data Inserted';
}

header("refresh:3; url=index.html")

?>