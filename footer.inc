<?php
    switch($page){
        case "index":
            $class = "";
            $backgr = "https://www.pexels.com/photo/green-and-black-computer-motherboard-825258/";
            $site = "Pexels.com";
            break;
        case "jobs":
            $class = "";
            $backgr = "https://unsplash.com/photos/4Hg8LH9Hoxc";
            $site = "Unplash.com";
            break;
        case "apply":
            $class = "footer_bg";
            $backgr = "https://www.pexels.com/photo/blank-business-composition-computer-373076/";
            $site = "Pexels.com";
            break;
        case "about":
            $class = "";
            $backgr = "https://www.pexels.com/photo/green-iphone-5c-near-macbook-163143/";
            $site = "Pexels.com";
            break;
        case "enhance":
            $class = "";
            $backgr = "https://www.pexels.com/photo/photo-of-person-typing-on-computer-keyboard-735911/";
            $site = "Pexels.com";
            break;
        case "enhance2":
            $class = "";
            $backgr = "https://www.pexels.com/photo/close-up-photography-wireless-keyboard-1034647/";
            $site = "Pexels.com";
    }
    echo "<footer class='$class spaced-letters centuryfont'>
        <p>Copyright of <a id='my-link' href='about.php'>Thomas Mills</a></p>
        <p>This Website is a University Project</p>
        <p>Background Image taken from <a href='$backgr' target='_blank'>$site</a></p>
        <p><a href='phpenhancements.php'>Admin Login</a></p>
    </footer>"
?>

    