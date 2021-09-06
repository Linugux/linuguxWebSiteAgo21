<?php
  $variable=date("Y-m-d H:i:s");
  echo '<a style="background-color: font-size:15px">'.$variable.'</a>';
?>

<P>
<a style="font-size: 10px;">Connects Php7 to Mariadb-Server; Db : webServer ;<br> Table : Phonebook ;</a>
</P>

<?php include 'conection.php'?>
<div>
  <table align="right" border="3" style="color: white ; background-color: ; font-size:14px;" >
  <tr style="width: 100%">
    <td>Id</td>
    <td>Name</td>
    <td>Phone</td>
    <td>Email Code</td>
  </tr>
  <?php
  #$query = mysqli_query($dbconnect, "SELECT * FROM phonebook ORDER BY id DESC")
  $query = mysqli_query($dbconnect, "SELECT * FROM phonebook ORDER BY RAND()
LIMIT 1")
     or die (mysqli_error($dbconnect));

  while ($row = mysqli_fetch_array($query)) {
    $namex = $row['firstname'];
    $namex = substr($namex, 0, 2);

    $phoneHide = $row['phone'];
    $phoneHide = substr($phoneHide, 0, 10);

    $show = $row['email'];
    $show0 = substr($show, 0 , 3);
    $show1 = substr($show, -10);
    echo
     "<tr>
      <td>{$row['id']}</td>
      <td>$namex{$row['lastname']}</td>
      <td>$phoneHide *****</td>
      <td>$show0*****$show1</td>
     </tr>";
  }
  mysqli_close($dbconnect);
  ?>
  </table>
</div>

  