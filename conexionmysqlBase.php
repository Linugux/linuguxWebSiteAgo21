<!--
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
  $query1 = mysqli_query($dbconnect, "SELECT * FROM phonebook ORDER BY id DESC LIMIT 1")
  or die (mysql_error($dbconnect));

  $query = mysqli_query($dbconnect, "SELECT * FROM phonebook ORDER BY RAND()
LIMIT 1")
     or die (mysqli_error($dbconnect));

  while($row1 = mysqli_fetch_array($query1)){
    $namex1 = $row1['firstname'];
    $namex1 = substr($namex1, 0, 2);

    $phoneHide1 = $row1['phone'];
    $phoneHide1 = substr($phoneHide1, 0, 10);

    $show1 = $row1['email'];
    $show01 = substr($show1, 0 , 3);
    $show11 = substr($show1, -10);
    echo
     "<tr>
      <td>{$row1['id']}</td>
      <td>$namex1{$row1['lastname']}</td>
      <td>$phoneHide1 *****</td>
      <td>$show01*****$show11</td>
     </tr>";
  }

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
-->
ok
