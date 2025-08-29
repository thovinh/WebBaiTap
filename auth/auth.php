<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Lùi 1 cấp vì đang ở /auth -->
    <style>
        .auth-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 50px auto;
            max-width: 900px;
            flex-wrap: wrap;
        }
        .auth-container {
            width: 400px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .auth-container h2 {
            text-align: center;
            color: #2563eb;
        }
        .auth-container form {
            display: flex;
            flex-direction: column;
        }
        .auth-container input {
            margin: 8px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .auth-container button {
            margin-top: 10px;
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .auth-container button:hover {
            background: #1d4ed8;
        }
        @media (max-width: 850px) {
            .auth-wrapper {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="auth-wrapper">
        <!-- Login form -->
        <div class="auth-container">
            <h2>Login</h2>
            <form id="loginForm" action="process_login.php" method="POST">
                <input type="text" name="username" placeholder="Username or Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Register form -->
        <div class="auth-container">
            <h2>Register</h2>
            <form id="registerForm" action="process_register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="fullname" placeholder="Full Name">
                <input type="text" name="company" placeholder="Company">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
