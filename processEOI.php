<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Application Confirmation</title>
    <meta name="description" content="Application"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
    <link href="styles/style.css" type="text/css" rel="stylesheet" >
</head>
<body class="centuryfont gray-bg white-text text-center">
    <?php
        if (!isset($_POST["job-ref"])) {
            header ("location: apply.php");
            exit();
        }

        $manage_menu = "";
        include "menu.inc";
        echo "<br />";
        echo "<h1>Application Confirmation</h1>";


        require "settings.php";

        if (!$conn) {
            echo "<p>Database connection failure</p>";
        }


        function sanitise_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $errMsg = "";

        if (isset ($_POST["job-ref"])) {
            mysqli_escape_string($conn, $_POST["job-ref"]);
            $jobref = $_POST["job-ref"];
            $jobref = sanitise_input($jobref);
        }
        if (isset ($_POST["first-name"])) {
            mysqli_escape_string($conn, $_POST["first-name"]);
            $firstname = $_POST["first-name"];
            $firstname = sanitise_input($firstname);
        }
        if (isset ($_POST["last-name"])) {
            mysqli_escape_string($conn, $_POST["last-name"]);
            $lastname = $_POST["last-name"];
            $lastname = sanitise_input($lastname);
        }
        if (isset ($_POST["dob"])) {
            mysqli_escape_string($conn, $_POST["dob"]);
            $dob = $_POST["dob"];
            $dob = sanitise_input($dob);
        }
        if (isset ($_POST["gender"])) {
            mysqli_escape_string($conn, $_POST["gender"]);
            $gender = $_POST["gender"];
            $gender = sanitise_input($gender);
        }
        else {
            $gender = "";
        }
        if (isset ($_POST["street-address"])) {
            mysqli_escape_string($conn, $_POST["street-address"]);
            $address = $_POST["street-address"];
            $address = sanitise_input($address);
        }
        if (isset ($_POST["suburb"])) {
            mysqli_escape_string($conn, $_POST["suburb"]);
            $suburb = $_POST["suburb"];
            $suburb = sanitise_input($suburb);
        }
        if (isset ($_POST["state"])) {
            mysqli_escape_string($conn, $_POST["state"]);
            $state = $_POST["state"];
            $state = sanitise_input($state);
        }
        if (isset ($_POST["postcode"])) {
            mysqli_escape_string($conn, $_POST["postcode"]);
            $postcode = $_POST["postcode"];
            $postcode = sanitise_input($postcode);
        }
        else {
            $postcode = "";
        }
        if (isset ($_POST["email"])) {
            mysqli_escape_string($conn, $_POST["email"]);
            $email = $_POST["email"];
            $email = sanitise_input($email);
        }
        if (isset ($_POST["phone-number"])) {
            mysqli_escape_string($conn, $_POST["phone-number"]);
            $phone = $_POST["phone-number"];
            $phone = sanitise_input($phone);
        }
        if (isset ($_POST["skills"])) {
            $skills = $_POST["skills"];            
            $skills = implode(", ",$skills);
            $skills = sanitise_input($skills);
            mysqli_escape_string($conn, $skills);
        }
        else {
            $skills = "";
        }
        if (isset ($_POST["otherCheckbox"])) {
            $othercheck = true;
        }
        else {
            $othercheck = false;
        }
        if (isset ($_POST["other-skills"])) {
            mysqli_escape_string($conn, $_POST["other-skills"]);
            $otherskills = $_POST["other-skills"];
        }
        else {
            $otherskills = "";
        }



        // The Following is Data Validation

        if (!preg_match("/[A-Za-z0-9]{5}/", $jobref)) {
            $errMsg .= "<p>Job Reference Number must be valid (5 characters).</p>";
        }
        if (!preg_match("/[A-Za-z]{1,20}/", $firstname)) {
            $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
        }
        if (!preg_match("/[A-Za-z]{1,20}/", $lastname)) {
            $errMsg .= "<p>Only alpha letters allowed in your last name.</p>";
        }
        if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $dob)) {
            $errMsg .= "<p>Please enter date of birth in DD/MM/YYYY format.</p>";
        }
        else {
            $dob = explode("/", $dob);
            $dob = $dob[2] . "-" . $dob[1] . "-" . $dob[0];
            $dateDob = date_create($dob);
            $currDate = date_create();
            $age = date_diff($dateDob, $currDate);
            $age = date_interval_format($age, "%Y");

            if ($age < 15 || $age > 80)
                $err_msg .= "<p>Your age must be between 15 and 80.</p>";
        }
        if ($gender == ""){
            $errMsg .= "<p>Please select a gender.</p> ";
        }
        if (!preg_match("/^[A-Za-z0-9_ ]{1,40}$/", $address)) {
            $errMsg .= "<p>Address is 40 character maximum, and contain only letters and numbers.</p>";
        }
        if (!preg_match("/^[A-Za-z_ ]{1,40}$/", $suburb)) {
            $errMsg .= "<p>Suburb must be 40 character maximum.</p>";
        }
        if (!in_array($state, array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"))){
            $errMsg .= "<p>Please select a state.</p>";
        }
        if (!preg_match("/[0-9]{4}/", $postcode)) {
            $errMsg .= "<p>Postcode must be 4 digits.</p>";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errMsg .= "<p>Email must be correct format.</p>";
        }
        if (!preg_match("/[0-9](\d *){8,11}/", $phone)) {
            $errMsg .= "<p>Phone number must be between 8 to 12 digits.</p>";
        }
        if ($otherskills == "" && $othercheck == true) {
            $errMsg .= "<p>If other skills selected, skills text must not be empty.</p>";
        }
        
        $postDigits = str_split($postcode);    
        $postcode_match = true;
        switch($state) {
            case "VIC":
                if ($postDigits[0] !== "3"){
                    if ($postDigits[0] !== "8"){
                        $postcode_match = false;
                    }      
                }      
                break;           
            case "NSW":
                if ($postDigits[0] !== "1") {
                    if ($postDigits[0] !== "2"){
                        $postcode_match = false;
                    }
                }
                break;
            case "QLD":
                if ($postDigits[0] !== "4") {
                    if ($postDigits[0] !== "9"){
                        $postcode_match = false;
                    }
                }
                break;
            case "NT":
                if ($postDigits[0] !== "0") {
                    $postcode_match = false;
                }
                break;
            case "WA":
                if ($postDigits[0] !== "6") {
                    $postcode_match = false;
                }
                break;
            case "SA":
                if ($postDigits[0] !== "5") {
                    $postcode_match = false;
                }
                break;
            case "TAS":
                if ($postDigits[0] !== "7") {
                    $postcode_match = false;
                }
                break;   
            case "ACT":
                if ($postDigits[0] !== "0") {
                    $postcode_match = false;
                }
                break;    
        }
        if ($postcode != "" && $postcode_match == false) {
            $errMsg .= "<p>Postcode must match state.</p>";
        }


        if ($errMsg != "") {
            echo $errMsg;
        }
        else {
            $conn = mysqli_connect ($host,$user,$pwd,$sql_db);
    
            if ($conn) {
                $query = "CREATE TABLE IF NOT EXISTS EOI (
                            id INT AUTO_INCREMENT PRIMARY KEY, 
                            jobref VARCHAR(6),
                            firstname VARCHAR(25),
                            lastname VARCHAR(25),
                            dob DATE,
                            gender VARCHAR(10),
                            street_address VARCHAR(40),
                            suburb VARCHAR(40),
                            state VARCHAR(3),
                            postcode INT(4),
                            email VARCHAR(40),
                            phone INT(12),
                            skills VARCHAR(50),
                            otherskills VARCHAR(100),
                            app_date DATE,
                            status VARCHAR(20)
                            );";
                            
                $result = mysqli_query ($conn, $query);
                if ($result) {							

                    $query = "INSERT INTO EOI (jobref, firstname, lastname, dob, gender, street_address, suburb, state, postcode, email, phone, skills, otherskills, app_date, status) 
                            VALUES ('$jobref', '$firstname','$lastname','$dob', '$gender', '$address', '$suburb', '$state', '$postcode', '$email', '$phone', '" . $skills . "', '$otherskills', CURDATE(), 'new');";
        
                    $insert_result = mysqli_query ($conn, $query);

                    if ($insert_result) {			// check if insert successfully 
                        echo "<p>Thank you for your application. Your application number is: " . mysqli_insert_id($conn) . ".</p>";
                    } else {
                        echo "<p>Insert  unsuccessful.</p>";
                    }
                } else {
                    echo "<p>Create table operation unsuccessful.</p>";
                }
                mysqli_close ($conn);					// Close the database connect
            } else {
                echo "<p>Unable to connect to the database.</p>";
            }
        }
        echo "<p>Back to <a href='jobs.php'>Jobs Page</a></p>"
    ?>
</body>
</html>
