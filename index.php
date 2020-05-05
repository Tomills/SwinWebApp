<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Homepage"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abacus Software</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<body class="centuryfont" id="index-bg">
    <div id="index-menu">
        <?php
            $manage_menu = "";
            include ("menu.inc");
        ?>
        <br />
    </div>
    <br />
    <h1 class="spaced-letters">Abacus Software</h1>
    <br />
    <div class="spaced-letters" id="intro">
        <h2 class="spaced-letters" >Who We Are</h2>
        <p id="intro-content">Abacus Software Development is a company providing intelligent and cutting-edge software solutions to our clients all over the globe. 
            We offer services including Custom Software Development, Data Analytics, and Software Consulting. Our pride is in our strong focus on
            high quality work, through which we break traditional boundaries to achieve expertly refined results.
        </p>
    </div>
    <?php
        $page = "index";
        include "footer.inc";
    ?>
</body>
</html>