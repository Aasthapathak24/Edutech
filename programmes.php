<!-- browse_programme.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Our Programme - EduTech</title>
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
            padding: 25px 0;
            text-align: center;
            font-size: 30px;
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
        }

        .container h2 {
            color: #5c4033;
            text-align: center;
            margin-bottom: 30px;
        }

        .programme-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .programme-card {
            background-color: #f6f1e7;
            border: 1px solid #e0d5c1;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .programme-card:hover {
            transform: translateY(-5px);
        }

        .programme-card h3 {
            margin-bottom: 10px;
            color: #5c4033;
        }

        .programme-card p {
            color: #4b3621;
            font-size: 15px;
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
    EduTech - Browse Our Programme
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="#">Links</a>
    <a href="#">Contact</a>
</nav>

<div class="container">
    <h2>Programmes We Offer</h2>
    <div class="programme-grid">
        <div class="programme-card">
            <h3>Undergraduate Programmes</h3>
            <p>Bachelor of Arts, B.Sc, B.Com, BBA, BCA and more.</p>
        </div>
        <div class="programme-card">
            <h3>Postgraduate Programmes</h3>
            <p>Master of Arts, M.Sc, M.Com, MBA, MCA and other PG courses.</p>
        </div>
        <div class="programme-card">
            <h3>Diploma Courses</h3>
            <p>Professional diplomas in Education, IT, Management, and more.</p>
        </div>
        <div class="programme-card">
            <h3>Certificate Courses</h3>
            <p>Short-term certification in Digital Skills, Finance, and Languages.</p>
        </div>
        <div class="programme-card">
            <h3>Research Programmes</h3>
            <p>PhD, M.Phil, and other doctoral-level academic research opportunities.</p>
        </div>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>
