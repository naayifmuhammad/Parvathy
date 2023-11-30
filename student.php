<?php

include("connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM studentlogin WHERE email = '$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num > 0){
        echo'<script>alert("email already exists!")</script>';
    }

else{
    $insert="INSERT INTO signup(email,password)VALUES('$email','$password')";
    mysqli_query($conn,$insert);
    header("location:studentregister.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hall Ticket Generator - Student login</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 2em auto;
         
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        input {
            width: 50s % ;
            padding : 0.5em;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

       

        button:hover {
            background-color: #555;
        }
    </style>
</head>

</head>
<body>

    <header>
        <h1>Hall Ticket Generator</h1>
    </header>
<center>
    <section id="login">
        <h2>Student Login</h2>
        <form action="student_login.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
<br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
<br>
       <button type="Submit">Submit</button>
<br>
<br>
<li><a href="studenthome.php">studenthome.php</a></li>

        </form>
    </section>

    
       

    <footer>
        <p>&copy; 2023 Hall Ticket Generator. All rights reserved.</p>
    </footer>
</center>
</body>
</html>
