<?php
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$con = new mysqli('sql206.epizy.com','epiz_24332971','wKlEK6YhZL6Hm0','epiz_24332971_db_name');
if($con->connect_error)
{
    echo("Error");
}
$stmt = $con->prepare("insert into user_tb(name,age,city) values (?,?,?)");
$stmt->bind_param("sis",$name,$age,$city);
if($stmt->execute())
{
    echo("success");
}
else
{
    echo("fail");
}
?>