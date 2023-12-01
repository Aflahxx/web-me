<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        body {
        background-image: url("cod10.jpg");
        background-repeat: no-repeat;
        background-size: 100%; /* Anda dapat mengatur persentase yang sesuai */
    }
    
        body {
            font-family: Arial, sans-serif;
            background-color: #1E90FF;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        .login-box {
            background-color: #696969;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    
    <div class="login-box">
        <h2>Silakan Masuk</h2>
        <form id="loginForm">
            <input type="text" name="username" placeholder="Username" id="username" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <button type="button" id="loginButton">Masuk</button>
        </form>
    </div>

    <script>
        document.getElementById("loginButton").addEventListener("click", function () {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "1" && password === "1") {
                alert("Login successful. Welcome!");
                window.location.href = "dashbord.php";
                // Tambahkan kode untuk mengarahkan ke halaman selanjutnya di sini
            } else {
                alert("Login not successful. Please check your username and password.");
            }
        });
    </script>
</body>
</html>
