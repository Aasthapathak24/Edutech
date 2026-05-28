<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About EduTech</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #5c4033;
            margin: 0;
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
    <h2>About EduTech</h2>
    <p>
    "At Edutech, we take pride in our highly qualified faculty, drawn from premier institutions across the country, and a modern, student-friendly campus environment designed to foster innovation, collaboration, and academic excellence."
    </p>
</div>
<h2 style="margin-top: 40px; color: #f4f4f4;">Our Leadership & Faculty</h2>


<!-- Director -->
<div style="margin: 40px auto; text-align: center;">
    <div style="background-color: #f6f1e7; display: inline-block; padding: 20px 40px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <img src="Director.jpg" alt="Director" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">
        <h3 style="margin-bottom: 5px; color: #5c4033;">Dr. Anil Sharma</h3>
        <p style="color: #4b3621;">Director, Edutech</p>
        <p style="font-size: 15px; color: #4b3621;">Ph.D. in Education Leadership, IIT Delhi</p>
    </div>
</div>

<!-- Faculty Members -->
<div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px; margin-top: 30px;">

    <div style="background-color: #f6f1e7; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center;">
        <img src="Femaleteacher.jpg" alt="Faculty 1" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 10px;">
        <h4 style="color: #5c4033;">Prof. Meera Joshi</h4>
        <p style="color: #4b3621;">Head, Computer Engineering</p>
        <p style="font-size: 14px; color: #4b3621;">M.Tech in AI & Robotics, IIT Bombay</p>
    </div>

    <div style="background-color: #f6f1e7; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center;">
        <img src="Malefaculty.jpg" alt="Faculty 2" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 10px;">
        <h4 style="color: #5c4033;">Dr. Josh</h4>
        <p style="color: #4b3621;">Faculty, Mechanical Engineering</p>
        <p style="font-size: 14px; color: #4b3621;">Ph.D. in Thermal Engineering, NIT Trichy</p>
    </div>

    <div style="background-color: #f6f1e7; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center;">
        <img src="Afemaleteacher.jpg" alt="Faculty 3" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 10px;">
        <h4 style="color: #5c4033;">Prof. Jenny</h4>
        <p style="color: #4b3621;">Faculty, Electronics & Communication</p>
        <p style="font-size: 14px; color: #4b3621;">M.Tech in VLSI, BITS Pilani</p>
    </div>

    <div style="background-color: #f6f1e7; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center;">
        <img src="Imaleteacher.jpg" alt="Faculty 4" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 10px;">
        <h4 style="color: #5c4033;">Dr. Iqbal Hussain</h4>
        <p style="color: #4b3621;">Faculty, Electrical Engineering</p>
        <p style="font-size: 14px; color: #4b3621;">Ph.D. in Power Systems, IIT Madras</p>
    </div>

    <!-- 🟫 Campus Banner -->
<div style="margin-top: 40px;">
    <h3 style="margin-top: 40px; color: #f4f4f4;">Our Campus</h3>
    
    <img src="campus.jpg" alt="Edutech Campus" id="campusBanner" 
         style="width: 100%; height: auto; max-height: 400px; object-fit: cover; cursor: pointer; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
</div>

<!-- 🟫 Modal View -->
<div id="campusModal" style="display:none; position:fixed; z-index:999; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.85); text-align:center;">
    <span id="closeModal" style="position:absolute; top:20px; right:30px; color:#fff; font-size:40px; font-weight:bold; cursor:pointer;">&times;</span>
    <img id="fullCampusImg" style="margin-top: 60px; max-width: 90%; max-height: 85%; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.4);">
</div>

<!-- 🟫 JavaScript to handle click and modal -->
<script>
    const campusBanner = document.getElementById("campusBanner");
    const campusModal = document.getElementById("campusModal");
    const fullCampusImg = document.getElementById("fullCampusImg");
    const closeModal = document.getElementById("closeModal");

    campusBanner.onclick = function () {
        fullCampusImg.src = this.src;
        campusModal.style.display = "block";
    };

    closeModal.onclick = function () {
        campusModal.style.display = "none";
    };

    window.onclick = function (e) {
        if (e.target === campusModal) {
            campusModal.style.display = "none";
        }
    };
</script>


</div>

<footer>
    &copy; <?php echo date("Y"); ?> EduTech - All Rights Reserved.
</footer>

</body>
</html>

