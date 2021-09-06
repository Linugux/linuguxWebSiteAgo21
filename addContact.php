<?php

$hostname = "localhost";
$username = "pi";
$password = "my";
$db = "webServer";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
    echo 'Connected successfully';

if(isset($_POST['submit'])) {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $=$_POST['email'];
  
  $query = "INSERT INTO phonebook (firstname, lastname, phone, address, email) VALUES ('$firstname','$lastname','$phone','$address','$email')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your review.";
    }

}
?>
