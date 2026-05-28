<?php include 'db_connection.php'; ?>
<?php
include('db_connection.php'); // Connection file

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];
    $folder = "uploads/" . basename($photo);

    if (move_uploaded_file($temp, $folder)) {
        $sql = "INSERT INTO students_details (SNAME, DOB, email, photo_path) 
                VALUES ('$name', '$dob', '$email', '$folder')";

        if ($conn->query($sql) === TRUE) {
            $msg = "Student registered and photo uploaded successfully!";
        } else {
            $msg = "Database error: " . $conn->error;
        }
    } else {
        $msg = "Failed to upload photo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration with Photo</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f7f1e8;
            padding: 40px;
            color: #5c4033;
        }
        .form-box {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        input[type="submit"] {
            background: #8b5e3c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
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

<div class="form-box">
    <h2>Student Admission Form</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Upload Photo:</label>
        <input type="file" name="photo" accept="image/*" required>

        <input type="submit" value="Register">
    </form>
    <?php if (!empty($msg)) echo "<div class='message'>$msg</div>"; ?>
</div>

</body>
</html>
