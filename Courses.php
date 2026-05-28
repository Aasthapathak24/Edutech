<?php
// Include the database connection file
include('db_connection.php'); // Uses $conn from this file

// Initialize error message variable
$error_message = '';

// Fetch course details from the database
$query = "SELECT course_name, course_id, course_duration, course_amount FROM courses"; // Replace 'courses' with your actual table name
$result = $conn->query($query);

// Check if there was an error in the query execution
if (!$result) {
    $error_message = "Error fetching courses: " . $conn->error;
}

// Close the connection after use (best practice)
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Edutech</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5c4033;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .container {
            margin: 50px auto;
            width: 80%;
            max-width: 900px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .course {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .course h3 {
            margin: 0;
            color: #5c4033;
        }

        .course p {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
            line-height: 1.6;
        }

        .course a {
            color: #5c4033;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

        .course a:hover {
            color: #8b5e3c;
        }

        footer {
            text-align: center;
            background-color: #5c4033;
            color: white;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header>
    Courses - Edutech
</header>

<div class="container">
    <h2>Available Courses</h2>

    <!-- Display error message if there is one -->
    <?php if ($error_message): ?>
        <div class="error-message"><?= $error_message ?></div>
    <?php endif; ?>

    <?php
    // Display the courses from the database
    if ($result && $result->num_rows > 0) {
        while ($course = $result->fetch_assoc()) {
            echo '<div class="course">';
            echo '<h3>' . htmlspecialchars($course['course_name']) . '</h3>';
            echo '<p><strong>Course ID:</strong> ' . htmlspecialchars($course['course_id']) . '</p>';
            echo '<p><strong>Duration:</strong> ' . htmlspecialchars($course['course_duration']) . '</p>';
            echo '<p><strong>Amount:</strong> ' . htmlspecialchars($course['course_amount']) . '</p>';
            echo '<p><a href="#">Learn More</a></p>';
            echo '</div>';
        }
    } else {
        echo '<p>No courses found in the database.</p>';
    }
    ?>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>
