<?php

require_once 'config.php';
$email = $_POST['email'];
$name = $_POST['name'];
$district = $_POST['district'];
$school = $_POST['school'];
$category = $_POST['category'];
$area = $_POST['area'];
$pin = $_POST['pin'];
$state = $_POST['state'];

$result = mysql_query("insert into new_school(school, state,district,category,pin,area,email,name)values('".$school."', '".$state."','".$district."', '".$category."', '".$pin."', '".$area."', '".$email."', '".$name."')") or die(mysql_error());


    header('location:/thanks.php');




