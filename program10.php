<!DOCTYPE html>
<html>
<head>
	<title>string</title>
</head>

<body>
   <center>
	<h1>Select the Menu</h1>
	<h3>Option->1 = Reverse the string</h3>
	<h3>Option->2 = Find the length of the string</h3>
	<h3>Option->3 = Substring operations</h3>
	<h3>Option->4 = Convert to uppercase</h3>
	<h3>Option->5 = Convert to lowercase</h3>
	<h3>Option->6 = Count the number of words.</h3>
	
	<form method="post">
		<table border="2">
			<tr>
				<td> <input type="text" name="string" value="" placeholder="Enter the String"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="option" value="" placeholder="Enter option 1-6 only"/>
				</td>
			</tr>

			<tr>
				<td> <input type="submit" name="submit"
					value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
</center>

<?php


if(isset($_POST['submit'])) 
{
	$a = $_POST['string'];
	$ch = $_POST['option'];
	switch($ch) 
	{
		case 1:	echo " Reverse of the string is: ".strrev($a);
			break;

		case 2:	echo " Length of the string is: " .strlen($a) ;
			break;

		case 3:	echo " Substring operations is: " .substr($a,2); ;
			break;

		case 4: echo " Converted to uppercase: " .strtoupper($a) ;
			break;

		case 5: echo " Converted to lowercase: " .strtolower($a) ;
			break;

		case 6: echo " Count of Words: " .str_word_count($a) ;
			break;

		default: echo ("invalid option\n");
	}
	return 0;
}
?>
</body>
</html>
