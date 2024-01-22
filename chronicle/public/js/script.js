// script.js
document.addEventListener("DOMContentLoaded", function() {
    var loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function(e) {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorMessage = "";

            if (username.trim() === "") {
                errorMessage += "Username is required.\n";
            }

            if (password.trim() === "") {
                errorMessage += "Password is required.\n";
            }

            if (errorMessage !== "") {
                e.preventDefault(); // Prevent form submission
                alert(errorMessage);
            }
        });
    }
});
