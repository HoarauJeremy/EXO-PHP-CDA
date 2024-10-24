<?php

// $tableau = [1,2,3];
// $tab = [1,2,3,4];
$tab = array(1,2,3,4);

echo $tab[3]."<br>";
$tab[3]=6;
echo $tab[3];

$tab2 = [
    "1" => 2,
    "3" => 4,
    "5" => 6,
];

print_r($tab2);
echo "<br>" .$tab2["1"];

