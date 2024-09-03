<?php
?>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portfolio Gabut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Helvetica Neue', sans-serif;
            background: #f0f2f5;
            color: #333;
            line-height: 2.0;
            padding: 0 1rem;
        }

        .container {
            max-width: 1400px;
            margin: auto;
            padding-top: 2rem;
            position: relative;
        }

        .sidebar {
            width: 250px;
            background: #0288d1;
            padding: 2rem 1rem;
            position: fixed;
            top: 0;
            left: -300px;
            height: 100%;
            z-index: 1000;
            transition: left 0.3s ease;
            border-radius: 0 10px 10px 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 1rem 0;
            font-size: 1.2rem;
            padding: 0.75rem;
            border-radius: 5px;
            transition: background 0.3s ease, padding 0.3s ease;
        }

        .sidebar a:hover {
            background: #0277bd;
            padding-left: 1rem;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .toggle-btn {
            background: #0288d1;
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1100;
            transition: background 0.3s ease;
        }

        .toggle-btn.active {
            left: 270px;
        }

        .toggle-btn:hover {
            background: #0277bd;
        }

        /* Content Area */
        .content {
            margin-left: 0;
            padding: 2rem 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease;
        }

        .sidebar.active ~ .content {
            margin-left: 270px;
        }

        .hero {
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(90deg, #0288d1, #26c6da);
            color: white;
            border-radius: 10px;
            margin-bottom: 2rem;
            transition: background 0.3s ease;
        }

        .hero h1, .hero p {
            color: transparent;
        }

        .hero .button {
            background: transparent;
            color: transparent;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: default;
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .feature-item {
            flex: 1 1 300px;
            margin: 1rem;
            text-align: center;
            padding: 2rem;
            border-radius: 10px;
            background: #e3f2fd;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 12px 40px rgba(0, 0, 0, 0.15);
            background: #bbdefb;
        }

        .feature-item i, .feature-item h3, .feature-item p {
            color: transparent;
        }

        .footer {
            background: #0288d1;
            color: white;
            text-align: center;
            padding: 1rem;
            border-radius: 10px;
            margin-top: 2rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .footer p {
            margin-bottom: 0.5rem;
            color: transparent;
        }

        .footer a {
            color: transparent;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        /* Responsiveness */
        @media (max-width: 1024px) {
            .content {
                margin-left: 0;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .feature-item {
                padding: 1rem;
            }

            .feature-item h3 {
                font-size: 1.2rem;
            }

            .feature-item p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .feature-item i {
                font-size: 2.5rem;
            }

            .feature-item h3 {
                font-size: 1rem;
            }

            .feature-item p {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>

    <div class="sidebar" id="sidebar">
        <button class="close-btn" onclick="toggleSidebar()"><i class="fas fa-times"></i></button>
        <h2>Menu</h2>
        <a href="index.html"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php"><i class="fas fa-briefcase"></i> Portfolio</a>
        <a href="#"><i class="fas fa-user"></i> About</a>
        <a href="#"><i class="fas fa-envelope"></i> Contact</a>
    </div>

    <div class="container">
        <div class="content">
            <section class="hero">
                <h1></h1>
                <p></p>
                <a href="profile.php" class="button"></a>
            </section>

            <section class="features">
                <div class="feature-item">
                    <i class="fas fa-code"></i>
                    <h3></h3>
                    <p></p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-paint-brush"></i>
                    <h3></h3>
                    <p></p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h3></h3>
                    <p></p>
                </div>
            </section>

            <footer class="footer">
                <p></p>
                <p><a href="#"></a> | <a href="#"></a> | <a href="#"></a></p>
            </footer>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
            document.querySelector('.toggle-btn').classList.toggle('active');
        }
    </script>
</body>
</html>
