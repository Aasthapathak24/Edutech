<?php
session_start();
include("db_connection.php");

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION["faculty_id"])) {
    $faculty_id = $_POST["faculty_id"];
    $full_name = $_POST["full_name"];

    $stmt = $conn->prepare("SELECT * FROM faculty WHERE faculty_id = ? AND Full_name = ?");
    $stmt->bind_param("ss", $faculty_id, $full_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $_SESSION["faculty_id"] = $faculty_id;
        $_SESSION["full_name"] = $full_name;
    } else {
        $login_error = "Invalid Faculty ID or Name.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Services - EduTech</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #5c4033;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(92, 64, 51, 0.9);
            color: white;
            padding: 30px 0;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
        }

        nav {
            background-color: rgba(245, 230, 202, 0.9);
            display: flex;
            justify-content: center;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            text-decoration: none;
            color: #5c4033;
            margin: 0 20px;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #8b5e3c;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(245, 230, 202, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #5c4033;
        }

        form {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #5c4033;
            color: white;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #8b5e3c;
        }

        .error {
            color: red;
            text-align: center;
        }

        ul.service-list {
            list-style-type: none;
            padding: 0;
        }

        ul.service-list li {
            background-color: #f6f1e7;
            padding: 15px 20px;
            margin: 10px 0;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            color: #5c4033;
            transition: background-color 0.3s;
        }

        ul.service-list li:hover {
            background-color: #e6d7be;
        }

        .logout-btn {
            text-align: center;
            margin-top: 30px;
        }

        .logout-btn a {
            padding: 10px 20px;
            background-color: #5c4033;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .logout-btn a:hover {
            background-color: #8b5e3c;
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
    EduTech
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="links.php">Links</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Employee Services</h2>

    <?php if (!isset($_SESSION["faculty_id"])): ?>
        <form method="POST">
            <input type="text" name="faculty_id" placeholder="Faculty ID" required>
            <input type="text" name="full_name" placeholder="Full Name" required>
            <br>
            <input type="submit" value="Login">
        </form>
        <?php if ($login_error): ?>
            <div class="error"><?php echo $login_error; ?></div>
        <?php endif; ?>
    <?php else: ?>
        <p>Welcome, <strong><?php echo $_SESSION["full_name"]; ?></strong> (ID: <?php echo $_SESSION["faculty_id"]; ?>)</p>
        <ul class="service-list">
            <li>Update Student Marks</li>
            <li>Schedule Classes</li>
            <li>Upload Study Materials</li>
            <li>Take Attendance</li>
            <li>Submit Internal Assessment</li>
            <li>View Payroll</li>
            <li>Apply for Leave</li>
            <li>Check Timetable</li>
        </ul>

        <div class="logout-btn">
            <a href="?logout=true">Logout</a>
        </div>
    <?php endif; ?>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>
