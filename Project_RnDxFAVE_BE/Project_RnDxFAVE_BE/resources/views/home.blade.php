<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OREL WESTERN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav id="nav">
        <div class="container">
            <p>Orel</p>
            <p class="w">Western</p>
        </div>
        <div class="links">
            <a href="/show-food" class="o">What we offer</a>
            @can('isAdmin')
                <a href="/list-food" class="o">Admin Panel</a>
            @endcan
            <a href="/login" class="us">Login</a>
            <a href="/register" class="us">Register</a>
            <a href="/dashboard" class="us">Dashboard</a>
        </div>
    </nav>
    <section id="hero">
        <img src="assetss/hero.png" alt="hero">
        <div class="content">
            <div class="p">ONE - STOP</div>
            <div><Span>DECILICIOUS</Span></div>
            <div class="p">Flavors in One</div>
            <div class="p">Place</div>
        </div>
    </section>
</body>
</html>
