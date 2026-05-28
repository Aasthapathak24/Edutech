<?php
// Include the database connection
include('db_connection.php'); // Make sure this path is correct

// Initialize error message variable
$error_message = '';

// Fetch faculty details from the database
$query = "SELECT faculty_id, Full_name, designation, email, department FROM faculty"; // Adjust query based on your table structure
$result = $conn->query($query);

// Check if there was an error in the query execution
if (!$result) {
    $error_message = "Error fetching faculty data: " . $conn->error;
}

// Close the connection after use (best practice)
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Edutech</title>
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

        nav {
            background-color: #f5e6c4;
            display: flex;
            justify-content: center;
            padding: 15px 0;
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
            margin: 50px auto;
            width: 80%;
            max-width: 900px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .faculty {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .faculty h3 {
            margin: 0;
            color: #5c4033;
        }

        .faculty p {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
            line-height: 1.6;
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
            font-weight: bold;
            padding: 15px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header>
    Contact - Edutech
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="links.php">Links</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Faculty Contact Information</h2>

    <!-- Display error message if there is one -->
    <?php if ($error_message): ?>
        <div class="error-message"><?= $error_message ?></div>
    <?php endif; ?>

    <?php
    // Display faculty details
    if ($result && $result->num_rows > 0) {
        // Loop through each row and display faculty details
        while ($faculty = $result->fetch_assoc()) {
            echo '<div class="faculty">';
            echo '<h3>' . htmlspecialchars($faculty['Full_name']) . '</h3>';
            echo '<p><strong>Designation:</strong> ' . htmlspecialchars($faculty['designation']) . '</p>';
            echo '<p><strong>Email:</strong> <a href="mailto:' . htmlspecialchars($faculty['email']) . '">' . htmlspecialchars($faculty['email']) . '</a></p>';
            echo '<p><strong>Department:</strong> ' . htmlspecialchars($faculty['department']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No faculty information available at this time.</p>';
    }
    ?>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>
