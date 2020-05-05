<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Enhancements3"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhancements</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<body class="centuryfont" id="enhancements2-bg">
    <div class="menu" id="menu">
        <?php
            $manage_menu = "";
            include "menu.inc"
        ?>
        <br />
    </div>
    <br />
    <h1 class="spaced-letters enhancements-h">Enhancements Part Three</h1>
    <br />
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement One</h2>
        <p>
            Attached to <a href="phpenhancements.php">this link</a> is my first enhancement for Assignment Part 3 
            which involved implementing a log in page for a webpage administrator, which is the only way to reach the manage.php page.
        </p>
        <p><a href="https://stackoverflow.com/questions/19531044/creating-a-very-simple-1-username-password-login-in-php" target="_blank">Here</a> 
            is a link to the resource used to aid in the implementation of the log in page.
        </p>
    </div>
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement Two</h2>
        <p>
           My second enhancement improves the usability of the management page, with a <a href="manage.php#sort-by">'Sort By'</a> feature. This 
           is able to sort the tables' contents based on any of the column's values.
        </p>
        <p><a href="https://www.w3schools.com/sql/sql_orderby.asp" target="_blank">Here</a> 
            is a link to the resource used to aid in the implementation of the sort by feature.
        </p>
    </div>
    <?php
        $page = "enhance2";
        include "footer.inc";
    ?>
</body>
</html>