<?php
session_start();
include "db_conn.php";

$sql = "SELECT * FROM events";
$idopontok = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">

<head>
    <!--******************************************************************************************************* -->
    <!-- by : D csapat[Lieber Marcell ][Varga Péter ][Hitter Benjámin ][Zágonyi Olivér ][Bartha Bence ] -->
    <!-- Jelenleg xxxxxx sectionok helye xxxxxx-->
    <!--utolsó modosítás : Hitter Benjámin 21:40 2023/02/18-->
    <!--******************************************************************************************************* -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BottyánAblak Admin</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/BA_logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="./assets/images/BA2.png" alt="logo_error" width="65" height="65">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Admin panelek</a>
                    </li>                                      
                </ul>
                <form method="post"  action="logout.php">
                     <button type="submit" name="logout" id="logout"
                     class="btn btn-danger ms-lg-3 btn-logout">Kilépés</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Szia <span class="text-warning"> <?php echo $_SESSION['user_name']; ?> </span>! a BottyánAblak admin oldalán!</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Ezen az oldalon lehetőséged lesz a felhasználók, személyek és időpontok konfiguráláshoz!</h5>
                    <div data-aos="fade-up" data-aos-delay="50">                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Admin felület</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/server.jpeg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>Ezen az oldalon...</h1>
                    <p class="mt-3 mb-4">Lehetőséged lesz az admin jogaid gyakorlására, többek között:</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Személyek törölni</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>Személyeket felvenni</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>Hozzáférés a személyek katalógushoz</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Panelek</h1>
                        <div class="line"></div>
                        <p>Itt hozzáférhetsz az admin jogosultsággal járó panelekhez:</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-2-fill"></i> 
                        </div>
                        <!-- Szabad személyek felvétele-->
                        <!-- Egy személyhez több user is tud időpontot foglalni -->
                        <h5 class="mt-4 mb-3">Személy vagy admin felvétele</h5>
                        <p>Vegyél fel személyeket az adatbázisba!</p>
                        <button class="btn btn-success ms-lg-3" type="button" data-bs-toggle="modal" data-bs-target="#addModal">Felvétel</button> 
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <!-- Szabad időpontok felvétele , 0:00-tól egészen 23:58-ig-->
                        <h5 class="mt-4 mb-3">Szabad időpont felvétele a <span class="text-info"> Bottyánaptárba </span>                    
                        </h5>
                        <p>Rendelj hozzá szabad időpontot a felvett személyekhez!</p>
                        <a href="../naptar/index.php" target="_blank "class="btn btn-success ms-lg-3">Felvétel</a>
                    </div>                   
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-stack-fill"></i>
                        </div>
                        <!-- megjeleníti hogy melyik userek foglaltak időpontot személyekhez, maguk az időpontok, és a userek sorszámait -->
                        <h5 class="mt-4 mb-3">Foglalt Időpontok Adatbázis</h5>
                        <p>Nézd meg hogy kik, mikorra, és kihez foglaltak időpontot!</p>
                        <button  class="btn btn-warning ms-lg-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Megnyitás</button>
                    </div>
                </div>              
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-2-fill"></i>
                        </div>
                        <!--admin által felvett Személy törlése-->
                        <h5 class="mt-4 mb-3">Személy vagy admin törlése</h5>
                        <p>Törölj előzöleg felvett személyt!</p>
                        <button class="btn btn-danger ms-lg-3" type="button" data-bs-toggle="modal" data-bs-target="#delModal">Törlés</button> 
                    </div>
                </div>             
            </div>


        </div>
    </section>
           
    <!-- Foglalt idopontok START-->

 <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
         <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasTopLabel">Időpontok</h5>
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <?php
              while ($row = $idopontok->fetch_assoc()) {
    echo $row['name'].' '.$row['start'].' '.$row['end'].'<br>';

}
?>
          Melyik user foglalt? Milyen idopontot? Melyik Személyhez?
        </div>
    </div>

    <!-- Foglalt idopontok END-->


<!--  Modal - Szemely Felvetel START-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Személy vagy admin felvétele</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

<!-- Szemely Felvetel START-->
<!--Vezeték és keresztnév=rname || Email=email || Sorszám=num || Jelszó:=pass ||Új Felhasználó név:=uname || Telefonszám:=phone  -->

    <form class="row g-3" action ="regadmin.php" method="post">
