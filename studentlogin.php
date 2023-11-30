 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Ticket Generator</title>
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
            background-color: white;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        input {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hall Ticket Generator</h1>
    </header>

    <div id="loginContainer">
        <form id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="button" onclick="login()">Login</button>
        </form>
    </div>

    <div id="requestContainer" style="display: none;">
        <form id="requestForm">
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" name="studentName" required>

            <label for="registrationNumber">Registration Number:</label>
            <input type="text" id="registrationNumber" name="registrationNumber" required>

            <button type="button" onclick="submitRequest()">Submit Request</button>
        </form>
    </div>

    <script>
        function login() {
            // Perform login logic here
            // For simplicity, just show the request form for any input
            document.getElementById("loginContainer").style.display = "none";
            document.getElementById("requestContainer").style.display = "block";
        }

        function submitRequest() {
            // Perform hall ticket request submission logic here
            // For now, just display a message
            alert("Request submitted successfully");
        }
    </script>

</body>
</html>

