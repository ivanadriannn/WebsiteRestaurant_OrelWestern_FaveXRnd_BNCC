<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <form action="#">
            <p>Orel</p>
            <p class="w">Western</p>

            <div class="content">
                <label for="name">Username</label>
                <input type="text" placeholder="Enter your username here" id="name">
                <div id="validation"></div>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" >
                    <button id="view" onclick="show()">
                        <i class="fa-solid fa-eye" id="eye"></i>
                    </button>
                    <div id="validation2"></div>
                    
                <div class="rem">
                    <input type="checkbox" id="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
            </div>
            <input type="submit" value="LOGIN ADMIN"></input>
            <input type="submit" value="LOGIN USER"></input>
            <a href="register.html">Register</a>
        </form>
    </div>
</body>
<script src="script2.js"></script>
</html>