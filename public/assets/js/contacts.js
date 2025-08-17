/* *************************************************
*  Name: Andres Contreras Alvarez
*  Final Project
*  Purpose: create a full-featured MVC website by extending Assignments 8/9,
*  adding a contact page, adding MVC + AJAX, and adding a 3rd party API.
************************************************* */

"use strict";

function clearForm() {
    // this function replaces the text in text boxes with empty strings
    $('#name-id, #email-id, #email2-id, #subject-id, #message-id').val('');
    
    // This will clean the error messages
    $('#msg').html('<br>');
}

function validEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

// validate all inputs
function validate() {
    // start with an empty error message
    let errorMessage = "<br/>";

    //get the strings from the text boxes and trim them
    let name = $('#name-id').val().trim();
    let from = $('#email-id').val().trim();
    let from2 = $('#email2-id').val().trim();
    let subject = $('#subject-id').val().trim();
    let message = $('#message-id').val().trim();

    //put the trimmed versions back into the form for good user experience (UX)
    $('#name-id').val(name);
    $('#email-id').val(from);
    $('#email2-id').val(from2);
    $('#subject-id').val(subject);
    $('#message-id').val(message);

    //test the strings from the form and store the error messages
    if (name === "") {
        errorMessage += "- Name cannot be empty.<br>";
    }

    if (from === "") {
        errorMessage += "- The return email field cannot be empty.<br>";
    }

    if (from2 === "") {
        errorMessage += "- Please re-enter the return email to confirm.<br>";
    }

    if (from !== from2) {
        errorMessage += "- The return email fields must match.<br>";
    }

    if (subject === "") {
        errorMessage += "- The subject field cannot be empty.<br>";
    }

    if (message === "") {
        errorMessage += "- The message field cannot be empty.<br>";
    }

    if (!validEmail(from)) {
        errorMessage += "- Enter a valid return email address.<br>";
    }
    if(errorMessage === "<br/>") {
        // no errors, so send the data to the server
        sendData();
    } 
    else {
        // report errors if there are any
        $("#msg").attr("class","error");
        $("#msg").html(errorMessage);
    }
}

function sendData() {

    //bring the message area in to report errors or "Sent!"
    let msgArea = $("#msg");
    let formData = new FormData($("#email-form")[0]);
    $.ajax({
        url: '/contactProcess',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (val) {
            if (val === 'okay') {
                clearForm();
                msgArea.attr("class", "success");
                msgArea.html("Your message was sent");
            } else {
                msgArea.attr("class", "error-feedback");
                msgArea.html("Processing Error");
            } 
        },
        error: function () {
            msgArea.attr("class", "error-feedback");
            msgArea.html("Sorry, your email was not sent");
            console.error()
        }
    });

    return;
}

// create an event listener and handler for the clear and submit buttons
$(document).ready(function () {
    
    // event handler for the clear button
    $("#clear-button").click(function () {
        clearForm();
    });

    // event handler for the send button
    $("#submit-button").click(function () {
        // only need to call validate. validate will call sendData
        validate();
    });

});