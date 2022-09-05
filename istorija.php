<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prethodna zakazivanja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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
                            <h1>M </h1>
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

        <div class="container">
            <div class="row">
                <button class="submit-btn-hist" data-toggle="modal" data-target="#addModal">Zakažite termin</button>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <div class="tabela" id="showUser">
                        
                    </div>
                </div>
            </div>
            <hr class="ispod">
        </div>

        <!-- zakazi termin -->
        <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Zakazivanje novog termina</h4>
                        
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body px-2">
                        <form action="" method="POST" id="form-data" class="form-zakazi">
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
                                    <span class="details">Datum i vreme posete:</span>
                                    <input type="datetime-local"  id="datum" placeholder="Datum i vreme posete" name="datum">
                                </div>
                                <input type="email" class="input" id="email_potvrda" placeholder="Vaš e-mail za potvrdu" name="email" required>
                                <button class="submit-btn"  name="insert" id="insert" value="Zakazi termin">Zakaži pregled</button>


                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </section>






    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            

            showAllRecords()

            function showAllRecords(){
                $.ajax({
                    url:"action.php",
                    type:"POST",
                    data:{action:"view"},
                    success:function(response){
                        //console.log(response);
                        $("#showUser").html(response);
                        $("table").DataTable({
                            order:[0, "desc"]
                        });
                    }

                });
            }

            $("#insert").click(function(e){
                if($("#form-data")[0].checkValidity()){
                    e.preventDefault();
                    $.ajax({
                        url:"action.php",
                        type:"POST", 
                        //hvata sve vrednosti iz forme u array
                        data: $("#form-data").serialize()+"&action=insert",
                        success:function(response){
                            Swal.fire({
                                title: "Uspešno zakazan termin",
                                type: 'success'
                            })
                            $("#addModal").modal('hide');
                            $("#form-data")[0].reset();
                            showAllRecords();
                        }
                    })
                }
            })
        });
    </script>


<script type="text/javascript">
  function form_submit() {
    document.getElementById("form-data").submit();
   }    
  </script>


    <script>
        function menuToggle() {
            const toggle = document.querySelector('.user-menu');
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

</body>

</html>