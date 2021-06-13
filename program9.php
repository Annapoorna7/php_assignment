<html>
<head>
<title>Employee Form</title>
<body style="background-color: black;color: yellow;">
</head>
<body>
<form method="post">
<center>
<h2>Employee form</h2>
<table border="2">
<tr>
<td>
 <input type="file" id="img" name="img" accept="image/*">Profile
</td>
</tr>
<tr>
<td> <input type="text" name="" value="" placeholder="Enter Employee Number"/>
</td>
</tr>
<tr>
<td> <input type="text" name="" value="" placeholder="Enter First Name"/>
</td>
<td> <input type="text" name="" value="" placeholder="Enter Last Name"/>
</td>
</tr>
<tr>
<td> <textarea name="address" rows="3" cols="30" value="" placeholder="Enter address"></textarea>
</td>
</tr>
<tr>
<td>
<input type="radio" value="male" name="gender">male
</td>
<td>
<input type="radio" value="female" name="gender">female
</td>
</tr>
<tr>
<td>
<input type="text" name="" placeholder="designation">
</td>
</tr>
<tr>
<td>
<input type="number" name="" placeholder="Phone number">
</td>
</tr>
<tr>
<td>
Category: 
<input type="radio" value="Part Time" name="cat">Part Time
</td>
<td>
<input type="radio" value="Full Time" name="cat">Full Time
</td>
<td>
<input type="radio" value="Contract" name="cat">Contract
</td>
</tr>
</td>
</tr>
<tr>
<td>
<input type="text" name="" placeholder="number of hours">(only part time employees)
</td>
</tr>
<tr>
<td>
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>
</td>
</tr>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</center>
</form>
<?php
if(isset($_POST['submit']))
{
$basic_salary = $_POST['salary'];
$dallowance = 0.4 * $basic_salary;
$house_rent = 0.2 * $basic_salary;
//To Compute the gross Salary
$gross_salary = $basic_salary + $dallowance + $house_rent;
echo "Basic Salary : ".$basic_salary."/-<br>";
echo "Dearness Allowance: " .$dallowance."/-<br>";
echo "House Rent : " .$house_rent ."/-<br>";
echo "Gross Salary : " .$gross_salary ."/-<br>";
return 0;
}
?>
</body>
</html>