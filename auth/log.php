<?php
session_start();
include '../connect.php'; // Include the database connection script

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, email, password, role FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Entered Password: $password<br>";
        echo "Stored Password: {$row['password']}<br>";

        if (password_verify($password, $row['password'])) {
            echo "Password verification successful!<br>";
            // Password is correct, set session variables
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['logged_in'] = true;

            // Redirect based on user role
            if ($row['role'] == 'admin') {
                header("Location: ../admin");
                exit();
            } elseif ($row['role'] == 'user') {
                header("Location: ../index.php");
                exit();
            }
        } else {
            echo "Error: Incorrect password.";
        }
    } else {
        echo "Error: User not found.";
    }
}

$conn->close();
?>
