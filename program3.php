<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
	$sum=0;
        $num = $_POST['num'];  
        
        $reverse = strrev($num);  
        
	
        if($num == $reverse)
	{  
            echo "The number $num is Palindrome";     
        }
	else
	{  
            echo "The number $num is not a Palindrome";   
        } 

$sum=0;
$rem=0;
 for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  } 
echo "<br>";
echo "sum is: $sum";
}     
      ?>  