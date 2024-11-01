<?php
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 100); 
}
echo "Масив:\n";
print_r($array);
$sum = array_sum($array);
$count = count($array);
$average = $count > 0 ? $sum / $count : 0; 
echo "Сума елементів масиву: $sum\n";
echo "Кількість елементів: $count\n";
echo "Середнє арифметичне: $average\n";
