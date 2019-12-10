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
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<a href='index.php'><br><br><br><br><br>মূল পাতা</a> <br><br>

<div class="form"><br> <br>
<h1> এডমিন  লগইন </h1>
<form action="" method="post" name="login">
পাসওয়ার্ড <h style="color:red">*</h><br>
<input type="password" name="pass" placeholder="****" required /><br><br>
<input type = "submit" name = "submit" value = " লগইন"><br>
</form>
</div>
<?php
 
if (isset($_POST['submit'])){
	$pass = $_POST['pass'];
	if($pass == '1234'){
		$_SESSION['pankaj'] = 'yes';
		echo '<h2><a href = "view.php">ডাটাবেস ডকুমেন্ট*</a></h2>';
		
	}else{
		echo '<h2 style = "color: red">দুঃখিত! দয়া করে সঠিক পাসওয়ার্ড দিন। </h2>';
	}
	 
	}
?>

</body>
</html>