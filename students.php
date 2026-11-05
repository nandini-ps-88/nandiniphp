<?php
$students=["alice","bob","Charlie","diana","eve"];
echo "original array:<br>";
print_r($students);
echo "<br><br>";

asort($students);
echo "ascending order";
print_r($students);
echo "<br><br>";

arsort($students);
echo "descending order";
print_r($students);

?>