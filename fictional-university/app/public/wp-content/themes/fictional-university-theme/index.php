<?php

  $myNames = array("Phoebe", "Lucy", 'Pia', 'Logan');
  $count = 0 ;
  while($count < count($myNames)) {
    echo "<li>Hi, my name is $myNames[$count].</li>";
    $count++;
  }
?>
