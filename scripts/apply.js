/**
* Author: Tom Mills 102481568
* Target: "apply.html", "jobs.html"
* Created: 16/4/19
* Last Updated: 27/4/19
*/

"use strict";


function checkAge(birthDate) {
    const YEAR_IN_MILLISECS =   365 * 24 * 60 * 60 * 1000;

    var today = new Date();
    var dmy = birthDate.split("/");           // This line splits the birth date input into an array, using the "/" in the input.
    var dob = new Date(dmy[2], dmy[1], dmy[0], 0, 0, 0, 0);
    var age = (today.valueOf() - dob.valueOf())/YEAR_IN_MILLISECS;

    return age;
}

function checkPostCode() {
    var result = true;
    var postCode = document.getElementById("postCode").value;
    var state = document.getElementById("state").value;
    var postDigits = postCode.slice(0);     // This line slices the postCode into an array of each digit, starting at position 0 of the input.

    switch(state) {
        case "VIC":
            if (postDigits[0] !== "3"){
                if (postDigits[0] !== "8"){
                    result = false;
                }      
            }      
            break;           
        case "NSW":
            if (postDigits[0] !== "1") {
                if (postDigits[0] !== "2"){
                    result = false;
                }
            }
            break;
        case "QLD":
            if (postDigits[0] !== "4") {
                if (postDigits[0] !== "9"){
                    result = false;
                }
            }
            break;
        case "NT":
            if (postDigits[0] !== "0") {
                result = false;
            }
            break;
        case "WA":
            if (postDigits[0] !== "6") {
                result = false;
            }
            break;
        case "SA":
            if (postDigits[0] !== "5") {
                result = false;
            }
            break;
        case "TAS":
            if (postDigits[0] !== "7") {
                result = false;
            }
            break;   
        case "ACT":
            if (postDigits[0] !== "0") {
                result = false;
            }
            break;    
    }
    return result;
}

// Checks whether the skills checkbox is selected, and if so, makes sure the skills textbox is not empty.
function checkSkills() {
    var result = true;
    var otherCheckbox = document.getElementById("otherSkillsBox").checked;
    var otherText = document.getElementById("otherText").value;
    
    if (otherCheckbox == true) {
        if (otherText == ""){
            result = false;
        }
    }
    return result;
}

function fillJobRef() {
    if (document.getElementById("jobRef").value !== undefined){
        if (localStorage.jobRef1 !== undefined){
            document.getElementById("jobRef").value = localStorage.jobRef1;
            document.getElementById("jobRef").readOnly= true;
            localStorage.removeItem("jobRef1");
        }
        if (localStorage.jobRef2 !== undefined){
            document.getElementById("jobRef").value = localStorage.jobRef2;
            document.getElementById("jobRef").readOnly= true;
            localStorage.removeItem("jobRef2");
        }
    }
}

function storeJobRef1() {
    var jobRef1 = document.getElementById("jobRef1").innerHTML;
    localStorage.jobRef1 = jobRef1; 
}
function storeJobRef2() {
    var jobRef2 = document.getElementById("jobRef2").innerHTML;
    localStorage.jobRef2 = jobRef2; 
}
function applyFunction() {
    var applyButton1 = document.getElementById("apply1");
    var applyButton2 = document.getElementById("apply2");
    if (applyButton1 !== null){
        applyButton1.onclick = storeJobRef1;
    }
    if (applyButton2 !== null){
        applyButton2.onclick = storeJobRef2;
    }
    fillJobRef();
}


function storeDetails() {
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


    sessionStorage.firstName = firstName;
    sessionStorage.lastName = lastName;
    sessionStorage.dob = dob;
    sessionStorage.gender = gender;
    sessionStorage.address = address;
    sessionStorage.suburb = suburb;
    sessionStorage.state = state;
    sessionStorage.postCode = postCode;
    sessionStorage.email = email;
    sessionStorage.phoneNo = phoneNo;
    sessionStorage.skills = skills;
    sessionStorage.otherSkills = otherSkills;

}

function prefillForm() {
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

function validate() {
    var result = true;
    var birthDate = document.getElementById("dob").value;
    var errMsg = document.getElementsByClassName("errMsg");
 
    if (checkAge(birthDate) < 15){
        errMsg[0].textContent = "Must be over 15 years of age.";
        result = false;
    }
    if (checkAge(birthDate) > 80){
        errMsg[0].textContent = "Must be under 80 years of age.";
        result = false;
    }
    if (checkPostCode() == false) {
        errMsg[1].textContent = "Postcode must match state.";
        result = false;
    }
    if (checkSkills() == false) {
        errMsg[2].textContent = "If other skills selected, skills text must not be empty.";
        result = false;
    }
    if (result) {
        storeDetails();
    }
    return result;
}


function init() {
    applyFunction();
    prefillForm();
    var applyForm = document.getElementById("applyForm");
    applyForm.onsubmit = validate;
}

window.addEventListener('load', init);