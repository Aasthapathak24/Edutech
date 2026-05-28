<?php
// Connect to the database
include('db_connection.php'); // Make sure your connection details are correct
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - EduTech</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your external CSS file here -->
    <style>
        
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f9;
            color: #5c4033;
            margin: 0;
        }

        header {
            background-color: #5c4033;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .important-dates, .eligibility-criteria, .admission-process, .documents-required, .faq {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 22px;
            color: #5c4033;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        ul li {
            font-size: 16px;
            line-height: 1.6;
        }

        .contact-info {
            background-color: #5c4033;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background-color: #5c4033;
            color: white;
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>EduTech Admissions</h1>
</header>

<div class="container">

    <h2>Admission Overview</h2>
    <p>Welcome to EduTech! We invite you to join our world-class academic programs. Below are the important details for your application.</p>

    <div class="important-dates">
        <h3 class="section-title">Important Dates</h3>
        <ul>
            <li>Application Start Date: <strong>1st May 2025</strong></li>
            <li>Application Deadline: <strong>30th June 2025</strong></li>
            <li>Entrance Exam Date: <strong>10th July 2025</strong></li>
            <li>Result Announcement: <strong>15th July 2025</strong></li>
        </ul>
    </div>

    <div class="eligibility-criteria">
        <h3 class="section-title">Eligibility Criteria</h3>
        <ul>
            <li>Must have completed high school with a minimum of 50% marks.</li>
            <li>Must have a valid score in the EduTech Entrance Exam.</li>
            <li>For post-graduate programs, a relevant undergraduate degree is required.</li>
        </ul>
    </div>

    <div class="admission-process">
        <h3 class="section-title">Admission Process</h3>
        <ul>
            <li>Register on the website.</li>
            <li>Complete the application form and upload required documents.</li>
            <li>Pay the application fee.</li>
            <li>Submit your application.</li>
            <li>Track your admission status through the portal.</li>
        </ul>
    </div>

    <div class="documents-required">
        <h3 class="section-title">Documents Required</h3>
        <ul>
            <li>Photocopy of mark sheets (10th, 12th, or Graduation).</li>
            <li>Passport-sized photographs.</li>
            <li>Government-issued ID proof (Aadhar Card, Passport, etc.).</li>
            <li>Migration certificate (if applicable).</li>
        </ul>
    </div>

    <div class="faq">
        <h3 class="section-title">FAQs</h3>
        <ul>
            <li><strong>Q:</strong> Can I edit my application after submission? <br><strong>A:</strong> No, once submitted, the application cannot be edited.</li>
            <li><strong>Q:</strong> What if I miss the application deadline? <br><strong>A:</strong> Unfortunately, we cannot accept late applications.</li>
            <li><strong>Q:</strong> Is there an entrance exam for all programs? <br><strong>A:</strong> Yes, the entrance exam is mandatory for most programs.</li>
        </ul>
    </div>

    <div class="contact-info">
        <h3>Need Help?</h3>
        <p>For further inquiries, feel free to contact our admissions team.</p>
        <p>Email: <a href="mailto:admissions@edutech.com">admissions@edutech.com</a></p>
        <p>Phone: +91-XXXXXXXXXX</p>
    </div>

</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>
