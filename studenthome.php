<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Homepage</title>
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

        nav {
            background-color: #444;
            color: white;
            padding: 1em;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            background-color: white;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            margin-bottom: 0.5em;
        }

        input {
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

        p {
            margin-top: 1em;
        }

        a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>Student Homepage</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#hallTicketRequest">Hall Ticket Request</a></li>
            <li><a href="#downloadHallTicket">Download Hall Ticket</a></li>
        </ul>
    </nav>

    <section id="hallTicketRequest">
        <h2>Hall Ticket Request</h2>
        <form id="requestForm">
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" name="studentName" required>

            <label for="registrationNumber">Registration Number:</label>
            <input type="text" id="registrationNumber" name="registrationNumber" required>

            <button type="button" onclick="submitRequest()">Submit Request</button>
        </form>
    </section>

    <section id="downloadHallTicket">
        <h2>Download Hall Ticket</h2>
        <p>Your hall ticket will be available for download once it's generated.</p>
        <!-- Add logic to display a download link once the hall ticket is ready -->
    </section>

    <script>
        function submitRequest() {
            // Perform hall ticket request submission logic here
            // For now, just display a message
            alert("Request submitted successfully");
        }
    </script>

</body>
</html>

        }

      
