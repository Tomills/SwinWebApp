<!DOCTYPE html>
<?php
    session_start();
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>PHP - MySQL Manage Page</title>
    <meta name="description" content="Manage"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
	<link rel="stylesheet" href="styles/style.css" />
</head>
<body class="text-center centuryfont">
    <?php
        $manage_menu = "manage";
        include_once "menu.inc";
    ?>
    <h2>Administrator Login</h2>
    <?php
        $_SESSION["valid"] = false;

        if (isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
            if ($_POST["username"] == "admin" && $_POST["password"] == "password") {
                $_SESSION["valid"] = true;
            }
            else {
                echo "<p>Invalid username and/or password.</p>";
            }
        }
        if ($_SESSION["valid"] === true) {
            header("location: manage.php");
        }

    ?>
    <form method="post" class="manage">
        <label for="username">Username: </label>
            <p><input type="text" id="username" name="username" placeholder="Username = admin" /></p>    
        <label for="password">Password: </label>
            <p><input type="password" id="password" name="password" placeholder="Password = password" /> </p>     
        <input type="submit" name="login" class="button" value="Login" />
    </form>
</body>
</html>