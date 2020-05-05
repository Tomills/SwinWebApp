/**
* Author: Tom Mills 102481568
* Target: "apply.html"
* Created: 16/4/19
* Last Updated: 28/4/19
*/

"use strict";


// Enhancement 1
function timer() {
    var minute = 9;
    var second = 59;
    setInterval (function startTimer() {
        document.getElementById("minute").innerHTML = minute;
        document.getElementById("second").innerHTML = second;
        second--;
        if (second == -1 && minute == 0) {      /* '-1' lets the timer visually show 0 before changing */
            alert ("Your session has timed out - Returning to home page");
            window.location = "index.php";
            minute = 10;
        }
        if (second == -1) {
            minute--;
            second = 59;
        }
       
    }, 1000);
}

// Enhancement 2
function saveDetails() {
    var jobRef = document.getElementById("jobRef").value;
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var dob = document.getElementById("dob").value;
    
    var gender = document.getElementById("gender").getElementsByTagName("input").value;
        if (male.checked) gender = "Male";
        if (female.checked) gender = "Female";
        if (ratherNotSay.checked) gender = "Rather Not Say";

    var address = document.getElementById("address").value;
    var suburb = document.getElementById("suburb").value;

    var state = document.getElementById("state").getElementsByTagName("option").value;
        if (VIC.selected) state = "VIC";
        if (NSW.selected) state = "NSW";
        if (QLD.selected) state = "QLD";
        if (NT.selected) state = "NT";
        if (WA.selected) state = "WA";
        if (SA.selected) state = "SA";
        if (TAS.selected) state = "TAS";
        if (ACT.selected) state = "ACT";

    var postCode = document.getElementById("postCode").value;
    var email = document.getElementById("email").value;
    var phoneNo = document.getElementById("phoneNo").value;

    var skills = document.getElementById("skills").getElementsByTagName("input").value;
        if (OOP.checked) skills = "OOP ";
        if (debugging.checked) skills += "debugging ";
        if (problemSolving.checked) skills += "problemSolving ";
        if (teamwork.checked) skills += "teamwork ";
        if (communication.checked) skills += "communication ";
        if (otherSkillsBox.checked) skills += "other ";

    var otherSkills = document.getElementById("otherText").value;

    /** These if statements check whether the string taken from the form is empty, and if the sessionStorage is already defined
    *   it removes the value in order to replace it with the new value. **/ 

    if (jobRef != "") {
        if (sessionStorage.jobRef != undefined) {
            sessionStorage.removeItem("jobRef");
        }
        if (sessionStorage.jobRef == undefined){
            sessionStorage.jobRef = jobRef;
        }
    }    
    if (firstName != "") {
        if (sessionStorage.firstName != undefined) {
            sessionStorage.removeItem("firstName");
        }
        if (sessionStorage.firstName == undefined){
            sessionStorage.firstName = firstName;
        }
    } 
    if (lastName != "") {
        if (sessionStorage.lastName != undefined) {
            sessionStorage.removeItem("lastName");
        }
        if (sessionStorage.lastName == undefined){
            sessionStorage.lastName = lastName;
        }
    }   
    if (dob != "") {
        if (sessionStorage.dob != undefined) {
            sessionStorage.removeItem("dob");
        }
        if (sessionStorage.dob == undefined){
            sessionStorage.dob = dob;
        }
    }    
    if (gender != "") {
        if (sessionStorage.gender != undefined) {
            sessionStorage.removeItem("gender");
        }
        if (sessionStorage.gender == undefined){
            sessionStorage.gender = gender;
        }
    }    
    if (address != "") {
        if (sessionStorage.address != undefined) {
            sessionStorage.removeItem("address");
        }
        if (sessionStorage.address == undefined){
            sessionStorage.address = address;
        }
    }       
    if (suburb != "") {
        if (sessionStorage.suburb != undefined) {
            sessionStorage.removeItem("suburb");
        }
        if (sessionStorage.suburb == undefined){
            sessionStorage.suburb = suburb;
        }
    }      
    if (state != "") {
        if (sessionStorage.state != undefined) {
            sessionStorage.removeItem("state");
        }
        if (sessionStorage.state == undefined){
            sessionStorage.state = state;
        }
    }      
    if (postCode != "") {
        if (sessionStorage.postCode != undefined) {
            sessionStorage.removeItem("postCode");
        }
        if (sessionStorage.postCode == undefined){
            sessionStorage.postCode = postCode;
        }
    }        
    if (email != "") {
        if (sessionStorage.email != undefined) {
            sessionStorage.removeItem("email");
        }
        if (sessionStorage.email == undefined){
            sessionStorage.email = email;
        }
    }     
    if (phoneNo != "") {
        if (sessionStorage.phoneNo != undefined) {
            sessionStorage.removeItem("phoneNo");
        }
        if (sessionStorage.phoneNo == undefined){
            sessionStorage.phoneNo = phoneNo;
        }
    }    
    if (skills != "") {
        if (sessionStorage.skills != undefined) {
            sessionStorage.removeItem("skills");
        }
        if (sessionStorage.skills == undefined){
            sessionStorage.skills = skills;
        }
    }    
    if (otherSkills != "") {
        if (sessionStorage.otherSkills != undefined) {
            sessionStorage.removeItem("otherSkills");
        }
        if (sessionStorage.otherSkills == undefined){
            sessionStorage.otherSkills = otherSkills;
        }
    }    
    alert("Successfuly saved details");
}

