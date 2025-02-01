function submitCarForm(event) {
    event.preventDefault(); // Prevent the form from reloading the page

    // Display a loading message to the user while the request is in progress
    document.getElementById("statusMessage").innerHTML = "Uploading... Please wait.";

    // Create a new FormData object from the form
    let formData = new FormData(event.target);

    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set up the XMLHttpRequest (POST method to the piccccc.php script)
    xhr.open("POST", "../Control/piccccc.php", true);

    // Define what happens when the request's state changes
    xhr.onreadystatechange = function () {
        // When the request is complete and successful (status 200)
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // Update the status message with the server's response
                document.getElementById("statusMessage").innerHTML = xhr.responseText;

                // Optionally clear the form after successful submission
                document.getElementById("carForm").reset();
            } else {
                // If there was an error with the request, show an error message
                document.getElementById("statusMessage").innerHTML = "Error: Something went wrong. Please try again.";
            }
        }
    };

    // Send the form data to the server
    xhr.send(formData);
}

// Attach the event listener to the form and call the function
document.getElementById("carForm").addEventListener("submit", submitCarForm);


function handleLoginFormSubmit(event) {
    event.preventDefault();  // Prevent the form from reloading the page

    const formData = new FormData(event.target);
    const messageDiv = document.getElementById('message');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../Control/Login_Admin_control.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = xhr.responseText.trim();
            if (response === "success") {
                messageDiv.style.color = "green";
                messageDiv.textContent = "success";
                setTimeout(() => {
                    window.location.href = '../view/Admin_db.php';
                }, 1000);
            } else {
                messageDiv.style.color = "red";
                messageDiv.textContent = response;
            }
        } else {
            messageDiv.style.color = "red";
            messageDiv.textContent = "An error occurred. Please try again.";
        }
    };

    xhr.send(formData);
}

// Attach the event listener to the login form
document.getElementById('loginForm').addEventListener('submit', handleLoginFormSubmit);