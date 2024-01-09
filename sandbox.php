<?php 

	if(isset($_POST['submit'])){

		session_start();

		$_SESSION['name'] = $_POST['name'];
        // echo $_SESSION["name"];

		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>php pizza</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>