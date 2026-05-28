<?php
session_start();
if (!isset($_SESSION['student_details'])) {
    header("Location: registration.php");
    exit();
}
$details = $_SESSION['student_details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <style>
        body {
            background-color: #f5e6ca;
            font-family: 'Segoe UI', sans-serif;
            padding: 30px;
        }

        .success-box {
            background-color: #fff8f0;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: green;
        }

        p {
            margin: 10px 0;
            color: #5c4033;
        }
    </style>
</head>
<body>

<div class="success-box">
    <h2>Registration Successful!</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($details['sname']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($details['email']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($details['gender']); ?></p>
    <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($details['dob']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($details['phone']); ?></p>
</div>

</body>
</html>
