<?php
// login.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your login verification here
    // Replace this with your actual login logic
    if ($username === "luffy" && $password === "onepiece") {
        // Successful login, redirect to home page
        header("Location: tes.html");
        exit();
    } else {
        // Failed login, redirect back to login page
        header("Location: login.html"); // Replace with the correct login page name
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>NAKAMA.ID</title>
  <!-- CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background: rgb(220,214,247);
background: linear-gradient(165deg, rgba(222, 219, 224, 0.945) 0%, rgba(224, 184, 6, 0.993) 60%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #ffffff;
      border-radius: 5px;
      padding: 60px;
      max-width: 400px;
      width: 100%;
      box-shadow: 15px 15px;
      
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }

    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-group button {
      width: 100%;
      padding: 12px;
      background-color: #790000;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: center;
      align-items: center;
    }
1
    .form-group button:hover {
      background-color: #121212;
    }
    img{
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <div class="container">
    <center>
    <img src="../assets/img/logo_tpg.png" alt="Avatar" style="width:200px">
  </center>
    <h2>VHS Teratai Putih II</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Log In</button>
      </div>
    </form>
<!-- Javascript -->
<script>
//buat ngambil id dari html
document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // username dan password, pesan gagal dan berhasil
  if (username === "luffy" && password === "onepiece") {
    alert("Login Berhasil!"); 
    window.location.href = "home.html"; //ke page lain
  } else {
    alert("Login gagal. Silahkan cek kembali username dan password Anda.");
    window.location.reload(); //buat balik ke login lagi
  }
});
</script>
</body>
</html> 