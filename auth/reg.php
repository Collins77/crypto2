<?php

include '../connect.php';

if(isset($_POST['submit'])){
    $fullName = mysqli_real_escape_string($conn, $_POST['fname']);
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $confirmPassword = $_POST['confirm']; // You might want to validate this further
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null; // Handle gender
    $role = 'user'; // Default role is 'user'
    $defaultBalance = 0;

    // Additional validation (you may want to add more checks)
    if (!password_verify($confirmPassword, $password)) {
        echo "Error: Passwords do not match.";
        exit;
    }

    $sql = "INSERT INTO users (full_name, username, email, phone, password, gender, role, balance) 
            VALUES ('$fullName', '$username', '$email', '$phoneNumber', '$password', '$gender', '$role', '$defaultBalance')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();


?>