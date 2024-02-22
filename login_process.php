<?php
session_start(); // Start the session to manage user sessions

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the POST data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform some basic validation
    if (empty($username) || empty($password)) {
        // If username or password is empty, display an error message
        echo "Username and password are required.";
    } else {
        // Validate the username and password (you should perform more thorough validation and use secure password hashing)
        // For demonstration purposes, let's assume the username is "admin" and password is "password"
        if ($username === "admin" && $password === "password") {
            // Set session variables to mark the user as logged in
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            // Redirect the user to a success page
            header("Location: success.php");
            exit(); // Stop further execution
        } else {
            // Invalid credentials, display an error message
            echo "Invalid username or password.";
        }
    }
} else {
    // If the request method is not POST, display an error message
    echo "Invalid request.";
}
?>
