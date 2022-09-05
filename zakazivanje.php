<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicaMea/ZAKAZIVANJE</title>
    
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
                        <h1> </h1>
                        <li><a href="index.html"><i class="fa-solid fa-house-chimney"></i>Početna</a></li>
                        <li><a href="about.html"><i class="fa-solid fa-user-doctor"></i>O doktorki</a></li>
                        <li><a href="blog.html"><i class="fa-solid fa-comment-medical"></i>Blog</a></li>
                        <li><a href="istorija.php"><i class="fa-solid fa-clock-rotate-left"></i>Istorija zakazivanja</a></li>
                        <li><a href="update.php"><i class="fa-solid fa-pen-to-square"></i>Promeni podatke</a></li>
                        <li><button class="submit-btn"><a href="logout.php">Izloguj me</a></button></li>
                    </ul>

                </div>
                </div>
            </div>

            
                   
                
            
           
        </nav>
        <div class="kalendar-forma-box">
            <div class="kalendar">
                <div id="dycalendar"></div>
            </div>
            <div class="forma-zakazi">
                <form action="zakazi.php" class="form-zakazi">
                    <div class="korisnicki-podaci">
                        <div class="input-box">
                            
                            <input type="text" class="input-forma-zakazi" id="ime_deteta" placeholder="Ime deteta" name="ime_deteta">
                        </div>
                        <div class="input-box">
                            
                            <input type="text" class="input-forma-zakazi" id="prezime_deteta" placeholder="Prezime deteta" name="prezime_deteta">
                        </div>
                        <div class="input-box">
                            
                            <input type="text" class="input-forma-zakazi" id="godine" placeholder="Starost deteta" name="godine">
                        </div>
                        <div class="input-box">
                            
                            <input type="text" class="input-forma-zakazi" id="jmbg" placeholder="Jmbg deteta" name="jmbg">
                        </div>
                        <div class="input-box">
                            
                            <textarea id="simptomi" name="simptomi" rows="4" cols="50">Unesite kratak opis simptoma deteta</textarea>
                        </div>
                        <div class="input-box">
                            
                            <input type="text" class="input-forma-zakazi" id="adresa" placeholder="Vaša adresa:" name="adresa">
                        </div>
                        
                        <div class="input-box">
                            <span class="details" >Datum i vreme posete:</span>
                            <input type="datetime-local" name="begin" id="datum" placeholder="Datum i vreme posete" name="datum">
                        </div>
                        <input type="email" class="input" id="email_potvrda" placeholder="Vaš e-mail za potvrdu" name="email" required>
                        <button class="submit-btn">Zakazi pregled</button>
                       
                      
                    </div>
                </form>
            </div>
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
  


</body>

</html>