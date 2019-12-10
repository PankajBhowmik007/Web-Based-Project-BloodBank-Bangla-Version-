<?php
include_once 'config.php';
?>
<html>
<head>
<style>
body {
	background-color: #B0C4DE;
}
</style>
<title>
Welcome to this form
</title>
<link rel="stylesheet" href ="style.css">
</head>
<body>
<h1 style="color:blue"><br>
রেজিস্ট্রেশন ফরম
</h1>
<a href = 'index.php'>মূল পাতা</a>
<br><br>
<form action ="" method = "post" autocomplete = "on" style ="text-align: center">
নাম (ইংরেজিতে)<h style="color:red">*</h><br>
<input type = "text" name = "name" placeholder= "Name" required> <br> <br>
লিঙ্গ<h style="color:red">*</h><br>
<input type="radio" name="gend" value="male" checked> Male &nbsp &nbsp &nbsp &nbsp &nbsp; 
  <input type="radio" name="gend" value="female"> Female<br> <br> 
জন্মতারিখ<br>
<input type = "date" name = "dob" value = "2000-01-01"> <br> <br> 
পেশা <br>
<input type = "text" name = "department" placeholder= "Student/Teacher/Employee/..."> <br> <br>
ফোন নম্বর<h style="color:red">*</h><br>
<input type = "number" name = "phone" placeholder= "01XXXXXXXXX" required> <br> <br>
রক্তের গ্রূপ<h style="color:red">*</h><br>

<select name = "bgroup" required>
<option> Select a Blood Group </option>
<option value = "A+"> A+ </option>
<option value = "B+"> B+ </option>
<option value = "O+"> O+ </option>
<option value = "AB+"> AB+ </option>
<option value = "A-"> A- </option>
<option value = "B-"> B- </option>
<option value = "O-"> O-</option>
<option value = "AB-"> AB-</option>
</select>

<br><br>
সর্বশেষ রক্তদান<h style="color:red">*</h><br>
<input type = "date" name = "ldat" required> <br> <br>
<input type = "submit" name = "submit" value = "Submit"><br>
</form>

<?php
if(isset($_POST['submit']))
{
	
$sql = "CREATE TABLE IF NOT EXISTS sdb (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
gend VARCHAR(30) NOT NULL,
dob DATE NOT NULL,
department VARCHAR(30) NOT NULL,
phone VARCHAR(50) NOT NULL,
bgroup VARCHAR(50) NOT NULL,
ldat bigint(20),
reg_date bigint(20)
)";

mysqli_query($conn, $sql);

$ldat = strtotime($_POST['ldat']); 
$today = time(); 

$sql2 = "INSERT INTO sdb(name,gend,dob,department,phone,bgroup,ldat, reg_date) VALUES ('$_POST[name]','$_POST[gend]','$_POST[dob]','$_POST[department]','$_POST[phone]','$_POST[bgroup]','$ldat', '$today')";
 if (mysqli_query($conn, $sql2)) {
 	echo "<a href = 'welcome.php'>";
    echo'<h2 style="color:red">অভিনন্দন!  </h2>';	
    
}
}
?>

</body>
</html>
 