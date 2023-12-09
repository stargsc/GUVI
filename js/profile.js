function updateProfile() {
    // Get form data
    var age = $("#age").val();
    var dob = $("#dob").val();
    var contact = $("#contact").val();

    // AJAX request to update-profile.php
    $.ajax({
        type: "POST",
        url: "php/profile.php",
        data: { age: age, dob: dob, contact: contact },
        success: function(response) {
            // Handle the response from the server
            console.log(response);
            // You might want to display a success message or update the UI
        },
        error: function(error) {
            console.error("Error updating profile:", error.responseText);
            // Handle error, display a message, or redirect to an error page
        }
    });
}
