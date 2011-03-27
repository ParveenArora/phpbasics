<?php
$pen_price = 5;
$counter = 10;
$number=1;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Serial</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th></tr>";
while ( $counter <= 200 ) {
echo "<tr><td>";
echo $number;
echo "</td>";
echo "<td>";
echo $counter;
echo "</td>";
echo "<td>";
echo $pen_price * $counter;
echo "</td>";
$counter = $counter + 10;
$number +=1;
}
echo "</table>";
?>
