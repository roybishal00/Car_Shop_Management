
function validateForm() {
    
    const name = document.getElementById("Name").value.trim();
    if (!name) {
        alert("First Name is required.");
        return false;
    }
    if (!/^[a-zA-Z\s]+$/.test(name)) {
        alert("First Name should only contain alphabets and spaces.");
        return false;
    }

   
    const email = document.getElementById("email").value.trim();
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email) {
        alert("Email address is required.");
        return false;
    }
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    
    const phone = document.getElementById("phone").value.trim();
    const phoneRegex = /^[0-9]{10,15}$/;
    if (!phone) {
        alert("Phone number is required.");
        return false;
    }
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid phone number (10-15 digits).");
        return false;
    }

    
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();
    if (!password) {
        alert("Password is required.");
        return false;
    }
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

  
    const gender = document.getElementById("gender").value;
    if (!gender) {
        alert("Please select a gender.");
        return false;
    }

    
    return true;
}
