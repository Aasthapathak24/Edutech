<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $status = "Registered";

    $sql = "INSERT INTO students_details (SNAME, email, Gender, DOB, Phone, status)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssss", $sname, $email, $gender, $dob, $phone, $status);
        if ($stmt->execute()) {
            $_SESSION['student_details'] = [
                'sname' => $sname,
                'email' => $email,
                'gender' => $gender,
                'dob' => $dob,
                'phone' => $phone
            ];
            header("Location: registration_success.php");
            exit();
        } else {
            echo "Registration failed.";
        }
        $stmt->close();
    } else {
        echo "Database error.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        body {
            background: #f5e6ca;
            font-family: 'Segoe UI', sans-serif;
            padding: 30px;
        }

        .form-container {
            background: #fff8f0;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #5c4033;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dcd2c2;
            border-radius: 6px;
        }

        .btn {
            background-color: #5c4033;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #7a573e;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Student Registration</h2>
    <form method="POST">
        <input type="text" name="sname" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Other">Other</option>
        </select>
        <input type="date" name="dob" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <button class="btn" type="submit">Register</button>
    </form>

    <?php if (!empty($message)): ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>
</div>

</body>
</html>
