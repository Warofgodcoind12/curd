<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E4DCCF;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #F9F5EB;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #EA5455;
            color: #fff;
            cursor: pointer;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        session_start();

        $error = ''; // Mengatur variabel error menjadi string kosong

        if(isset($_POST['submit'])) {
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            if($username === 'username' && $password === 'password') {
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit();
            } else {
                $error = "Username atau password salah.";
            }
        }
        ?>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login">
            </div>
            <?php if(!empty($error)) { ?> <!-- Memeriksa apakah variabel error tidak kosong -->
                <div class="error-message"><?php echo $error; ?></div>
            <?php } ?>
        </form>
    </div>
</body>
</html>
