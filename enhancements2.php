<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Enhancements2"/>
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
    <h1 class="spaced-letters enhancements-h">Enhancements Part Two</h1>
    <br />
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement One</h2>
        <p>
            Attached to <a href="apply.php#timer">this link</a> is my first enhancement for Assignment Part 2 
            which is implementing a visible timer that gives the user 10 minutes to complete the form before it 
            times out and returns to the home page.
        </p>
        <p><a href="https://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer" target="_blank">Here</a> 
            is a link to the resource used to aid in the implementation of the timer.
        </p>
    </div>
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement Two</h2>
        <p>
           My second enhancement improves the user experience by including a <a href="apply.php#saveButton">'save' button</a> at the bottom of the apply form that saves the progress 
           of the user's data entered into the form, and fills that data out when the page is exited and re-visited. I have used session storage for this.
        </p>
    </div>
    <?php
        $page = "enhance2";
        include "footer.inc";
    ?>
</body>
</html>