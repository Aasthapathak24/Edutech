<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid = $_POST['sid'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students_details WHERE SID='$sid' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $student = mysqli_fetch_assoc($result);

        // Store student data in session
        session_start();
        $_SESSION['student_name'] = $student['SNAME'];
        $_SESSION['sid'] = $student['SID'];
        $_SESSION['status'] = $student['status'];

        header("Location: result_confirmation.php");
        exit();
    } else {
        $error = "<span style='color:red;'>Invalid credentials.</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Term Results - Edutech</title>
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
            flex-direction: column;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 300px;
        }

        .login-box h2 {
            margin-bottom: 20px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"],
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login-box input[type="submit"] {
            background-color: #5c4033;
            color: white;
            cursor: pointer;
        }

        .login-box input[type="submit"]:hover {
            background-color: #8b5e3c;
        }

        .error-message {
            margin-top: 20px;
            font-size: 16px;
            color: red;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Enter Your Credentials</h2>
    <form method="post" action="term_results.php">
        <input type="text" name="sid" placeholder="Student ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Get Result">
    </form>

    <?php if (!empty($error)): ?>
        <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?>
</div>

</body>
</html>
