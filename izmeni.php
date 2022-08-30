<?php
session_start();
include 'connection.php';



if (isset($_POST['submit-update'])) {

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $brdece = $_POST['brdece'];
    $password = $_POST['password'];
    $sql = "update `medmea` set ime='$ime', prezime='$prezime', email='$email', br_dece=$brdece, password='$password' where email='$email'";
    $res = mysqli_query($con, $sql);
}
?>

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



                <form action="#" method="post" id="register-up" class="input-polja-up">
                    <input type="text" class="input" placeholder="Vaše ime" name="ime" required>
                    <input type="text" class="input" placeholder="Vaše prezime" name="prezime" required>
                    <input type="email" class="input" placeholder="Nije moguće promeniti e-mail adresu" name="email" disabled>
                    <input type="number" class="input" placeholder="Broj dece kojima ću ja biti doktor" name="brdece" min="1" required>
                    <input type="password" class="input" placeholder="Password" name="password" required>
                    <button type="submit" name="submit-update" class="submit-btn">Update</button>
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

</body>

</html>