<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicaMea</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Indie+Flower&family=Montserrat:ital,wght@0,200;0,900;1,300&family=PT+Serif&family=Poppins:wght@300&family=Raleway:wght@300&family=Roboto:ital,wght@0,300;0,400;1,100;1,300&family=Shadows+Into+Light&family=Square+Peg&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e1f20daf1.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="header-login">
        <nav>
            <a href="index.html"><img class="logo" src="images/logo34.png" alt=""></a>

            <div class="navigation-menu" id="navigation-menu">
                <i class="fa solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">POČETNA</a></li>
                    <li><a href="about.html">O MENI</a></li>
                    <li><a href="login.php">ZAKAZIVANJE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                </ul>
            </div>
            <i class="fa solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="forma">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <form action="validation.php" method="POST" id="login" class="input-polja">
                    <input type="email" class="input" placeholder="Vaš e-mail" name="email" required>
                    <input type="password" class="input" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
                <form action="registration.php" method="post" id="register" class="input-polja">
                    <input type="text" class="input" placeholder="Vaše ime" name="ime" required>
                    <input type="text" class="input" placeholder="Vaše prezime" name="prezime" required>
                    <input type="email" class="input" placeholder="Vaš e-mail" name="email" required>
                    <input type="number" class="input" placeholder="Broj dece kojima ću ja biti doktor" name="brdece" min="1" required>
                    <input type="password" class="input" placeholder="Password" name="password" required>
                    <button type="submit" name="submit-reg" class="submit-btn">Register</button>
                </form>

            </div>

        </div>
    </section>





    <!-------------JavaScript-------------->
    <script>
        var navLinks = document.getElementById("navigation-menu")

        function showMenu() {
            navLinks.style.right = '0'
        }

        function hideMenu() {
            navLinks.style.right = '-200px'
        }
    </script>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>