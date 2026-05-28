<?php include('db_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Records</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f2ea;
            color: #333;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            margin-top: 30px;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #e6d3b3;
        }
        img {
            height: 50px;
        }
        h2 {
            text-align: center;
            color: #5c4033;
        }
    </style>
</head>
<body>

<h2>Student Records</h2>

<?php
$sql = "SELECT SID, SNAME, `Full name`, DOB, Gender, email, Phone, address, guardian_name, enrollment_date, status, photo_path, Mother_name FROM students_details";
$result = $conn->query($sql);

if ($result->num_rows > 0): ?>
    <table>
        <tr>
            <th>SID</th>
            <th>SNAME</th>
            <th>Full Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Guardian Name</th>
            <th>Mother Name</th>
            <th>Enrollment Date</th>
            <th>Status</th>
            <th>Photo</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["SID"] ?></td>
            <td><?= $row["SNAME"] ?></td>
            <td><?= $row["Full name"] ?></td>
            <td><?= $row["DOB"] ?></td>
            <td><?= $row["Gender"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["Phone"] ?></td>
            <td><?= $row["address"] ?></td>
            <td><?= $row["guardian_name"] ?></td>
            <td><?= $row["Mother_name"] ?></td>
            <td><?= $row["enrollment_date"] ?></td>
            <td><?= $row["status"] ?></td>
            <td>
                <?php if (!empty($row["photo_path"])): ?>
                    <img src="<?= $row["photo_path"] ?>" alt="Photo">
                <?php else: ?>
                    N/A
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No student records found.</p>
<?php endif;

$conn->close();
?>

</body>
</html>
