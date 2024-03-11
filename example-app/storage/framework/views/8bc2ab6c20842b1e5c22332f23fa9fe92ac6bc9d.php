<!DOCTYPE html>
<html>

<head>
    <title> To teacher "Game" </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            animation: rainbow 3s infinite alternate;
        }

        @keyframes rainbow {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 16px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #fce0e0;
            padding: 10px;
            background-color: #d5ffe0; /* เพิ่มสีพื้นหลังของตาราง */
            color: #333; /* เพิ่มสีข้อความในตาราง */
        }

        th {
            background-color: #d5ffe0;
        }
    </style>
</head>

<body>
    <h1>ตารางแม่สูตรคูณ</h1>
    <button onclick="alert('Hello World Who am I?')">Click Me !</button>
    <br>
    <br>
    <input type="text" id="my_number" placeholder="Enter a number">
    <input type="text" id="multiplier" placeholder="Enter the multiplier">
    <button onclick="submitCustomNumber()">Generate Table</button>
    <br>

    <br>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function submitCustomNumber() {
            let customNumber = document.getElementById("my_number").value;
            let multiplier = document.getElementById("multiplier").value;

            if (customNumber === "" || isNaN(customNumber)) {
                alert("Please enter a valid number.");
                return;
            }

            if (multiplier === "" || isNaN(multiplier)) {
                alert("Please enter a valid multiplier.");
                return;
            }

            myfunction(parseInt(customNumber), parseInt(multiplier));
        }

        function myfunction(number, multiplier) {
            let my_number = number;
            let tableHTML = '<table><thead><tr><th>Multiplier</th><th>Result</th></tr></thead><tbody>';

            for (let i = 1; i <= multiplier; i++) {
                tableHTML += `<tr><td>${my_number} &times; ${i}</td><td>${my_number * i}</td></tr>`;
            }

            tableHTML += '</tbody></table>';

            $('#my_tbody').html(tableHTML);
        }
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\SE_camp\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>