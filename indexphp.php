<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
</head>
<body>

<?php
$a=shell_exec('uname -a') ;
echo "<p>$a</p>";
echo "Connects Server Mariadb; Table : Phonebook ;<br>";

$hostname = "localhost";
$username = "pi";
$password = "my";
$db = "webServer";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
echo "Databases : ";
print $db;
if ($dbconnect->connect_error) {
	  die("Database connection failed: " . $dbconnect->connect_error);
	  }
?>
<table  align="" style="font-size:13px; width: 100%; ">
<tr align='center'>
  <td>FirstName</td>
  <td>LastName</td>
  <td>Phone</td>
  <td>Email</td>
</tr>
<?php
$query = mysqli_query($dbconnect, "SELECT * FROM phonebook")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['firstname']}</td>
    <td>{$row['lastname']}</td>
    <td>{$row['phone']}</td>
    <td>{$row['email']}</td>
   </tr>";

}

?>
</table>
</body>
</html>

