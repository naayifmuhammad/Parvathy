<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Ticket Generator - Add Subjects and Exam Schedule</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input, select {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
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
        <h1>Hall Ticket Generator - Add Subjects and Exam Schedule</h1>
        <form id="subjectScheduleForm">
            <label for="subjectName">Subject Name:</label>
            <input type="text" id="subjectName" name="subjectName" required>

            <label for="subjectCode">Subject Code:</label>
            <input type="text" id="subjectCode" name="subjectCode" required>

            <label for="subjectTime">Time of Exam:</label>
            <input type="time" id="subjectTime" name="subjectTime" required>

            <label for="examDate">Date of Examination:</label>
            <input type="date" id="examDate" name="examDate" required>

            <button type="button" onclick="addSubjectAndSchedule()">Add Subject and Schedule</button>
        </form>

        <h2>All Subjects and Exam Schedule</h2>
        <table id="subjectScheduleTable">
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Time of Exam</th>
                    <th>Date of Examination</th>
                </tr>
            </thead>
            <tbody id="subjectScheduleTableBody">
                <!-- Subject and schedule data will be added dynamically here -->
            </tbody>
        </table>
    </div>

    <script>
        function addSubjectAndSchedule() {
            const subjectScheduleForm = document.getElementById('subjectScheduleForm');
            const subjectName = document.getElementById('subjectName').value;
            const subjectCode = document.getElementById('subjectCode').value;
            const subjectTime = document.getElementById('subjectTime').value;
            const examDate = document.getElementById('examDate').value;

            // Do something with the subject and schedule data, e.g., send it to the server

            // Display the added subject and schedule in the table
            displaySubjectAndSchedule(subjectName, subjectCode, subjectTime, examDate);
            
            // You may want to clear the form fields after adding the subject and schedule
            subjectScheduleForm.reset();
        }

        function displaySubjectAndSchedule(name, code, time, date) {
            const tableBody = document.getElementById('subjectScheduleTableBody');
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${name}</td>
                <td>${code}</td>
                <td>${time}</td>
                <td>${date}</td>
            `;
            tableBody.appendChild(row);
        }
    </script>
</body>
</html>
