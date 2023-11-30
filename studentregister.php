<?php
include("connection.php");

// Start a session to store success or error messages
session_start();

if (isset($_POST['submit'])) {
    $rollNumber = $_POST['rollNumber'];
    $photo = $_FILES['photo']['name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Check if email already exists
    $sql = "SELECT * FROM studreg WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $_SESSION['error'] = "Email already exists!";
    } else {
        // Insert data into the database
        $insert = "INSERT INTO studreg (rollNumber, photo, name, email, phoneNumber, address, password) VALUES ('$rollNumber', '$photo', '$name', '$email', '$phoneNumber', '$address', '$password')";

        if (mysqli_query($conn, $insert)) {
            // Move uploaded file to a specified directory (assuming 'uploads' directory here)
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photo);

            $_SESSION['success'] = "Registration successful!";
            // Redirect to student.php only if the insertion was successful
            header("location: student.php");
            exit();
        } else {
            // Display an error message if the insertion fails
            $_SESSION['error'] = "Error inserting data!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentregister.css">
    <title>Hall Ticket Generator - Student Registration</title>
</head>

<body>

    <header>
        <h1>Hall Ticket Generator</h1>
    </header>

    <section id="registration" class="container">
        <h2>Student Registration</h2>

        <?php
        // Display success or error messages
        if (isset($_SESSION['success'])) {
            echo '<div class="success-message">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']); // Clear the session variable
        } elseif (isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Clear the session variable
        }
        ?>

        <form action="studentregister.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="rollNumber">Roll Number:</label>
                <input type="text" id="rollNumber" name="rollNumber" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" name="submit">Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Hall Ticket Generator. All rights reserved.</p>
    </footer>

</body>

</html>