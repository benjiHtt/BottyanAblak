<?php
session_start();
?>
<!DOCTYPE html>
   <!--******************************************************************************************************* -->
    <!-- by : D csapat[Lieber Marcell ][Varga Péter ][Hitter Benjámin ][Zágonyi Olivér ][Bartha Bence ] -->
    <!-- Jelenleg xxxxxx sectionok helye xxxxxx-->
    <!--utolsó modosítás : Hitter Benjámin 21:40 2023/02/28-->
    <!--******************************************************************************************************* -->
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Bottyánablak Naptár</title>
  <link rel="icon" type="image/x-icon" href="../main_page/img/BA_logo.png ">

  <style type="text/css">
      p, body, td, input, select { font-family: -apple-system,system-ui,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif; font-size: 14px; }
      body { padding: 0px; margin: 0px; background-color: #ffffff; }
      a { color: #1155a3; }
      .space { margin: 10px 0px 10px 0px; }
      .header { background: #003267; background: linear-gradient(to right, #011329 0%, #00639e 44%, #011329 100%); padding: 20px 10px; color: white; box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.75); }
      .header a { color: white; }
      .header h1 a { text-decoration: none; }
      .header h1 { padding: 0px; margin: 0px; }
      .main { padding: 10px; margin-top: 10px; }
  </style>

  <style>

  </style>

  <!-- DayPilot library -->
  <script src="js/daypilot/daypilot-all.min.js"></script>

  <!-- additional themes -->
  <link type="text/css" rel="stylesheet" href="themes/calendar_g.css"/>
  <link type="text/css" rel="stylesheet" href="themes/calendar_green.css"/>
  <link type="text/css" rel="stylesheet" href="themes/calendar_traditional.css"/>
  <link type="text/css" rel="stylesheet" href="themes/calendar_transparent.css"/>
  <link type="text/css" rel="stylesheet" href="themes/calendar_white.css"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../admin_user_page/assets/css/style.css">

</head>
<body>

<!--<div class="header">-->
<!--  <h1><a href='https://code.daypilot.org/17910/html5-event-calendar-open-source'>HTML5/JavaScript Event Calendar (Open-Source)</a></h1>-->
<!--  <div><a href="https://javascript.daypilot.org/">DayPilot for JavaScript</a> - HTML5 Calendar/Scheduling Components for JavaScript/Angular/React/Vue</div>-->
<!--</div>-->


<nav class="navbar navbar-expand-lg bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../main_page/img/BA2.png" alt="logo_error" width="65" height="65">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <h2 class="text-uppercase text-white fw-semibold display-10">Szia <span class="text-primary"> <?php echo $_SESSION['user_name']; ?> </span> ! Üdv a BottyánAblak <span class="text-info">  naptár </span> oldalán!</h2>
      </li>
<!--      <li class="nav-item">-->
<!--          <a class="nav-link" href="../admin_user_page/admin.php">    </a>-->
<!--      </li> -->
      <li class="nav-item">
          <form method="post"  action="../admin_user_page/<?php  echo $_SESSION['home']; ?>">
        <button type="submit" name="logout" id="main"
                class="btn btn-warning ms-lg-3 btn-main">Főoldal</button>
      </form>
      </li>        
      </ul>
      <form method="post"  action="../admin_user_page/logout.php">
        <button type="submit" name="logout" id="logout"
                class="btn btn-danger ms-lg-3 btn-logout">Kilépés</button>
      </form>
    </div>
  </div>
</nav>

<div class="main">
  <div style="display: flex">

    <div style="margin-right: 10px;">
      <div id="nav"></div>
    </div>

    <div style="flex-grow: 1;">

      <div class="space">
        Stílus: <select id="theme">
        <option value="calendar_default">Alap</option>
        <option value="calendar_white">Fehér</option>
        <option value="calendar_g">Google</option>
        <option value="calendar_green">Zöld</option>
        <option value="calendar_traditional">Klasszikus</option>
        <option value="calendar_transparent">Átlátszó</option>
      </select>
      </div>

      <div id="dp"></div>
    </div>

  </div>
</div>

<script>
  const nav = new DayPilot.Navigator("nav", {
    showMonths: 3,
    skipMonths: 3,
    selectMode: "Week",
    onTimeRangeSelected: args => {
      dp.update({
        startDate: args.day
      });
      app.loadEvents();
    }
  });
  nav.init();

  const dp = new DayPilot.Calendar("dp", {
    viewType: "Week",
    eventDeleteHandling: "Update",
    onEventDeleted: async (args) => {
      const data = {
        id: args.e.id()
      };
      await DayPilot.Http.post(`backend_delete.php`, data);
      console.log("Deleted.");
    },
    onEventMoved: async (args) => {
      const data = {
        id: args.e.id(),
        newStart: args.newStart,
        newEnd: args.newEnd,
      };
      await DayPilot.Http.post(`backend_move.php`, data);
      console.log("Moved.");
    },
    onEventResized: async (args) => {
      const data = {
        id: args.e.id(),
        newStart: args.newStart,
        newEnd: args.newEnd,
      };
      await DayPilot.Http.post(`backend_move.php`, data);
      console.log("Resized.");
    },
    onTimeRangeSelected: async (args) => {
      const form = [
        {name: "Name", id: "text"}
      ];

      const modal = await DayPilot.Modal.form(form, {});
      dp.clearSelection();

      if (modal.canceled) {
        return;
      }

      const event = {
        start: args.start,
        end: args.end,
        text: modal.result.text
      };
      const {data} = await DayPilot.Http.post(`backend_create.php`, event);

      dp.events.add({
        start: args.start,
        end: args.end,
        id: data.id,
        text: modal.result.text
      });
      console.log("Created.");

    },
    onEventClick: async (args) => {
      const form = [
        {name: "Name", id: "text"}
      ];

      const modal = await DayPilot.Modal.form(form, args.e.data);
      if (modal.canceled) {
        return;
      }

      const data = {
        id: args.e.id(),
        text: modal.result.text
      };
      await DayPilot.Http.post(`backend_update.php`, data);

      dp.events.update({
        ...args.e.data,
        text: modal.result.text
      });
      console.log("Updated.");

    }

  });
  dp.init();


  const app = {
    elements: {
      theme: document.querySelector("#theme")
    },
    loadEvents() {
      dp.events.load("backend_events.php");
    },
    init() {
      app.elements.theme.addEventListener("change", () => {
        dp.update({
          theme: app.elements.theme.value
        });
      });

      app.loadEvents();
    }
  };
  app.init();


</script>


<!-- Footer START -->
   <!-- FOOTER -->
   <section class="footer">
   <footer class="bg-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <a href="#"><img src="../main_page/img/BA1.png" alt=""></a>
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

</body>
</html>

