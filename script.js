// JavaScript function to validate the form before submission
function validateForm() {
    // Get form elements
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var phone = document.getElementById("phone").value;
    var phone = document.getElementById("address").value;

    // Validate if any field is empty
    if (username == "" || email == "" || dob == "" || gender == ""|| phone == ""|| address == "") {
        alert("Please fill out all fields.");
        return false;  // Prevent form submission
    }

    // Validate phone number (example pattern: 10-digit phone number)
    var phonePattern = /^[0-9]{10}$/;
    if (!phone.match(phonePattern)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;  // Prevent form submission
    }

    // If all fields are valid, allow form submission
    return true;
}
