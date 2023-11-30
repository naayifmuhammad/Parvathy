<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Ticket Generator</title>
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

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hall Ticket Generator</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Reg Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="studentTableBody">
                <!-- Student data will be added dynamically here -->
            </tbody>
        </table>
    </div>

    <script>
        // Sample data (replace this with actual data from your database)
        const students = [
            
            // Add more students as needed
        ];

        // Function to generate table rows dynamically
        function generateTableRows() {
            const tableBody = document.getElementById('studentTableBody');

            students.forEach(student => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${student.id}</td>
                    <td>${student.rollNo}</td>
                    <td>${student.name}</td>
                    <td>${student.email}</td>
                    <td>${student.phone}</td>
                    <td>${student.address}</td>
                    <td>${student.status}</td>
                    <td>${student.regTime}</td>
                    <td><button onclick="generateQRCode(${student.id})">Generate QR</button></td>
                `;

                tableBody.appendChild(row);
            });
        }

        // Function to generate QR code (replace this with your actual QR code generation logic)
        function generateQRCode(studentId) {
            alert(`Generate QR Code for student with ID ${studentId}`);
        }

        // Generate table rows when the page loads
        window.onload = generateTableRows;
    </script>
</body>
</html>
