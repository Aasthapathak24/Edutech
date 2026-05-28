<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EduTech - Home</title>
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
            background-color: rgba(245, 230, 202, 0.9); /* Beige */
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

        .services-section {
            margin-top: 50px;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        a.card {
    background-color: #f6f1e7;
    border: 1px solid #ddd0b4;
    border-radius: 10px;
    padding: 20px;
    flex: 1 1 30%;
    min-width: 260px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    text-decoration: none;
    color: inherit;
    display: block;
    text-align: left;
}

a.card:hover {
    transform: translateY(-5px);
    cursor: pointer;
}


        .card h3 {
            margin-bottom: 10px;
            color: #5c4033;
        }

        .card p {
            color: #4b3621;
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
    EduTech
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="links.php">Links</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Welcome to EduTech!</h2>
    <p>
        EduTech is your complete solution for managing institutes online.<br>
        From course scheduling and student records to communication and grading — everything is managed seamlessly on one platform.
    </p>

    <div class="services-section">
        <h2>Explore Our Services</h2>
        <div class="card-container">
    <a href="courses.php" class="card">
        <h3>Courses</h3>
        <p>View available programs, subjects, and schedules.</p>
    </a>
    <a href="announcements.php" class="card">
        <h3>Announcements</h3>
        <p>Stay updated with the latest news, holidays, and events.</p>
    </a>
    <a href="studentzone.php" class="card">
        <h3>Student Zone</h3>
        <p>Access results, assignment uploads, and academic support.</p>
    </a>
    <a href="employee.php" class="card">
        <h3>Employee Services</h3>
        <p>Manage staff profiles, attendance, leaves, and payroll efficiently.</p>
    </a>
    <a href="programmes.php" class="card">
        <h3>Browse Our Programme</h3>
        <p>Explore undergraduate, postgraduate, diploma, and certificate courses offered by EduTech.</p>
    </a>
    <a href="admission.php" class="card">
        <h3>Admission</h3>
        <p>Get details about the admission process, important dates, eligibility, and how to apply.</p>
    </a>
</div>


        </div>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>

