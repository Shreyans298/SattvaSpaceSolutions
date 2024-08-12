<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'SattvaSpaceSolutions');
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comment'];

$query = " insert into userinfodata (user, email, phone, comment) values ('$user', '$email', '$phone', '$comments')";
$res = mysqli_query($con, $query);

header('Location: index.php');
exit();

 ?>