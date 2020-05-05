<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Jobs"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abacus Software Jobs</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
    <script src="scripts/apply.js"></script>
</head>
<body class="centuryfont">
    <div class="menu" id="jobs-menu">
        <?php
            $manage_menu = "";
            include "menu.inc"
        ?>
        <br />
        <h1 class="white-text">Our Current Positions</h1>
    </div>

    <section>
        <h2 class="job-title">
            Telecommunications Specialist 
            <br /> Ref. <span id="jobRef1">5TF44</span>
        </h2>
        <aside class="centuryfont" id="apply-box">
            <a href="apply.php" class="apply" id="apply1">Apply</a>
        </aside>
        <p class="job-desc">
            We have a vacant position for a telecommunications specialist to work in a small team environment 
            to deliver telecommunication services using provides tools and applications. The successful applicant 
            will report to the senior telecommunications specialist. We offer an inviting, high energy workplace 
            with opportunity for career advancement.
        </p>
        <p class="job-desc">Responsibilities Include: </p>
        <ul class="job-desc text-indent no-list-style">
            <li>Work with internal customers and vendors to provision telecommunication services using provided
                 tools and/or applications.</li>
            <li>Build rapport with other support teams to ensure that customer’s requests are handled with 
                the customer in mind.</li>
            <li>Maintains documentation to ensure retention of Intellectual Property (IP) including technical diagrams.</li>
            <li>Assist with the billing process for invoices provided by vendors associated with telecommunication services.</li>
        </ul>
        <p class="job-desc">Experience Required:</p>
        <p class="job-desc">Essential:<p>
            <ul class="job-desc text-indent no-list-style">
                <li>At least two years’ experience running small projects i.e. ability to breakdown task, estimate task effort, 
                prioritise tasks, plan and schedule own tasks in the context of planned work where a team contributes to the end result
                </li>
            </ul>
        <p class="job-desc">Preferred:</p>
            <ol class="job-desc">
                <li>Previous experience troubleshooting carrier faults and provisioning issues</li>
                <li>Excellent problem solving and analytical skills</li>
                <li>Relevant degree/industry qualification</li>
                <li>At least two years’ experience within a large enterprise organisation</li>
            </ol>
        <p class="job-desc">The Salary for this position will be within $65,000 - $75,000 depending on level of experience.
        <br />The information for this job advertisement was sourced from <a href="https://www.adzuna.com.au/details/1064141149?v=27225A705EE651268E8BF1A0FAF2D8683A886B01&se=ynLT-bNTSaanhIr8Fb8hcw" >
        adzuna.</a></p>
    </section>

    <section>
        <h2 class="job-title">
            Software Application Developer 
            <br /> Ref. <span id="jobRef2">1M339</span>
        </h2>

        <aside class="centuryfont">
            <a href="apply.php" class="apply" id="apply2">Apply</a>
        </aside>
        <p class="job-desc text-indent">
            We are looking at expanding our application development team and therefore are searching 
            for an experienced software application developer to join us. We offer an inviting, 
            high energy workplace with opportunity for career advancement.
        </p>
        <p class="job-desc">Responsibilities Include: </p>
        <ul class="job-desc text-indent no-list-style">
            <li>Working as a part of a team to bring our application ideas to life.</li>
                <li>Collaborate and communicate with design teams to ensure the best possible outcome is reached.</li>
                <li>Provide on-going support to our products (troubleshooting, live implementations).</li>
                <li>Experiment with the development of intelligent agents/machine learning.</li>
                <li>Update and developing technical documentation.</li>
                <li>Compliance with internal structure and guidelines.</li>
        </ul>
        <p class="job-desc">Experience Required:</p>
        <p class="job-desc">Essential:<p>
            <ul class="job-desc text-indent no-list-style">
                <li>At least 2 years experience using Python to develop complex applications.</li>
                <li>At least 5 years commercial experience as a software developer.</li>
                <li>Relevant degree/industry qualification</li>
            </ul>
        <p class="job-desc">Preferred:</p>
            <ol class="job-desc">
                <li>Relevant degree/industry qualification.</li>
                <li>Excellent communication and organisational skills.</li>
                <li>Experience with C# and Java.</li>
                <li>Web development experience using .Net Framework, HTML, CSS, Javascript.</li>
                <li>Able to create reports using Microsoft SSRS and Tableau</li>
                <li>Experience with threading, performance tuning and offline storage</li>
                <li>Previous large scale company software development experience</li>
            </ol>
        <p class="job-desc">The Salary for this position will be within $70,000 - $80,000, depending on level of experience.</p>
    </section>
    <?php
        $page = "jobs";
        include "footer.inc";
    ?>
</body>
</html>