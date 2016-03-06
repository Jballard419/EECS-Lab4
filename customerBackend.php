<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$Sh = $_POST["Sh"];
$user = $_POST["username"];
$password=$_POST["password"];
echo "<html><head><title> receipt </title> <link href='style.css'
            rel='stylesheet'
            type='text/css'/> </head> <body>";
echo "Welcome  ". $user."<br>";
echo "password:  ". $password. "<br>";

echo "<table>" ;
echo "<tr>";
echo " <td class='blank'>   </td>";

echo "<td class='text'> Quantity  </td>";
echo "<td class='text'> Cost Per Item   </td>";
echo "<td class='text'> Sub Total </td> </tr>";

echo "<tr> <td class='text'> all materia </td> ";
echo "<td>". $q1. "</td>";
echo "<td> $35.02 </td>";
echo "<td> $". ($q1*35.02). "</td> </tr>";

echo "<tr> <td class='text'> cure materia </td> ";
echo "<td>". $q2. "</td>";
echo "<td> $40.00 </td>";
echo "<td> $". ($q2*40.00). "</td> </tr>";

echo "<tr> <td class='text'> Steal materia </td> ";
echo "<td>". $q3. "</td>";
echo "<td> $90.83</td>";
echo "<td> $". ($q3*90.83). "</td> </tr>";

echo "<tr> <td class='text'> Shipping </td> ";
if($Sh=0){

  echo " <td>  7 day Shipping </td> ";

}else if($Sh=50.00){

  echo " <td> Overnight <td>  </td> </td> ";

}else{
  echo " <td>  Three night </td> ";

}
echo "<td> $". $Sh. "</td> </tr>";
$cost= ($q1*35.02)+ ($q2*40.00) + ($q3*90.83)+ $Sh;

echo" <tr> <td class='text'> Total <td> <td> </td> </td> </td> ";

echo "<td> $". $cost. "</td> </tr>";








echo "</tr>";









 ?>
