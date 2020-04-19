<?php

    session_start();

    if(isset($_SESSION['Prihlaseno'])){

	if($_SESSION['Prihlaseno'] == true){
	    header("location: LoremIpsum.php");
	    exit("Prihlasen");
        }
    }

    if(isset($_POST['submit'])) {
	$username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo $_SESSION['username'];
        echo $_SESSION['password'];
        $_SESSION['Prihlaseno'] = false;
        header("location: Login.php");
	exit("Neprihlasen");
    }
?>

<html>
<head>
	<title>Zaregistruj se</title>
</head>
<body>
	<h1>Registrace</h1>
	<h2>Login</h2>
	<form action="Register.php" method="post">
		<label>username:</label>
		<input id="name" name="username" placeholder="username" type="text">
		<label>password:</label>
		<input id="password" name="password" placeholder="****" type="password">
		<input name="submit" type="submit" value=" Register ">
	</form>
</body>
</html>