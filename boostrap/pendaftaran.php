<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 50px;
        }
        
        h1 {
            color: #333;
        }

        .login-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
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
        <form>
            <input type="text" placeholder="Username" id="username">
            <input type="text" placeholder="Password" id="password">
            <button type="submit" id="loginButton">Masuk</button>
        </form>
    </div>

    <script>
        const loginButton = document.getElementById('loginButton');
        loginButton.addEventLtener('click', () => {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'aaa' && password === 'a') {
                alert('Login berhasil!');
                window.location.href = 'dashbord.html';
            } else {
                alert('Login gagal. Silakan cek kembali username dan password.');
            }
        });
    </script>
</body>
</html>
