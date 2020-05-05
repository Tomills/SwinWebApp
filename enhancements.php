<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Enhancements"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhancements</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<body class="centuryfont" id="enhancements-bg">
    <div class="menu" id="menu">
        <?php
            $manage_menu = "";
            include "menu.inc"
        ?>
        <br />
    </div>
    <br />
    <h2 class="spaced-letters enhancements-h"><a href="enhancements1.php">Enhancements Part One (HTML/CSS)</a></h2>
    <h2 class="spaced-letters enhancements-h"><a href="enhancements2.php">Enhancements Part Two (JavaScript)</a></h2>
    <h2 class="spaced-letters enhancements-h"><a href="enhancements3.php">Enhancements Part Three (PHP/MySQL)</a></h2>
    <?php
        $page = "enhance";
        include "footer.inc";
    ?>
</body>
</html>