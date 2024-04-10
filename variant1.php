<?php
function func1(){
  for ($ii = 1; $ii <= 12; $ii++) {
    for ($jj = 1; $jj <= 12; $jj++) {
      $vv[$ii][$jj] = $ii * $jj;
    }
  }
  return $vv;
}

$oo = func1();
for ($ii = 1; $ii <= count($oo); $ii++) {
  for ($jj = 1; $jj <= count($oo[$ii]); $jj++) {
    echo $oo[$ii][$jj]." ";
  }
  echo "<br>\n";
}
?>
