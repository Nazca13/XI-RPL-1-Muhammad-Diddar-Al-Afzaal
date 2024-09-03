<?php
$image_src = "a640e6f845d06ae5fa6784934f99b0c5.jpg"; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Gabut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Helvetica Neue', sans-serif;
            background: #f5f5f5;
            color: #000000;
            line-height: 1.6;
            padding: 0 1rem;
        }

        .nav {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            border-radius: 15px;
            padding: 1rem 0;
            background: #00bcd4;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000; 
        }

        .nav .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
            transition: color 0.3s ease;
            font-size: 1.1rem;
        }

        .nav a:hover {
            color: #fff;
        }

        .chatbot-icon {
            margin-left: 1rem;
            padding: 0.5rem;
            border-radius: 50%;
            background-color: #fff;
            color: #00bcd4;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .chatbot-icon:hover {
            transform: scale(1.2);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 2rem;
            max-width: 1500px;
            margin: 1rem auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0px 12px 40px rgba(0, 0, 0, 0.15);
        }

        .left, .right {
            flex: 1;
            min-width: 320px;
            padding: 1rem;
            text-align: center;
        }

        .profile-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            object-fit: cover;
            border-radius: 15%;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        .heading {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: 1px;
            background: linear-gradient(90deg, rgb(33, 74, 165), rgb(28, 162, 195));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        .heading2 {
            background: linear-gradient(90deg, rgb(33, 74, 165), rgb(28, 162, 195));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
        }

        .description {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .button {
            background: #00bcd4;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            width: 60px;
            height: 60px;
            display: flex; 
            justify-content: center;
            align-items: center;
        }

        .button i {
            font-size: 1.5rem;
        }

        .button:hover {
            transform: scale(1.2);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column-reverse;
                padding: 1rem;
            }

            .heading {
                font-size: 2.2rem;
            }

            .description {
                font-size: 1rem;
            }

            .buttons-container {
                flex-direction: column;
            }

            .button {
                margin: 0.5rem 0;
                width: 50px;
                height: 50px;
            }

            .button i {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .heading {
                font-size: 1.8rem;
            }

            .description {
                font-size: 0.9rem;
            }

            .button {
                width: 45px;
                height: 45px;
            }

            .button i {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="nav">
       <ul>
        <li>
        <a href="/Users/macbookfajri/Desktop/NFT/homeNFT.html" class="chatbot-icon"></a>
        </li>
       </ul>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
        </div>
    </div>

    <div class="container">
        <div class="left">
            <img src="<?php echo $image_src; ?>" class="profile-image" alt="Profile Image">
        </div>

        <div class="right">
            <h1 class="heading">Hello, I'm Diddar, a Frontend Developer </h1>
            <h5 class="heading2">(katanya)</h5>
            <p class="description">
                jadi disini gw gatau mau tulis apa yages ya jadi>.......gatau anjir yasudahlah,btw ngidam ketoprak anjer :), jadi disini gw buat portofolio ygy :^^:
            </p>
            <div class="buttons-container">
                <a href="https://www.instagram.com/nazca_nokaze/" class="button"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/6285795980667" class="button"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="button"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
</body>
</html>
