<?php
// Include the database connection
include('db_connection.php'); // Uses $conn from this file

// Initialize error message variable
$error_message = '';

// Fetch announcements from the database
$query = "SELECT * FROM announcement ORDER BY posted_on DESC";
$result = $conn->query($query);

// Check if there was an error in the query execution
if (!$result) {
    $error_message = "Error fetching announcements: " . $conn->error;
}

// Close the connection after use (best practice)
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements - Edutech</title>
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

        .announcement {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .announcement h3 {
            margin: 0;
            color: #5c4033;
        }

        .announcement p {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
            line-height: 1.6;
        }

        .announcement small {
            font-size: 14px;
            color: #999;
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

        footer {
            text-align: center;
            background-color: #5c4033;
            color: white;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    Announcements - Edutech
</header>

<div class="container">
    <h2>Latest Announcements</h2>

    <!-- Display error message if there is one -->
    <?php if ($error_message): ?>
        <div class="error-message"><?= $error_message ?></div>
    <?php endif; ?>

    <?php
    // Check if there are announcements and display them
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="announcement">';
            echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
            echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
            echo '<small>' . date("F j, Y, g:i a", strtotime($row['posted_on'])) . '</small>';
            echo '</div>';
        }
    } else {
        echo '<p>No announcements available at this time.</p>';
    }
    ?>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>
