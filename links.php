<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Important Academic Links - Edutech</title>
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

        .links-list {
            list-style: none;
            padding: 0;
        }

        .links-list li {
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    Important Academic Links - Edutech
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="links.php">Links</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Important Academic Links</h2>

    <ul class="links-list">
        <li><a href="#" onclick="return false;">National Education Portal</a></li>
        <li><a href="#" onclick="return false;">University Admission Portal</a></li>
        <li><a href="#" onclick="return false;">Online Library Resources</a></li>
        <li><a href="#" onclick="return false;">Student Counseling Services</a></li>
        <li><a href="#" onclick="return false;">Course Registration Portal</a></li>
        <li><a href="#" onclick="return false;">Exam Schedule</a></li>
        <li><a href="#" onclick="return false;">Fee Payment Portal</a></li>
    </ul>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>