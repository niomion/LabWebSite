<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bar.css">
    <link rel="preload" href="img/logo.png" as="image">
    <script src="https://kit.fontawesome.com/dbcdb45ccb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&family=Tilt+Neon&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>
    <title>Midnight Miami - Contact</title>
    <link rel="icon" type="image/x-icon" href="img/logosite.ico">
</head>
<body>
    <nav class="flex-contact">
        <div style="margin-left: 1%;">
            <i class="fa-solid fa-phone" style="margin-right: 5px;"></i> <p>+1-800-000-MIAMI</p>
        </div>
        <div>
            <i class="fa-solid fa-envelope" style="margin-right: 5px;"></i> <p>midnight.miami@mail.com</p>
        </div>
        <div>
           <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i> <p>Ocean Drive 423, Miami Beach, FL</p>
        </div>
</nav>
<nav class="flex-nav">
    <div>
         <span class="openmobile" onclick="openNav()">&#9776;</span>
      <a class="logolink linkmain" href="index.php"><img src="img/logo.png" class="merg1" alt="logo">
        <p class="fontneon">Midnight Miami</p>  </a>
    </div>
    <div>
        <a href="music.php">Music</a>
    </div>
    <div>
        <a class="text-underlined"  href="bar.php">Bar</a>
    </div>
    <div>
        <a href="galery.php">Gallery</a>
    </div>
    <div>
        <a href="contact.php">Contact</a>
    </div>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="music.php">Music</a>
    <a class="text-underlined" href="bar.php">Bar</a>
    <a href="galery.php">Gallery</a>
    <a href="contact.php">Contact</a>
  </div>

  <main>
    <div class="block1">
        <div class="text-overlay">
            <h1>Feel the Taste of Miami's Nightlife</h1>
        </div>
        <div class="text-overlay2">
            <h1>Our bar is open from 6 P.M to 3 A.M</h1>
        </div>
    </div>
    <div class="block2">
        <div class="innerblock21">
            <h1>Menu</h1>
        </div>
        <div id="1" class="innerblock22">
            <h1><i class="fa-solid fa-bottle-water"></i> Drinks</h1>
        </div>
        <div id="2" class="innerblock22">
            <h1><i class="fa-solid fa-beer-mug-empty"></i> Low-Alcohol</h1>
        </div>
        <div id="3" class="innerblock22">
            <h1><i class="fa-solid fa-martini-glass-citrus"></i> Cocktails</h1>
        </div>
        <div id="4" class="innerblock22">
            <h1><i class="fa-solid fa-whiskey-glass"></i> Alcohol</h1>
        </div>
        <div id="1" class="hidden-div">
            <div class="innermenu">
                <div class="menuphoto"><img src="img/water.png" alt=""> </div>
                <div class="menutwo"><h1>Water</h1><div class="menuname"> </div>
                <div class="menuprice"><p>Free</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/cola.png" alt=""> </div>
                <div class="menutwo"><h1>Cola</h1><div class="menuname"> </div>
                <div class="menuprice"><p>0.5$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/coffee.png" alt=""> </div>
                <div class="menutwo"><h1>Coffee</h1><div class="menuname"> </div>
                <div class="menuprice"><p>0.25$</p></div></div>
            </div>
        </div>
        <div id="2" class="hidden-div">
            <div class="innermenu">
                <div class="menuphoto"><img src="img/beer.png" alt=""> </div>
                <div class="menutwo"><h1>Beer</h1><div class="menuname"> </div>
                <div class="menuprice"><p>2$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/cider.png" alt=""> </div>
                <div class="menutwo"><h1>Cider</h1><div class="menuname"> </div>
                <div class="menuprice"><p>1.75$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/revo.png" alt=""> </div>
                <div class="menutwo"><h1>Revo</h1><div class="menuname"> </div>
                <div class="menuprice"><p>2.25$</p></div></div>
            </div>
        </div>
        <div id="3" class="hidden-div">
            <div class="innermenu">
                <div class="menuphoto"><img src="img/martini.png" alt=""> </div>
                <div class="menutwo"><h1>Martini</h1><div class="menuname"> </div>
                <div class="menuprice"><p>3.75$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/mojito.png" alt=""> </div>
                <div class="menutwo"><h1>Mojito</h1><div class="menuname"> </div>
                <div class="menuprice"><p>3.50$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/margarita.png" alt=""> </div>
                <div class="menutwo"><h1>Margarita</h1><div class="menuname"> </div>
                <div class="menuprice"><p>3.75$</p></div></div>
            </div>
        </div>
        <div id="4" class="hidden-div">
            <div class="innermenu">
                <div class="menuphoto"><img src="img/vodka.png" alt=""> </div>
                <div class="menutwo"><h1>Vodka</h1><div class="menuname"> </div>
                <div class="menuprice"><p>5$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/jager.png" alt=""> </div>
                <div class="menutwo"><h1>Jagermeister</h1><div class="menuname"> </div>
                <div class="menuprice"><p>5.50$</p></div></div>
            </div>
            <div class="innermenu">
                <div class="menuphoto"><img src="img/jackdaniels.png" alt=""> </div>
                <div class="menutwo"><h1>Jack Daniels</h1><div class="menuname"> </div>
                <div class="menuprice"><p>6.50$</p></div></div>
            </div>
        </div>
    </div>
  </main>
  <footer class="flex-footer">
    <div class="inner-footer">
        <h1>Created by Kyrylo <i class="fa-solid fa-code"></i></h1>
    </div>
    <div class="inner-footer2">
        <a href="https://www.instagram.com/nio.mion/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com/niomion"><i class="fa-brands fa-github"></i></a>
        <a href="https://t.me/niomion"><i class="fa-brands fa-telegram"></i></a>
    </div>
    </footer>
</body>
<script src="js/bar.js"></script>
<script src="js/script.js"></script>
</html>