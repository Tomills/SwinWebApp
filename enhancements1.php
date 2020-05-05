<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Enhancements1"/>
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
    <h1 class="spaced-letters enhancements-h">Enhancements Part One</h1>
    <br />
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement One</h2>
        <p>
            Attached to <a href="jobs.php#apply-box">this link</a> is my first enhancement which improves the user experience with
            the use of the border-image property and a custom created keyframes animation that activates on hover of the 'Apply' button.
            Below is a list of resources I used to learn the techniques required in order to create this animation.
        </p>
        <ul>
            <li><a href="https://css-tricks.com/gradient-borders-in-css/" target="_blank">Gradient Borders in CSS</a></li>
            <li><a href="https://css-tricks.com/snippets/css/keyframe-animation-syntax/" target="_blank">Keyframe Animation Syntax</a></li>
        </ul>
    </div>
    <div class="spaced-letters enhancements-desc">
        <h2 class="spaced-letters">Enhancement Two</h2>
        <p>
            Attached to <a href="index.php#menu-icon">this link</a> is part of my second enhancement which will only be viewable 
            when the browser is displayed on a mobile phone/tablet viewport. This enhancement improves the user experience through implementing 
            responsive design in order to present the webpages specifically for mobile phone/tablet sized displays. The responsive design applies
            to all pages and I have included a menu icon to display the navigation menu in a mobile-friendly approach.
        </p>
        <p><a href="https://blog.teamtreehouse.com/create-an-absolute-basic-mobile-css-responsive-navigation-menu" target="_blank">Here</a> 
            is a link to the resource used to aid in the implementation of the menu icon / hidden navigation menu.
        </p>
    </div>
    <?php
        $page = "enhance";
        include "footer.inc";
    ?>
</body>
</html>