// JavaScript Document Bobby Wilson



function initialize() {
    var myLatlng = new google.maps.LatLng(39.768360, -86.157892);
    var mapOptions = {
        scrollwheel: false,
        zoom: 16,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Bobby Wilson'
    });

}

google.maps.event.addDomListener(window, 'load', initialize);


$('#collapse1').collapse("hide");


function validateForm() {

    var requiredFields = ["first_name", "last_name", "email", "comment"];


    var errorFields = [];
    var errorMessages = [];

    for (i = 0; i < requiredFields.length; i++) {
        var formFieldValue = document.forms["contact_form"][requiredFields[i]].value;

        if (checkEmpty(formFieldValue)) {
            errorFields.push(requiredFields[i]);
        }
    }

    var first_name = document.forms["contact_form"]["first_name"].value;

    if (first_name < 3) {
        errorFields.push("first_name");
    }
 
    if (/[0-9]/.test(first_name)) {
        errorFields.push("first_name");
    }


    var last_name = document.forms["contact_form"]["last_name"].value;

    if (last_name < 3) {
        errorFields.push("last_name");
    }

    if (/[0-9]/.test(last_name)) {
        errorFields.push("last_name");
    }

    var email = document.forms["contact_form"]["email"].value;

    if (!/.+?@.+?\..+/.test(email)) {
        errorFields.push("email");
    }

    var comment = document.forms["contact_form"]["comment"].value.length;

    if (comment < 50) {
        errorFields.push("comment");
    }

    if (errorFields.length > 0) {
        for (i = 0; i < errorFields.length; i++) {

            var errorElement = document.getElementById(errorFields[i]);
            var errorElementFname = document.getElementById("firstname-hidden");
            var errorElementLname = document.getElementById("lastname-hidden");
            var errorElementEmail = document.getElementById("email-hidden");
            var errorElementComment = document.getElementById("comment-hidden");

            //var errorElementfNameLabel = document.getElementById("firstname-label");
            //var errorElementlNameLabel = document.getElementById("lastname-label");
            //var errorElementEmailLabel = document.getElementById("email-label");
            //var errorElementCommentLabel = document.getElementById("comment-label");

            //var errorElementfNameBullet = document.getElementById("fname-required");
            //var errorElementlNameBullet = document.getElementById("lname-required");
            //var errorElementEmailBullet = document.getElementById("email-required");
            //var errorElementCommentBullet = document.getElementById("comment-required");

            errorElement.className += " hasError";
            if (first_name < 3 || first_name == "" || first_name == null || /[0-9]/.test(first_name)) { errorElementFname.className += " hasError"; } else { errorElementFname.className += " noError"; }
            if (last_name < 3 || last_name == "" || last_name == null || /[0-9]/.test(last_name)) { errorElementLname.className += " hasError"; } else { errorElementFname.className += " noError"; }
            if (!/.+?@.+?\..+/.test(email) || email == "" || email == null) { errorElementEmail.className += " hasError"; } else { errorElementFname.className += " noError"; }
            if (comment < 50 || comment == "" || comment == null) { errorElementComment.className += " hasError"; } else { errorElementFname.className += " noError"; }

            //errorElementfNameLabel.className += " hasError";
            //errorElementlNameLabel.className += " hasError";
            //errorElementEmailLabel.className += " hasError";
            //errorElementCommentLabel.className += " hasError";

            //errorElementfNameBullet.className += " hasError";
            //errorElementlNameBullet.className += " hasError";
            //errorElementEmailBullet.className += " hasError";
            //errorElementCommentBullet.className += " hasError";
        }

        var allErrorMessages = " ";

        for (i = 0; i < errorMessages.length; i++) {

            allErrorMessages += errorMessages[i] + "</br>";
        }

        return false;

    } else {

        return true;
    }
}

function checkEmpty(fieldValue) {
    if (fieldValue == null || fieldValue == "" || fieldValue == "Choose a State") {

        return true;

    } else {

        return false;
    }
}


function upper(contact_form) {
    first_name.value = first_name.value.substr(0, 1).toUpperCase() + first_name.value.substr(1);
    last_name.value = last_name.value.substr(0, 1).toUpperCase() + last_name.value.substr(1);

    return false;
}


function firstNameError() {
    document.getElementById("first_name").className = "form-control";
    document.getElementById("firstname-hidden").className = "hidden";
    //document.getElementById("fname-required").className = "required";
    //document.getElementById("firstname-label").className = "control-label";
}


function lastNameError() {
    document.getElementById("last_name").className = "form-control";
    document.getElementById("lastname-hidden").className = "hidden";
    //document.getElementById("lname-required").className = "required";
    //document.getElementById("lastname-label").className = "control-label";
}

function emailError() {
    document.getElementById("email").className = "form-control";
    document.getElementById("email-hidden").className = "hidden";
    //document.getElementById("email-required").className = "required";
    //document.getElementById("email-label").className = "control-label";
}


function commentError() {
    document.getElementById("comment").className = "form-control";
    document.getElementById("comment-hidden").className = "hidden";
    //document.getElementById("comment-required").className = "required";
    //document.getElementById("comment-label").className = "control-label";
}











