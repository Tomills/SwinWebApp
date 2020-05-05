<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Apply"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abacus Software Apply</title> 
    <link href="styles/style.css" type="text/css" rel="stylesheet">
    <script src="scripts/enhancements.js"></script>
    <script src="scripts/apply.js"></script>
</head>

<body class="centuryfont menu" id="apply-menu">
    <div class="menu">
        <?php
            $manage_menu = "";
            include "menu.inc";
        ?>
        <br />
        <h1 class="white-text">Apply</h1>
    </div>

    <form id="applyForm" method="post" action="processEOI.php" novalidate="novalidate">

        <input type="text" name="job-ref" id="jobRef" required="required" placeholder="Job Reference Number" pattern=".{5}" />
        <input type="text" name="first-name" id="firstName" required="required" placeholder="First Name" pattern="[A-Za-z]{1,20}" />
        <input type="text" name="last-name" id="lastName" required="required" placeholder="Last Name" pattern="[A-Za-z]{1,20}" />
        <input type="text" name="dob" id="dob" required="required" placeholder="DOB (dd/mm/yyyy)" pattern="\d{2}\/\d{2}\/\d{4}" />  
        <p><span class="errMsg"></span></p> 
        <fieldset>
            <legend>Gender</legend>
            <p id="gender">
                <label class="radio"><input type="radio" name="gender" id="male" value="male"/>Male</label>
                <label class="radio"><input type="radio" name="gender" id="female" value="female"/>Female</label>
                <label class="radio"><input type="radio" name="gender" id="ratherNotSay" value="ratherNotSay"/>Rather Not Say</label>
            </p>
        </fieldset>
        <p>
            <input type="text" name="street-address" id="address" required="required" placeholder="Street Address" pattern=".{1,40}" />
            <input type="text" name="suburb" id="suburb" required="required" placeholder="Suburb/Town" pattern=".{1,40}" />
        </p>
        <p>
            <label id="state-title" for="state">State</label> 
            <br />
                <select name="state" id="state" required="required">
                    <option value="" selected="selected">Please Select</option>
                    <option name = "VIC" id="VIC" value="VIC">VIC</option>
                    <option name = "NSW" id="NSW" value="NSW">NSW</option>
                    <option name = "QLD" id="QLD" value="QLD">QLD</option>
                    <option name = "NT" id="NT" value="NT">NT</option>
                    <option name = "WA" id="WA" value="WA">WA</option>
                    <option name = "SA" id="SA" value="SA">SA</option>
                    <option name = "TAS" id="TAS" value="TAS">TAS</option>
                    <option name = "ACT" id="ACT" value="ACT">ACT</option>
                </select>
        </p>
        <p><span class="errMsg"></span></p>
        <input type="text" name="postcode" id="postCode" required="required" placeholder="Postcode" pattern="[0-9]{4}" />
        <input type="email" name="email" id="email" required="required" placeholder="Email Address" />
        <input type="text" name="phone-number" id="phoneNo" required="required" placeholder="Phone Number" pattern="^[0-9](\d *){8,11}$" />
        <fieldset id="skills">
            <legend>Skills</legend>
                <div >
                    <label class="checkbox"><input type="checkbox" name="skills[]" id="OOP" value="OOP" >Object Oriented Programming</label>
                    <label class="checkbox"><input type="checkbox" name="skills[]" id="debugging" value="debugging" >Testing and Debugging</label>
                    <label class="checkbox"><input type="checkbox" name="skills[]" id="problemSolving" value="problemSolving" >Problem Solving</label>
                    <label class="checkbox"><input type="checkbox" name="skills[]" id="teamwork" value="teamwork" >Teamwork</label>
                    <label class="checkbox"><input type="checkbox" name="skills[]" id="communication" value="communication" >Communication</label>
                    <label class="checkbox"><input type="checkbox" name="otherCheckbox" id="otherSkillsBox" value="otherSkillsBox">Other Skills ...</label>
                    <br />
                    <p><span class="errMsg"></span></p>
                    <textarea name="other-skills" id="otherText" rows="5" cols="30" value="other-skills" placeholder="Other Skills ..."></textarea>
                </div>
        </fieldset>
        <p id="timer">Application Page Time-Out:
            <br /><span id="minute">10</span> minutes <span id="second">0</span> seconds</p>

        <input type="submit" value="Apply"/>
        <input type="button" value="Save" id="saveButton"/>
        <input type="reset" value="Reset form"/>

    <?php
        $page = "apply";
        include "footer.inc";
    ?>
    </form>

</body>
</html>