<?php
session_start();
$nameError = $passwordError = "";
$name = $password = "";
$complete = false;



if(isset($_POST['submit'])){
	
	if(empty($_POST["name"])){
		$nameError = "Your name is required here";
	} else {
		$name = ($_POST["name"]);
		
	}
	
	if (empty($_POST["password"])) {
		$passwordError = "Your password is required here";
	} else {
		$password = ($_POST["password"]);
		
	}

if($nameError == "" && $passwordError == ""){
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['password'] = $_POST['password'];
		$name = $password = "";
		$complete = true;
	}
}
	
					
			



?>

<!DOCTYPE HTML>
<html>
<head>
<style>
		.error{
			color: red;
		}
</style>
</head>
<body>
<form method="POST">
	 <div>
		<input type="text" name="name" placeholder="User_name" value="<?php echo $name; ?>">
			<span class="error">* <?php echo $nameError;?></span>

	 </div>
	 <div>
		<input type="password" name="password" placeholder="User_password" value="<?php echo $password; ?>">
			<span class="error">* <?php echo $passwordError;?></span>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit">  <br> <br>
				
				
	</div>
</form>
</body>
</html>

<?php


					if($complete){
					header("Location: http://localhost/profile.php");
						die();
						
					}

?>