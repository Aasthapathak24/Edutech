<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sid = $_POST['sid'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM students_details WHERE SID = ? AND password = ?");
    $stmt->bind_param("ss", $sid, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login Successful";
        // You can redirect or show student data here
    } else {
        echo "Invalid Student ID or Password";
    }

    $stmt->close();
    $conn->close();
}
?>
