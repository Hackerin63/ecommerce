function validateForm() {
    let email = document.forms["loginForm"]["email"].value;
    let password = document.forms["loginForm"]["password"].value;

    if (email == "" || password == "") {
        alert("All fields are required!");
        return false;
    }
}