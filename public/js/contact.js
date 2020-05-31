function clearForm(e) {
    
    // Find form fields
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let reason = document.getElementById("reason");
    let message = document.getElementById("message");
    
    // Clear values in form
    name.value = "";
    email.value = "";
    //(SELECT) reason
    message.value = "";
    
    // Stop form from submitting
    e.preventDefault();
}
