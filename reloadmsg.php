
<?php include 'conection.php'?>
  <?php
  #$query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY id DESC")
  $query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY RAND()
LIMIT 1")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    if($row = mysqli_fetch_array($query)){
      echo"{$row['msg65']}<br>";
    }
  mysqli_close($dbconnect);
  ?>
  </table>
</div>

  