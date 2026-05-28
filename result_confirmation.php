<?php
session_start();

if (!isset($_SESSION['sid'])) {
    header("Location: term_results.php");
    exit();
}

// Include the database connection
include('db_connection.php'); // uses $conn

// Initialize variables
$student_id = $_SESSION['sid'];
$student_name = '';
$status = 'Not Available';

// Fetch student result from the database
$query = "SELECT SNAME, result_status FROM result WHERE SID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $student_name = $row['SNAME'];
    $status = $row['result_status'];

    // Store in session if needed elsewhere
    $_SESSION['student_name'] = $student_name;
    $_SESSION['status'] = $status;
} else {
    $student_name = "Unknown";
    $status = "No result found";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #5c4033;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .result-box {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .result-box h2 {
            margin-bottom: 10px;
        }

        .result-box p {
            font-size: 18px;
        }

        .status {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h2>Result Confirmation</h2>
    <p>Student Name: <?php echo htmlspecialchars($student_name); ?></p>
    <p>Student ID: <?php echo htmlspecialchars($student_id); ?></p>
    <p>Result Status: <span class="status"><?php echo htmlspecialchars($status); ?></span></p>
</div>

</body>
</html>

