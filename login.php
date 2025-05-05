<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            
        }

        .login-container {
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            width: 280px;
            padding: 30px;
            text-align: center;
            transform: translateY(0);
            opacity: 1;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .login-container.hide {
            transform: translateY(-20px);
            opacity: 0;
        }

        .login-title {
            color: #333;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .login-form input,
        .login-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        /* Mengubah font untuk input username dan password */
        .login-form input[type="text"],
        .login-form input[type="password"] {
            font-family: 'Poppins', sans-serif;
        }

        .password-container {
            position: relative;
            margin-bottom: 15px;
        }

        .password-input {
            width: calc(100% - 30px);
            padding-right: 30px;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
            font-size: 12px;
            user-select: none;
        }

        .login-form button {
            background-color: #764ba2;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .login-form button:hover {
            background-color: #5b389b;
        }

        .login-logo {
            margin-bottom: 10px; /* Menambah margin-bottom untuk memberikan ruang ekstra dengan logo yang lebih besar */
        }

        .login-logo img {
            width: 200px; /* Lebar gambar diperbesar */
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="tampol.png" alt="Logo">
        </div>
        <div class="login-title">
            <h2>Login</h2>
        </div>
        <form class="login-form" method="post" action="proses/proses_login.php">
            <!-- Menggunakan font Poppins untuk input username dan password -->
            <input type="text" name="username" placeholder="Username" required>
            <div class="password-container">
                <input type="password" name="password" class="password-input" placeholder="Password" id="password" required>
                <i class="password-toggle" onclick="togglePassword()">Show</i>
            </div>
            <button type="submit" name="login_admin">Login</button>
        </form>
        <p style="margin-top: 15px; font-size: 10px; color: #777;">&copy; 2023 Tampol Kelompok 5</p>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.login-container').classList.remove('hide');
        });
    </script>
</body>
</html>
