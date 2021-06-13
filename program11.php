<html>
<body>
<center>
<h2>
bill
</h2>
<form method="post">
 item names:<input type="text" name="names" placeholder="enter the item
names" required /><br><br>
enter the item price:<input type="text" name="price" placeholder="enter the item price"
required />
<br><br>
<input type="submit" name="submit" value="store"/>
<input type="reset" name="reset" value="reset"/>
</form>
<center><h2>to display items</center>
<br>
<table>
<tr class="w3-red">
<th>item name</th>
<th>item price</th>
</tr>
<tr>
<?php
if($_POST)
{
$names = $_POST['names'];
$price = $_POST['price'];
$nme = explode(',',$names);
$x = count($nme);
$prc = explode(',',$price);
for($i=0;$i<$x;$i++){
echo "<tr>";
echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
}
echo "<tr>";
echo "</table>";
echo '<br>';
$total = 0;
for($i=0; $i<$x;$i++)
{
$total = $total + $prc[$i];
}
echo '<h4>total amount is: <b>'.$total. '</b>';$mx= max($prc);
$ky = array_search($mx, $prc);
echo '<br>';
echo 'costliest item is:<b> '.$nme[$ky]. '</b>';
$mn= min($prc);
$key = array_search($mn, $prc);
echo '<br>';
echo 'cheapest item is:<b> '.$nme[$key]. '</b>';
}
?>
<td></td>
<td></td>
</tr>
</table>
<br>
<br>
</center>
</body>
</html>