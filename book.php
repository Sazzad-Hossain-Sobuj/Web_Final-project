<?php

$hname = $_POST['house_name'];
$hnumber = $_POST['house_number'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

echo  $hname;
echo  $hnumber;
echo  $fname;
echo  $lname;
echo  $email;
echo  $contact;
echo  $address;

$hostname = 'localhost';
$user = 'root';
$password = '';
$db = 'home_rent';

$con = mysqli_connect($hostname, $user, $password);

if (!$con) {
  die('Connection Failed:'.mysqli_connect.erro());
}
else {
  echo 'Connection Successfull';
}

mysqli_select_db($con, $db);
$query = "INSERT INTO booking(house_name, house_number, first_name, last_name, email, contact, address)
      values('$hname', '$hnumber', '$fname', '$lname', '$email', '$contact', '$address')";

$run = mysqli_query($con, $query);
if(!$run) {
  echo 'Booking Failed';
}
else {
  echo 'Booking Successfull';
}

?>
