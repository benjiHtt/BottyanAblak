<?php
session_start();
include "db_conn.php";

$sql = "SELECT * FROM users where privilege =5";
$szemelyek = mysqli_query($conn, $sql);
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

    <title>BottyánAblak User</title>
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
                        <a class="nav-link" href="#about">Kik vagyunk?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Szolgáltatásaink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Értékelések</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Hol találsz meg minket?</a>
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
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Szia <span class="text-info"> <?php echo $_SESSION['user_name']; ?> </span> ! a BottyánAblak felhasználó oldalán!</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Ezen az oldalon lehetőséged lesz időpontok foglalásához!</h5>
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
                        <h1 class="display-4 fw-semibold">Rólunk</h1>
                        <div class="line"></div>
                        <p>A Bottyán Kutatóközpont elit D csapata által üzemeltett multinacionális vállalat vagyunk </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/teamwork.gif" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>A BottyánAblakról</h1>
                    <p class="mt-3 mb-4">Csúcstechnológia és a szakértelem tökéletes együttmőködésének az eredménye, célunk:</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Az időpontfoglalás megkönnyítése</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>A megfelelő személyek összeköttetése a felhasználókkal</h5>
                            <p>Consectetur adipisicing elit. Corporis nesciunt aut temporibus!</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>A regisztrációs folyamat felgyorsítása</h5>
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
                        <h1 class="display-4 fw-semibold">Szolgáltatásaink</h1>
                        <div class="line"></div>
                        <p>Ügyfeleink számára technológiák és szolgáltatások széles tárháza áll a rendelkezésükre!</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pie-chart-2-fill"></i><!--  -->
                        </div>
                        <!--1.Megjeleníti milyen időpontok szabadok NAPTÁR -->
                        <h5 class="mt-4 mb-3">Naptár</h5>
                        <p><span class="text-info">  Szabad időpontok  </span> megjelenítése, <span class="text-success"> új időpont foglalása  </span>, vagy már foglalt <span class="text-danger"> időpontok törlése . </span>  </p>
                        <a href="../naptar/index.php" target="_blank" class="btn btn-primary ms-lg-3">Naptár Megnyitása</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-2-fill"></i>
                        </div>
                         <!--2.A személyek akikhez lehet időpontot foglalni-->
                        <h5 class="mt-4 mb-3">Személyek katalógus</h5>
                        <p>Nézd meg kikhez foglalhatsz időpontot!</p>  

                        <form action ="reguser.php" method="post">
                        <button class="btn btn-info ms-lg-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Katalógus megnyitása</button>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <!--3.A regisztráláskor kapott sorszám újraküldése-->
                        <h5 class="mt-4 mb-3">Sorszám Újragenerálása</h5>
                        <p>Küldd újra a sorszámodat!</p>
                        <button class="btn btn-warning ms-lg-3" type="button" data-bs-toggle="modal" data-bs-target="#numModal">Sorszám újraküldése</button> 
                    </div>
                </div>                                           
            </div>
        </div>
    </section>

    <!-- Modalok/Offcanvas START-->

    <!-- Szemely Katalogus START-->

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
         <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasTopLabel">Katalogus</h5>
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <?php

                //$query = sprintf("SELECT * FROM users WHERE privilege='5' ");                 
                //$result = mysql_query($query);
                 

              while ($row = $szemelyek->fetch_assoc()) {
                  echo $row['name'].' '.$row['number'].' '.$row['email'].' '.$row['user_name'].'<br>';

              }
              ?>
        </div>
    </div>

    <!-- Szemely Katalogus END-->


    <!-- Modal - Sorszam START-->
    <div class="modal fade" id="numModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Sorszám Újragenerálása</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <!-- SORSZAM START-->

            <form class="row g-3" action ="number.php" method="post">
                
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
             <?php } ?>
             
              <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Email cím:</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="" required>
              </div>             
                                                               
            <!-- SORSZAM END-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>

            <button type="submit" id="belepes" name="belepes" class="btn btn-warning" >Újraküldés</button>

          </form>
               

          </div>
        </div>
      </div>
    </div>
    <!-- Modal Sorszam END -->


    <!--Modalok/Offcanvas END -->

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">90K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Felhasználó</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">1K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Alkalmazott</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">12</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Országban</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">3</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Földrészen</h6>
                </div>
            </div>
        </div>
    </section>


    <!-- REVIEW -->
    <section id="reviews" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Értékelések</h1>
                        <div class="line"></div>
                        <p>Osszd meg a velünk tapasztalataidat:</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Börtöntelefonon is jól néz ki az oldal!</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-schadl.jpg" alt="">
                            <div class="ms-3">
                                <h5>Schadl György</h5>
                                <small>Végrehajtó</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Legjobb website ever.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-gates.jpg" alt="">
                            <div class="ms-3">
                                <h5>Bill Gates</h5>
                                <small>Üzletember</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>                               
                            </div>
                            <p>Megvenném ha lenne rá elég pénzem.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-musk.jpg" alt="">
                            <div class="ms-3">
                                <h5>Elon Musk</h5>
                                <small>Üzletember</small>
                            </div>
                        </div>
                    </div>
                </div>
                <
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Nagyon jó, ez egy batch file?</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-zsozso.png" alt="">
                            <div class="ms-3">
                                <h5>Kronos Gaming</h5>
                                <small>Szoftvermérnök</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Nagyon jó, ez egy batch file?</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-volner.png" alt="">
                            <div class="ms-3">
                                <h5>Völner Pál</h5>
                                <small>Országgyűlési Képviselő</small>
                            </div>
                        </div>
                    </div>
                </div>
                       -->
                
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Irodáink</h1>
                        <div class="line"></div>
                        <p>A világ számos pontján megtalálhatóak vagyunk, ezek közül a legjőbb központjaink:</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/swiss.png" alt="img_error">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Bern</h4>
                            <p class="mb-0 text-white">Fellerstrasse 11, 3027 Bern, Svájc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/japan.png" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Kyoto</h4>
                            <p class="mb-0 text-white">Sakyo Ward, Kyoto, 606-8501, Japán</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/usa.png" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Mountain View</h4>
                            <p class="mb-0 text-white">1600 Amphitheatre Pkwy,CA 94043, Egyesült Államok</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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