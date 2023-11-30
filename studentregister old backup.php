<?php
include("connection.php");

if(isset($_POST['submit'])){
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

    if($num > 0){
        echo '<script>alert("Email already exists!")</script>';
    } else {
        // Insert data into the database
        $insert = "INSERT INTO studreg (rollNumber, photo, name, email, phoneNumber, address, password) VALUES ('$rollNumber', '$photo', '$name', '$email', '$phoneNumber', '$address', '$password')";
        
        if(mysqli_query($conn, $insert)){
            // Move uploaded file to a specified directory (assuming 'uploads' directory here)
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $photo);
            
            // Redirect to student.php only if the insertion was successful
            header("location: student.php");
            exit();
        } else {
            // Display an error message if the insertion fails
            echo '<script>alert("Error inserting data!")</script>';
        }
    }
}
?>

<!-- The rest of your HTML remains unchanged -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hall Ticket Generator</title>
</head>
<body>

    <header>
        <h1>Hall Ticket Generator</h1>
    </header>
    <center>
    <section id="registration">
        <h2>Student Registration</h2>
        <form action="studenthome.php" method="post">
            <label for="rollNumber">Roll Number:</label>
            <input type="text" id="rollNumber" name="rollNumber" required>
		<br>
<br>
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
		
<br>

<br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

<br>

<br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

<br>

<br>
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

<br>

<br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

<br>

<br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

<br>

<br>
            <button type="submit" >Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Hall Ticket Generator. All rights reserved.</p>
    </footer>
</center>
</body>
</html>
