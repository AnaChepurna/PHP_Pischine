<?php 
	session_start();
	if ($_GET["submit"] == "OK" && $_GET["login"] != FALSE && $_GET["passwd"] != FALSE) {
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["passwd"] = $_GET["passwd"];
	}
 ?>

<html>
<head>
	<style type="text/css">
		#form {
			display: flex;
			background-color: pink;
			width: 200px;
			height: 100px;
			padding: 10px;
			text-align: center;
			position: absolute;
			left: 50%;
			transform: translate(-50%);
		}
	</style>
</head>
<body>
	<div id="form"s>
		<form method="get" name="index.php">
			Username: <input type="text" name="login" value="<?php echo $_SESSION["login"]; ?>">
			<br/>
			Password: <input type="text" name="passwd" value="<?php echo $_SESSION["passwd"]; ?>">
			<br/>
			<input type="submit" name="submit" value="OK">
		</form>
	</div>
</body>
</html>