<?php if(isset($_GET['error'])) { ?>
   <p class="error"> <?php echo $_GET['error']; ?></p>
     <?php } ?>

     <div class="col-md-4">
      <label for="validationDefaultrname" class="form-label">Vezeték és keresztnév:</label>
      <input type="text" name="rname" class="form-control" id="validationDefaultrname" value="" required>
     </div>              
   <div class="col-md-4">
      <label for="validationDefaultemail" class="form-label">Email cím:</label>
     <div class="input-group">
       <span class="input-group-text" id="inputGroupPrepend2">@</span>
       <input type="text" name="email" class="form-control" id="validationDefaultemail"  aria-describedby="inputGroupPrepend2" required>
      </div>
     </div>
    <div class="col-md-4">
      <div class="form-floating">                                             
      <select class="form-select" name="priv" id="floatingSelect" aria-label="Floating label select example">
       <option selected>Válassz:</option>
       <option value="5">Személy</option>
       <option value="10">Admin</option>                          
     </select>
    <label for="floatingSelect">Privilégium:</label>
    </div>
    </div>            
       <div class="col-md-4">
       <label for="validationDefaultnum" class="form-label">Sorszám:</label>
        <input type="text" name="num" class="form-control" id="validationDefaultnum" value="" required>
     </div>
     <div class="col-md-4">
      <label for="validationDefaultpass" class="form-label">Jelszó:</label>
       <input type="password" name="pass" class="form-control" id="validationDefaultpass" required>
     </div>
      <div class="col-md-4">
     <label for="validationDefaultuname" class="form-label">Új Felhasználó név:</label>
     <input type="text" name="uname" class="form-control" id="validationDefaultuname" required>
     </div>
     <div class="col-md-3">
      <label for="validationDefaultphone" class="form-label">Telefonszám:</label>
     <input type="text" name="phone" class="form-control" id="validationDefaultphone" required>               
     </div>
    <div class="col-12">
     <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
           Általános szerződési feltételek elfogadása
        </label>
       </div>
     </div>              

<!-- Szemely Felvetel END-->


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>

<button type="submit" id="regadmin" name="regadmin" class="btn btn-success">Regisztrálás</button>

</form>
               

          </div>
        </div>
      </div>
    </div>
    <!-- Modal Szemely Felvetel END -->

    <!--  Modal - Szemely Torles START-->
<div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Személy Törlése</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <!-- Szemely Torles START-->

            <form class="row g-3" action ="deluser.php" method="post">
                
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
             <?php } ?>
             
              <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Felhasználó név:</label>
                <input type="text" name="uname" class="form-control" id="validationDefault02" value="" required>
              </div> 
              <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Email cím:</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="" required>
              </div> 
              <div class="col-md-12">
                <label for="validationDefault02" class="form-label">jelszó:</label>
                <input type="password" name="pass" class="form-control" id="validationDefault02" value="" required>
              </div>             
                                                               
            <!-- Szemely Torles END-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>

            <button type="submit" id="belepes" name="belepes" class="btn btn-danger" >Törlés</button>

          </form>
               

          </div>
        </div>
      </div>
    </div>
    <!-- Modal Szemely Torles END -->

    <!-- Footer START -->
   <!-- FOOTER -->
   <section class="footer">
   <footer class="bg-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="./assets/images/BA2.png" alt=""></a>
                    <div class="line"></div>
                    <p>Kövess minket a közösségi médiában!</p>
                    <div class="social-icons">
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                        <a href="#"><i class="ri-github-fill"></i></a>
                        <a href="#"><i class="ri-dribbble-fill"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">Szolgáltatások</h5>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">UI Fejlesztés</a></li>
                        <li><a href="#">UX Fejlesztés</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Logo Készítés</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">Rólunk</h5>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Szolgáltatások</a></li>
                        <li><a href="#">Vállalat</a></li>
                        <li><a href="#">Karrier</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">Kapcsolat</h5>
                    <div class="line"></div>
                    <ul>
                        <li>ESZC Bottyán János Technikum, Esztergom 2500</li>
                        <li>(06 33) 500 955</li>
                        <li><a href="https://bottyan.eu/" target="_blank">ESZC Bottyan Kutatóközpont</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">2023 © Copyright D-csapat. Minden jog fenntartva.</p>
                </div>
                <div class="col-auto">
                    <p class="mb-0">Designed with 💜 By D-csapat</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
  <!-- Footer END -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>