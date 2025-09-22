<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Recovery Management - Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <style>
        /* Specific styles for the login page */
        body.login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--background-color); /* Use your existing background color */
            margin: 0;
            padding: 20px; /* Add some padding for smaller screens */
        }

        .login-container {
            background-color: var(--card-background);
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        .login-container .logo .material-icons {
            font-size: 48px;
            margin-right: 15px;
        }

        .login-container .logo h2 {
            font-size: 32px;
            font-weight: 700;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 25px;
            color: var(--text-color);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--light-text-color);
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            color: var(--text-color);
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #43A047; /* Darker green */
        }

        .forgot-password {
            margin-top: 20px;
            font-size: 14px;
        }

        .forgot-password a {
            color: var(--secondary-color);
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="login-page">
    <div class="login-container">
        <div class="logo">
            <span class="material-icons">monetization_on</span>
            <h2>LoanRMS</h2>
        </div>
        <h2>Admin Login</h2>
        <form action="/login" method="POST"> <!-- Action points to a backend endpoint -->
        
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <p class="forgot-password">
            <a href="#">Forgot Password?</a>
        </p>
    </div>
</body>
</html>