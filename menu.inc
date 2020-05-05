<?php
    if ($manage_menu != ""){
        $manage_menu = "gray-bg centuryfont white-text";
    }
    else {
        $manage_menu = "";
    }

    echo "<div class='$manage_menu text-center'>
        <p>
        <a href='index.php' >
            <img src='images/abacuslogowhite.png' alt='Abacus Logo' id='logo'>
        </a>
        </p>
        <br />
        <nav class='spaced-letters $manage_menu'>
        <a>
            <img src='images/menu-white.png' alt='Menu' id='menu-icon'>
        </a>
        <ul>
            <li><a href='jobs.php'>Positions</a></li>
            <li><a href='apply.php'>Apply</a></li>
            <li><a href='about.php'>About</a></li>
            <li><a href='enhancements.php'>Enhancements</a></li>
        </ul>
        </nav>
        <br />
    </div>";

?>