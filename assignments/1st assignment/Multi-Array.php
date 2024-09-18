<?php 

$students = array(1 => 'John', 2 => 'Mike', 3 => 'Emma');

print_r ($students);
echo "<br>";

echo '<b>sort($students)</b>'; sort($students); print_r($students); echo
"<br>";
echo '<b>rsort($students)</b>'; rsort($students); print_r($students); echo
"<br>";
echo '<b>asort($students)</b>'; asort($students); print_r($students); echo
"<br>";
echo '<b>arsort($students)</b>'; arsort($students); print_r($students); echo
"<br>";
echo '<b>ksort($students)</b>'; ksort($students); print_r($students); echo
"<br>";
echo '<b>krsort($students)</b>'; krsort($students); print_r($students); echo
"<br>";

?>