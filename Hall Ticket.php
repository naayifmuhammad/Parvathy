<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Ticket Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 8px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hall Ticket Request</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Fee Status</th>
                    <th>Reference Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="requestTableBody">
                <!-- Request data will be added dynamically here -->
            </tbody>
        </table>
    </div>

    <script>
        // Sample data (replace this with actual data from your database)
        const requests = [
           
            // Add more requests as needed
        ];

        // Function to generate table rows dynamically
        function generateTableRows() {
            const tableBody = document.getElementById('requestTableBody');

            requests.forEach(request => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${request.id}</td>
                    <td>${request.name}</td>
                    <td>${request.year}</td>
                    <td>${request.department}</td>
                    <td>${request.semester}</td>
                    <td>${request.feeStatus}</td>
                    <td>${request.referenceNumber}</td>
                    <td>${request.status}</td>
                    <td><button onclick="generateQRCode(${request.id})">Generate QR</button></td>
                `;

                tableBody.appendChild(row);
            });
        }

        // Function to generate QR code (replace this with your actual QR code generation logic)
        function generateQRCode(requestId) {
            alert(`Generate QR Code for request with ID ${requestId}`);
        }

        // Generate table rows when the page loads
        window.onload = generateTableRows;
    </script>
</body>
</html>
