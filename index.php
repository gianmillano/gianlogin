<!DOCTYPE html>
<html>
<head>
	<title>Basic Login using PHP and MySql</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
			<form method="post" action="login.php">
				<input type="text" name="txtuname" placeholder="Username">
				<input type="password" name="txtpword" placeholder="Password">
				<button class="btn btn-info btn-block" name="login" type="submit" value="login">Login</button>

			<form>
				<input style ="color:grey;" class="btn btn-info btn-block" name="login" type="button" value="register" onclick="window.location.href='register.php'" />
			</form>
		
		</div>
        </div>
        
</div>
	<script src="script/jquery-3.2.1.js"></script>
	<script src="script/bootstrap.js"></script>
	<script src="script/parallax.js"></script>

</body>
</html>