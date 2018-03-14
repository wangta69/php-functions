<?php
function weighted_random($weights) {
  $r = rand(1, array_sum($weights));
  for($i=0; $i<count($weights); $i++) {
    $r -= $weights[$i];
    if($r < 1) return $i;
  }
  return false;
}


values = ['a','b','c'];
$weights = [10,20,70];

$index = weighted_random($weights);
$result = $values[$index];
echo $result;