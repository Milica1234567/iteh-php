<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicaMea</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="dycalendar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Roboto:ital,wght@0,300;0,400;1,100;1,300&family=Square+Peg&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e1f20daf1.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="header-zakazivanje">
        <nav>
            <a href="index.html"><img class="logo" src="images/logo34.png" alt=""></a>
            
            <div class="action">
                <div class="profile">
                <i class="fa-regular fa-circle-user fa-2xl" onclick="menuToggle();"></i>
                <div class="user-menu">
                    
                    <ul>
                    <h1><?php echo $_SESSION['ime'];?> </h1>
                        <li><a href="index.html"><i class="fa-solid fa-house-chimney"></i>Početna</a></li>
                        <li><a href="about.html"><i class="fa-solid fa-user-doctor"></i>O doktorki</a></li>
                        <li><a href="blog.html"><i class="fa-solid fa-comment-medical"></i>Blog</a></li>
                        <li><a href="history.php"><i class="fa-solid fa-clock-rotate-left"></i>Istorija zakazivanja</a></li>
                        <li><a href="update.php"><i class="fa-solid fa-pen-to-square"></i>Promeni podatke</a></li>
                        <li><button class="submit-btn-hist"><a href="logout.php">Izloguj me</a></button></li>
                    </ul>

                </div>
                </div>
            </div>
           
        </nav>
       

        <div class="container">
            <button class="submit-btn-hist my-3"><a href="zakazivanje.php">Zakaži novi pregled</a></button>
    </div>
    </section>


  




    <!-------------JavaScript-------------->
    <script>
        function menuToggle(){
            const toggle=document.querySelector('.user-menu');
            toggle.classList.toggle('active');
        }
    </script>
    <script>
        var navLinks = document.getElementById("navigation-menu")
        function showMenu() {
            navLinks.style.right = '0'
        }
        function hideMenu() {
            navLinks.style.right = '-200px'
        }
    </script>
    <script src="dycalendar.js"></script>
    <script>
        dycalendar.draw({
            target: '#dycalendar',
            type: 'month',
            dayformat: 'full',
            monthformat: 'full',
            highlighttargetdate: true,
            prevnextbutton: 'show',

        })
    </script>
    <!-------------Bootstrap JavaScript-------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
   <!--- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>


</body>

</html>