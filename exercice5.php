<?php

$tableau1 = [1,2,3,9,7];
$tableau2 = [2,9,6,7,8,3,];

$communs = array_intersect($tableau1,$tableau2);

echo "Les elements communs sont : ";
print_r($communs);


?>