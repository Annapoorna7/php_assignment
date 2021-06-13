<form method="post">
Enter the Limit: <input type="text" name="num"/><br>
<button type="submit">Submit</button>
</form>
<?php
if($_POST)
{
$n = $_POST['num'];
$f1=0;
$f2=1;
$f3=0;
$f=1;
if ($n == 1)
{
echo "Fibbonoci number are $f1";
}
elseif ($n == 2)
{
echo "Fibbonoci number are $f1 and $f2";
}
else
{
echo "Fibbonoci series are $f1 $f2 ";
for($i=3;$i<=$n;$i++)
{
$f3=$f1+$f2;
echo " $f3";
$f1=$f2;
$f2=$f3;
}
echo "<br>";
$f1=1;
$f2=1;
$f3=0;
echo " \nPrime numbers are ";
for($i=3;$i<$n;$i++)
{
$f=1;
$f3=$f1+$f2;
for ($j = 3; $j <= $i / 2; ++$j)
{
if ($i % $j == 0)
{
$f = 0;
break;}
}
if($f==1)
echo " $f3";
$f1=$f2;
$f2=$f3;
}
}
}
?>