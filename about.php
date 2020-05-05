<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="About"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abacus Software About</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<body class="centuryfont">
    <div class="menu" id="about-menu">
        <?php
            $manage_menu = "";
            include "menu.inc"
        ?>
        <br />
        <h1 class=" white-text">About Me</h1>
    </div>
    <figure>
        <img src="images/DSCF2212-1.jpg" alt="A Photo of Me" id="my-photo"/>
    </figure>
    <dl>
        <dt>Name</dt>
            <dd>Tom Mills<br /></dd>
        <dt>Student ID</dt>
            <dd>102481568<br /></dd>
        <dt>Tutor</dt>
            <dd>Dr Eureka Priyardarshani<br /></dd>
        <dt>Course</dt>
            <dd><a href="https://www.swinburne.edu.au/study/course/bachelor-of-computer-science/" target="_blank">Bachelor of Computer Science</a><br /></dd>
        <dt>Email</dt>
            <dd><a href="mailto:102481568@student.swin.edu.au">102481568@student.swin.edu.au</a></dd>
    </dl>
    <div id="table">
        <p>Timetable</p>
        <table>
            <thead>
                <tr>
                    <td> </td>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Thu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">9:30</th>
                    <td> </td>
                    <td> </td>
                    <td rowspan="2" class="cell-border">Lecture TNE10006</td>
                </tr>
                <tr>
                    <th scope="row">10:30</th>
                    <td> </td>
                    <td rowspan="2" class="cell-border">Lab COS10011</td>
                </tr>
                <tr>
                    <th scope="row">11:30</th>
                    <td rowspan="3" class="cell-border">Lab TNE10006</td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">12:30</th>
                    <td> </td>
                    <td rowspan="2" class="cell-border">Lecture CO10009</td>
                </tr>
                <tr>
                    <th scope="row">13:30</th>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">14:30</th>
                    <td rowspan="2" class="cell-border">Lecture COS10011</td>
                    <td rowspan="2" class="cell-border">Lab COS10009</td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">15:30</th>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
        $page = "about";
        include "footer.inc";
    ?>
</body>
</html>