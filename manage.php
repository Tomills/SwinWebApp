<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>PHP - MySQL Manage Page</title>
    <meta name="description" content="Manage"/>
    <meta name="keywords" content="abacus, software development"/>
    <meta name="author" content="Tom Mills"/>
	<link rel="stylesheet" href="styles/style.css" />
</head>
<body class="text-center centuryfont">
    <?php
        // This statement stops the page from being accessed via direct URL
        if (!isset($_SERVER["HTTP_REFERER"])){
            header ("location: phpenhancements.php");
            exit();
        }
        $manage_menu = "manage";
        include_once "menu.inc";
    ?>
    <h3> Job Application Table</h3>
    <?php

        if (!isset ($_POST["order"])) {
            $order = "id";
        }
        else {
            $order = $_POST["order"];
        }
        if (!isset($_POST["firstname"])&&!isset($_POST["lastname"]))
            $query = "SELECT * FROM EOI ORDER BY $order";	
        else {
            $jobref=trim($_POST["jobref"]);
            $firstname=trim($_POST["firstname"]);
            $lastname=trim($_POST["lastname"]);
            $query="SELECT * FROM EOI WHERE jobref LIKE '%$jobref%' and firstname LIKE '%$firstname%' and lastname LIKE '%$lastname%' ORDER BY $order";
        }

       

        
        require_once "settings.php";	// Load MySQL log in credentials
        $conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
        if ($conn) { // check is database is available for use
    
            $result = mysqli_query ($conn, $query);
            
            if ($result) {								// check if query was successfully executed
                
                $record = mysqli_fetch_assoc ($result);
                if ($record) {							// check if any record exists
                    
                    echo "<table class='text-center bl-on-whi center'>";
                    echo "<tr>
                            <th>ID</th>
                            <th>Job Ref</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Skills</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>";
                    while ($record) {
                        echo "<tr><td>{$record['id']}</td>";
                        echo "<td>{$record['jobref']}</td>";
                        echo "<td>{$record['firstname']}</td>";
                        echo "<td>{$record['lastname']}</td>";
                        echo "<td>{$record['gender']}</td>";
                        echo "<td>{$record['dob']}</td>";
                        echo "<td>{$record['skills']}</td>";
                        echo "<td>{$record['app_date']}</td>";
                        echo "<td>{$record['status']}</td>";
                        echo "<td><a href='delete.php?id=" . $record['id']
                                    . "'>Delete</a></td></tr>";
                        $record = mysqli_fetch_assoc($result);
                    }
                    echo "</table>";
                    mysqli_free_result ($result);	// Free up resources
                } else {
                    echo "<p>No records retrieved.</p>";
                }
            } else {
                echo "<p>Job application table doesn't exist or select operation unsuccessful.</p>";
            }
            mysqli_close ($conn);					// Close the database connect
        } else {
            echo "<p>Unable to connect to the database.</p>";
        }

    ?>	
    <form action="manage.php" method="post" id="sort-by" class="manage">
        <label for="order">Sort By:</label>
        <select id="order" name="order">
            <option id = "id" value="id">ID</option>
            <option id = "jobref" value="jobref">Job Reference Number</option>
            <option id = "firstname" value="firstname">First Name</option>
            <option id = "lastname" value="lastname">Last Name</option>
            <option id = "gender" value="gender">Gender</option>
            <option id = "dob" value="dob">Date of Birth</option>
            <option id = "skills" value="skills">Skills</option>
            <option id = "app_date" value="app_date">Application Date</option>
            <option id = "status" value="status">Status</option>
        </select>  
        <button type="submit" value="sort">Sort</button>
    </form>
    <br />



    <h3>Search Application</h3>
    <form action="manage.php" method="post" class="manage">
        <label for="jref">Job Reference Number:</label>
            <p><input type="text" id="jref" name="jobref" /></p>     
        <label for="fname">First Name:</label>
            <p><input type="text" id="fname" name="firstname" /></p>    
        <label for="lname">Last Name:</label>
            <p><input type="text" id="lname" name="lastname" /></p>     
        <input type="submit" class="bl-on-whi" value="Search" />
    </form>

    <h3>Delete based on job reference number:</h3>
    <form action="deleteJobRef.php" method="post" class="manage">
        <label for="jobdel">Job Ref:</label>
            <p><input type="text" id="jobdel" name="jobref" /></p>    
        <input type="submit" class="bl-on-whi" value="Delete" />
    </form>

    <h3>Update Status</h3>
    <form action="status.php" method="post" class="manage">
        <label for="id_no">ID:</label>
            <p><input type="text" id="id_no" name="id" /></p>    
        <label for="changestatus">Change Status To:</label>
            <p><input type="text" id="changestatus" name="status" /></p>      
        <input type="submit" class="bl-on-whi" value="Update" />
    </form>
</body>
</html>