<?php

  include 'connect.php';

  $sql = "SELECT ImageID, ImageName, ImageGenre, ImageLink  FROM images WHERE ImageGenre LIKE '$nat' OR ImageGenre LIKE '$ast' OR ImageGenre LIKE '$misc'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<img src="images/' . $row['ImageLink'] . '" alt="' . $row['ImageName'] . '">';
    }
  } 
  $mysqli->close();
