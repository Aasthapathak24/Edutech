<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Study Material - Edutech</title>
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

        .container {
            max-width: 800px;
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

        .material-link {
            display: block;
            font-size: 18px;
            font-weight: bold;
            color: #5c4033;
            text-decoration: underline;
            margin: 15px 0;
            cursor: pointer;
            transition: color 0.3s;
        }

        .material-link:hover {
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
    Study Material - Edutech
</header>

<div class="container">
    <h2>Select Your Programme</h2>
    <div>
        <span class="material-link">BCA</span>
        <span class="material-link">MCA</span>
        <span class="material-link">B.Tech</span>
        <span class="material-link">M.Tech</span>
        <span class="material-link">BBA</span>
        <span class="material-link">MBA</span>
        <span class="material-link">Diploma</span>
        <span class="material-link">Certificate Courses</span>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Edutech - All Rights Reserved.
</footer>

</body>
</html>
