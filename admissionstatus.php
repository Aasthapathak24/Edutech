<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admission Status - Edutech</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #5c4033;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background-color: rgba(245, 230, 202, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #5c4033;
        }

        input[type="text"] {
            padding: 10px;
            width: 90%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            background-color: #5c4033;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: #8b5e3c;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Check Admission Status</h2>
    <form method="post" action="">
        <input type="text" name="student_id" placeholder="Enter Student ID" required><br>
        <button type="submit" name="check_status">Check</button>
    </form>

    <?php
    if (isset($_POST['check_status'])) {
        include 'db_connection.php'; // adjust if your path is different

        $student_id = $_POST['student_id'];

        $stmt = $conn->prepare("SELECT status FROM enrollment WHERE SID = ?");
        $stmt->bind_param("s", $student_id);
        $stmt->execute();
        $stmt->bind_result($status);

        if ($stmt->fetch()) {
            echo "<div class='result'>Admission Status: <strong>$status</strong></div>";
        } else {
            echo "<div class='result'>No record found for Student ID: <strong>$student_id</strong></div>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</div>

</body>
</html>

