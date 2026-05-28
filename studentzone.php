<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Zone - Edutech</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #5c4033;
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
            align-items: center;
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
            margin: 60px auto;
            padding: 30px;
            background-color: rgba(245, 230, 202, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .container h2 {
            color: #5c4033;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 18px;
            line-height: 1.6;
            color: #4b3621;
        }

        .links-section {
            margin-top: 50px;
        }

        .link {
            display: block;
            font-size: 18px;
            font-weight: bold;
            color: #5c4033;
            text-decoration: underline;
            margin: 15px 0;
            cursor: pointer;
            transition: color 0.3s;
        }

        .link:hover {
            color: #8b5e3c;
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
    Student Zone - Edutech
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="links.php">Links</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Welcome to the Student Zone!</h2>
    <p>Access your academic and institutional resources below:</p>

    <div class="links-section">
        <h3>Quick Access Links</h3>
        <div>
            <a class="link" href="term_results.php">Term End Results</a>
            <a class="link" href="assignments.php">Assignments</a>
            <a class="link" href="study_materials.php">Study Materials</a>
            <a class="link" href="academic_support.php">Academic Support</a>
            <a class="link" href="attendance.php">Attendance</a>
            <a class="link" href="admissionstatus.php">Admission Status</a>
            <a class="link" href="registration.php">Registration</a>
            <a class="link" href="exam_form.php">Exam Form</a>
            <a class="link" href="question_papers.php">Previous Year Question Papers</a>
            <a class="link" href="competitions.php">Competitions/Debate</a>
        </div>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>


