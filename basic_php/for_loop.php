<?php
$number = 0;
$pen_price = 5;
echo "<table border=\"2\" align=\"center\">";
echo "<tr><th>Serial</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th></tr>";
for ( $counter = 10; $counter <= 100; $counter += 10) {

echo "<tr><td>";
echo $number +=1;
echo "</td><td>";
echo $counter;
echo "</td><td>";
echo $pen_price * $counter;
echo "</td></tr>";
}
echo "</table>";
?>
