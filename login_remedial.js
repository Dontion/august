document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting
    
    // Get the values from the input fields
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Check if the username and password are valid
    if (username === "admin" && password === "password") {
      alert("Login successful!");
      // Add code here to redirect to a new page or perform other actions
    } else {
      alert("Invalid username or password. Please try again.");
    }
  });
  