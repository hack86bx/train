<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerPere">
    <div class="container">
        <a href=""><div class="item1"><h2>Accueil</h2></div></a>
        <a href=""><div class="item2"><h2>Le centre</h2></div></a>
        <a href=""><div class="item3"><h2>Formation</h2></div></a>
        <a href=""><div class="item4"><h2>Contact</h2></div></a>
    </div>
    </div>

    <div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <span>Login</span>
    </div>           

    <div class="input_box">
        <input type="text" id="user" class="input-field" required>
        <label for="user" class="label">Username</label>
        <i class="bx bx-user icon"></i>
    </div>
    
    <div class="input_box">
        <input type="password" id="pass" class="input-field" required>
        <label for="pass" class="label">Password</label>
        <i class="bx bx-lock-alt icon"></i>
    </div>

    <div class="remember-forgot">
        <div class="remember-me">
            <input type="checkbox" id="remember">
            <label for="remember">remember-me</label>
    </div>

        <div class="forgot">
            <a href="#">Forgot password</a>
        </div>
    </div>

    <div class="input_box">
        <input type="submit" class="input-submit" value="Login">
    </div>
    
    <div class="register">
        <span>Don't have an account ? <a href="#">Register</a></span>
    </div>
    </div>
    </div>

    <footer>
        <h3>Copyright &copy; Arpaci 2024</h3>
    </footer>
</body>
</html>