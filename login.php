<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <form action="" method="post" class="login-form">
        <h1>Login</h1>

        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
        </div>

        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
        </div>

        <button type="submit" class="submit-btn">Login</button>
        <div class="additional-links">
            <p>Don't have an account? <a href="register.php">Register</a></p>
            <a href="index.php">Back to Home</a>
        </div>
    </form>
</body>

</html>
