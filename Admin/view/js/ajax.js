function submitCarForm(event) {
    event.preventDefault(); 

    
    document.getElementById("statusMessage").innerHTML = "Uploading... Please wait.";

    
    let formData = new FormData(event.target);

   
    let xhr = new XMLHttpRequest();

    
    xhr.open("POST", "../Control/piccccc.php", true);

    
    xhr.onreadystatechange = function () {
        
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                
                document.getElementById("statusMessage").innerHTML = xhr.responseText;

                
                document.getElementById("carForm").reset();
            } else {
                
                document.getElementById("statusMessage").innerHTML = "Error: Something went wrong. Please try again.";
            }
        }
    };

    
    xhr.send(formData);
}


document.getElementById("carForm").addEventListener("submit", submitCarForm);


function handleLoginFormSubmit(event) {
    event.preventDefault();  

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