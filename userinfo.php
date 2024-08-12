<?php
$con = mysqli_connect('localhost','u999497533_shreyans298', 'Preeti@1601', 'u999497533_db');

mysqli_select_db($con, 'u999497533_db');
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comment'];

$query = " insert into userinfodata (user, email, phone, comment) values ('$user', '$email', '$phone', '$comments')";
$res = mysqli_query($con, $query);

header('Location: index.php');
exit();

 ?>