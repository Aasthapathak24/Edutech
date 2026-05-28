<?php
include('db_connection.php');  // Database connection

// Process login form submission
if (isset($_POST['submit'])) {
    $sid = $_POST['sid'];
    $password = $_POST['password'];

    // Query to check SID and password with attendance records
    $stmt = $conn->prepare("
        SELECT a.course_id, a.monthlyattendance, a.attendancepercentage
        FROM attendance a
        INNER JOIN students_details s ON a.SID = s.SID
        WHERE a.SID = ? AND s.password = ?
    ");
    
    $stmt->bind_param("ss", $sid, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    $attendance_data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $attendance_data[] = $row;
        }
    } else {
        $error_message = "No records found or incorrect SID/password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance - Edutech</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #5c4033;
        }

        header {
            background-color: rgba(92, 64, 51, 0.9);
            color: white;
            padding: 30px 0;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 30px;
            background-color: rgba(245, 230, 202, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .container h2 {
            color: #5c4033;
            margin-bottom: 20px;
        }

        .form-section {
            margin-top: 30px;
            text-align: center;
        }

        .form-section input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-section button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5c4033;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-section button:hover {
            background-color: #8b5e3c;
        }

        .attendance-result {
            margin-top: 40px;
        }

        .attendance-record {
            background-color: rgba(92, 64, 51, 0.9);
            color: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
        }

        footer {
            margin-top: 50px;
            background-color: rgba(245, 230, 202, 0.9);
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #5c4033;
        }
    </style>
</head>
<body>

<header>
    Check Your Attendance - Edutech
</header>

<div class="container">
    <h2>Enter Your Student ID and Password</h2>
    
    <div class="form-section">
        <form action="" method="POST">
            <label for="sid">Student ID (SID):</label>
            <input type="text" name="sid" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit" name="submit">Check Attendance</button>
        </form>
    </div>

    <?php if (isset($attendance_data) && !empty($attendance_data)): ?>
        <div class="attendance-result">
            <h3>Your Attendance Details</h3>
            <?php foreach ($attendance_data as $attendance): ?>
                <div class="attendance-record">
                    <p><strong>Course ID:</strong> <?php echo $attendance['course_id']; ?></p>
                    <p><strong>Monthly Attendance:</strong> <?php echo $attendance['monthlyattendance']; ?></p>
                    <p><strong>Attendance Percentage:</strong> <?php echo $attendance['attendancepercentage']; ?>%</p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>
