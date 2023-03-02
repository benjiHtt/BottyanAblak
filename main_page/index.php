<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--******************************************************************************************************* -->
    <!-- by : D csapat[Lieber Marcell ][Varga Péter ][Hitter Benjámin ][Zágonyi Olivér ][Bartha Bence ] -->
    <!-- Jelenleg xxxxxx sectionok helye xxxxxx-->
    <!--utolsó modosítás : Hitter Benjámin 21:40 2023/02/18-->
    <!--******************************************************************************************************* -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Cím és favicon -->
  <title>BottyánAblak</title>
  <link rel="icon" type="image/x-icon" href="img/BA_logo.png">

  <!-- Bootstrap Stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

  <!-- test -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
</head>
<body>


  <!-- Header START -->
  <section class="header">
  <header class="header p-3 position-absolute start-0 top-0 end-0">
    <div class="d-flex justify-content-between align-items-center">

      <!-- BA kislogo baloldalon és közéső BA cím -->
      <img src="img/BA2.png" alt="BA_Logo_Error" width="50" height="50">

      <a href="/" class="text-decoration-none text-white fs-5 fw-bold">BottyánAblak</a>

      <div>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
      </div>

    </div>
  </header>
</section>
  <!-- Header END -->

  <!-- Flyout Navigation START -->
  <section class="navigation">
  <nav class="collapse navbar-collapse dropdown-nav" id="navbar">

    <div class="dropdown-nav__container container-xxl d-flex align-items-start align-items-md-center">



      <button class="navbar-toggler dropdown-nav__closeNavBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </button>

    </div>

  </nav>
</section>
  <!-- Flyout Navigation END -->

  <!-- Hero START -->
  <section class="hero">

    <div class="hero__overlay"></div>

    <!-- Egom video, Source: https://www.youtube.com/watch?v=mG1ZCJcKnc4 by Péter Szerémy 2019 -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
      <source src="img/esztergom_short.mp4" type="video/mp4">
    </video>

    <div class="hero__content h-100 container-custom position-relative">
      <div class="d-flex h-100 align-items-center hero__content-width">
        <div class="text-white">
          <h1 class="hero__heading fw-bold mb-4">Üdv a BottyánAblak hivatalos oldalán</h1>
          <p class="lead mb-4">Jelentkezz be a fiókodba a lenti gombra kattintva:</p>

          <button class="mt-2 btn btn-lg btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Belépés</button> 

          <button class="mt-2 btn btn-lg btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#regModal">Regisztráció</button> 

        </div>
      </div>
    </div>

    <!-- Login Modal START-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Belépés</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

                   <!-- BELEPES START-->

            <form class="row g-3" action ="login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
             <?php } ?>

              <div class="col-md-12">
                <label for="validationDefault01" class="form-label">Felhasználó név:</label>
                <input type="text" name="uname" class="form-control" id="validationDefault01" value="" required>
              </div>
              <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Email cím:</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="" required>
              </div>             
              <div class="col-md-12">
                <label for="validationDefault03" class="form-label">Jelszó:</label>
                <input type="text" name="password" class="form-control" id="validationDefault03" required>
              </div>                                        
            
            <!-- BELEPES END-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>

            <button type="submit" id="belepes" name="belepes" class="btn btn-primary" >Belépés</button>

          </form>
               

          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal END-->
 
    <!-- Regisztracio Modal START-->
    <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="regModalLabel">Regisztráció</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

               <!-- REGISZTRALAS START-->
              <!--Vezeték és keresztnév=rname || Email=email || Privilege=priv || Sorszám=num || Jelszó:=pass ||Új Felhasználó név:=uname || Telefonszám:=phone  -->

            <form class="row g-3" action ="reg.php" method="post">
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
                 <option value="1">Felhasználó</option>             
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
                <input type="text" name="pass" class="form-control" id="validationDefaultpass" required>
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
            
            <!-- REGISZTRALAS END-->
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
           
            <button type="submit" id="reg" name="reg" class="btn btn-success">Regisztráció</button>

          </form>
              

          </div>
        </div>
      </div>
    </div>
    <!-- Regisztracio Modal END-->

    <!--Kis nyil START-->
    <a href="#scroll-down" class="hero__scroll-btn">
      Lejebb <i class="bi bi-arrow-down-short"></i>
    </a>
 <!-- Kis nyil END-->>
  </section>

  <!-- Hero End -->

  <a id="scroll-down"></a>

  <!-- Footer START -->
   <!-- FOOTER -->
   <section class="footer">
   <footer class="bg-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <a href="#"><img src="img/BA1.png" alt=""></a>
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

  <!-- Bootstrap JS -->
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>