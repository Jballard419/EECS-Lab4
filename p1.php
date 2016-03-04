

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php
function mut($x, $y) {
    $z = $x * $y;
    return $z;
}
 echo "<table>" ;
 echo "<tr>";
 echo " <td> </td>";
for ($i=1; $i <101 ; $i++) {
  echo " <td>" .  $i . "</td>";

}
echo "</tr>";

for ($j=1; $j <101 ; $j++) {

echo "<tr>";
echo " <td>" .  $j . "</td>";

for ($i=1; $i < 101; $i++) {
  echo " <td>" . mut($i, $j) . "</td>";

}

echo "</tr>";

}

?>
