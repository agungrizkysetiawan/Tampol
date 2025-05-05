<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>About Us</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: navy;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 2);
        }

        section {
            background-color: #fff;
            margin: 20px;
            padding: 30px;
            border-radius: 10px; /* Mengubah sudut menjadi melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .team-members {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .team-member {
            flex-basis: calc(33.33% - 20px);
            text-align: center;
            margin: 20px 0;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .team-member img:hover {
            transform: scale(1.1);
        }
        .instagram-link {
            margin-top: 10px;
        }

        .instagram-link a {
            text-decoration: none;
            color: #555;
        }

        .instagram-icon {
            margin-right: 5px;
            font-size: 20px;
        }

        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 22px;
            }

            p {
                font-size: 16px;
            }

            .team-member {
                flex-basis: calc(50% - 20px);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <section id="company-info">
        <h2>TAMPOL</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies, risus eget viverra bibendum, tellus metus viverra dui.</p>
    </section>
    <section id="team">
        <h2>Kelompok 5</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="foto.jpg" alt="Agung">
                <h3>Agung Rizky Setiawan</h3>
                <p>Back End & Front End</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/agongrzkysss/">Instagram</a></p>
            </div>
            <div class="team-member">
                <img src="jane.jpg" alt="Astrid">
                <h3>Astrid Risa Widiana</h3>
                <p>CEO</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/astrdrisa/">Instagram</a></p>
            </div>
            <div class="team-member">
                <img src="mary.jpg" alt="Firstia">
                <h3>Firstia Aulia Wida Azizah</h3>
                <p>CTO</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/firstiazh/">Instagram</a></p>
            </div>
            <div class="team-member">
                <img src="foto/daffa1.jpg" alt="Daffa">
                <h3>Muhammad Daffa Wijaya</h3>
                <p>Back End & Front End</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/muhammad_daffa76/">Instagram</a></p>
            </div>
            <div class="team-member">
                <img src="sarah.jpg" alt="Ravi">
                <h3>Ravi Wimar Arfiansyah</h3>
                <p>CMO</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/raviwimar/">Instagram</a></p>
            </div>
            <div class="team-member">
                <img src="robert.jpg" alt="Rifki">
                <h3>Rifki Fakhrudin</h3>
                <p>CFO</p>
                <p class="instagram-link"><i class="fab fa-instagram instagram-icon"></i><a href="https://www.instagram.com/rifki_fakhrudin/">Instagram</a></p>
            </div>
        </div>
    </section>
    <!-- Tambahkan bagian lain sesuai kebutuhan -->
    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