function fillSavedData() {

    // These if statements check whether each sessionStorage value is defined, and then prints the value into the corresponding form element.
    
    if (sessionStorage.jobRef != undefined) {
        document.getElementById("jobRef").value = sessionStorage.jobRef;
    }
    if (sessionStorage.firstName != undefined) {
        document.getElementById("firstName").value = sessionStorage.firstName;
    }
    if (sessionStorage.lastName != undefined) {
        document.getElementById("lastName").value = sessionStorage.lastName;
    }
    if (sessionStorage.dob != undefined) {
        document.getElementById("dob").value = sessionStorage.dob;
    }
    if (sessionStorage.gender != undefined) {
        switch(sessionStorage.gender) {
            case "Male":
                document.getElementById("male").checked = true;
                break;
            case "Female":
                document.getElementById("female").checked = true;
                break;
            case "Rather Not Say":
                document.getElementById("ratherNotSay").checked = true;
                break;
        }
    }
    if (sessionStorage.address != undefined) {
        document.getElementById("address").value = sessionStorage.address;
    }
    if (sessionStorage.suburb != undefined) {
        document.getElementById("suburb").value = sessionStorage.suburb;
    }
    if (sessionStorage.state != undefined) {
        switch(sessionStorage.state) {
            case "VIC":
                document.getElementById("VIC").selected = true;
                break;   
            case "NSW":
                document.getElementById("NSW").selected = true;
                break;
            case "QLD":
                document.getElementById("QLD").selected = true;
                break;
            case "NT":
                document.getElementById("NT").selected = true;
                break;
            case "WA":
                document.getElementById("WA").selected = true;
                break;
            case "SA":
                document.getElementById("SA").selected = true;
                break;
            case "TAS":
                document.getElementById("TAS").selected = true;
                break;
            case "ACT":
                document.getElementById("ACT").selected = true;
        }
    }
    if (sessionStorage.postCode != undefined) {
        document.getElementById("postCode").value = sessionStorage.postCode;
    }
    if (sessionStorage.email != undefined) {
        document.getElementById("email").value = sessionStorage.email;
    }
    if (sessionStorage.phoneNo != undefined) {
        document.getElementById("phoneNo").value = sessionStorage.phoneNo;
    }
    if (sessionStorage.skills != undefined) {
        if (sessionStorage.skills.includes("OOP")){
            document.getElementById("OOP").checked = true;
        }
        if (sessionStorage.skills.includes("debugging")){
            document.getElementById("debugging").checked = true;
        }
        if (sessionStorage.skills.includes("problemSolving")){
            document.getElementById("problemSolving").checked = true;
        }
        if (sessionStorage.skills.includes("teamwork")){
            document.getElementById("teamwork").checked = true;
        }
        if (sessionStorage.skills.includes("communication")){
            document.getElementById("communication").checked = true;
        }
        if (sessionStorage.skills.includes("other")){
            document.getElementById("otherSkillsBox").checked = true;
        }
    }
    if (sessionStorage.otherSkills != undefined) {
        if (document.getElementById("otherText").value != undefined) {
            document.getElementById("otherText").value = sessionStorage.otherSkills;
        }
    }
}

function init() {
    fillSavedData();
    timer();
    saveButton = document.getElementById("saveButton");
    saveButton.onclick = saveDetails;
}

/**  I have used window.addEventListener instead of window.onload 
 * as window.onload does not work as needed when used with mutliple JavaScript files */

window.addEventListener('load', init);