<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invigilator.css">
    <title>Hall Ticket Generator</title>
</head>

<body>

    <header>
        <h1>Hall Ticket Generator</h1>
    </header>
    <div class="container">
        <section id="login">
            <h2>Invigilator</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>
    <footer>
        <p>&copy; 2023 Hall Ticket Generator. All rights reserved.</p>
    </footer>
</body>

</html>