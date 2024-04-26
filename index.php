<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="img/logo.png" as="image">
    <script src="https://kit.fontawesome.com/dbcdb45ccb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&family=Tilt+Neon&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/img/logosite.ico">
    <title>Midnight Miami</title>
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
          <a class="logolink linkmain" href=""><img src="img/logo.png" class="merg1" alt="logo">
            <p class="fontneon">Midnight Miami</p>  </a>
        </div>
        <div>
            <a href="music.php">Music</a>
        </div>
        <div>
            <a href="bar.php">Bar</a>
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
        <a href="bar.php">Bar</a>
        <a href="galery.php">Gallery</a>
        <a href="contact.php">Contact</a>
      </div>
      <header class="flex-header">
       <div>
        <img src="img/head.png" alt="headpng" class="headpic animate__animated animate__fadeInLeft">
        <div class="text-overlay animate__animated animate__fadeInDownBig">
            <h1>Are you ready to feel the rhythm?</h1>
        </div>
        <div class="text-overlay2 animate__animated animate__fadeInUpBig">
            <h1>Our club is open <br>24/7</h1>
        </div>
       </div>
    </header>
    <main>
        <div class="block1">
            <div class="innerblock1">
                <h1>Who we are?</h1>
            </div>
            <div class="innerblock2">
                <div class="slideshow-container">
                    <div class="mySlides animate__animated animate__fadeIn">
                        <img src="img/club2.jpg" style="width:100%">
                    </div>
                  
                    <div class="mySlides animate__animated animate__fadeIn">
                        <img src="img/g10.jpg" style="width:100%">
                    </div>
                  
                    <div class="mySlides animate__animated animate__fadeIn">
                        <img src="img/club.jpg" style="width:100%">
                    </div>
                  
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>
            <div class="innerblock3">
                <p> Welcome to <strong>Midnight Miami</strong> - where the rhythm of the night meets the pulse of the city. 
                    Located in the heart of vibrant Miami, 
                    our club is a shrine to euphoria, where every beat resonates with our guests' dreams. </p>
                    <p>Enter a world where the dance floor becomes a stage and each guest is the star of their own nighttime odyssey. </p>
            </div>
        </div>
        
        <div class="block11">
            <div class="innerblock81">
                <h1>Experience Miami's Nightlife with Us!</h1>
            </div>
            <div class="innerblock82">
                <div class="slideshow-container2">
                    <div class="mySlides2 animate__animated animate__fadeIn">
                        <img src="img/g3.jpeg" style="width:100%">
                    </div>
                  
                    <div class="mySlides2 animate__animated animate__fadeIn">
                        <img src="img/g6.jpg" style="width:100%">
                    </div>
                  
                    <div class="mySlides2 animate__animated animate__fadeIn">
                        <img src="img/g4.jpg" style="width:100%">
                    </div>
                  
                    <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
                    <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
                </div>
                <br>
            </div>
            <div class="innerblock83">
                <p>  Embrace the rhythm of the city and dance the night away as our vibrant atmosphere and electrifying beats transport you to the heart of Miami's pulsating nightlife scene. </p>
                   <p> Whether you're looking for an escape from the everyday or an exciting adventure under the moonlit sky, our club promises an experience like no other. </p>
                  <p>  Join us and let your soul be lifted into the arms of Miami's nighttime allure.</p>
            </div>
        </div>

        <div class="block2">
            <div class="innerblock21">
                <h1>What can we offer?</h1>
            </div>    
            <div class="innerblock22">
                <div class="innerblock23">
                    <div class="innerblock231">
                    <h1><i class="fa-solid fa-music"></i> Music</h1>
                    <p>Our DJs are magicians who create a magical atmosphere every night. From electro to hip-hop, from classical to modern hits, our music masters know how to make every night unforgettable. You will plunge into the world of rhythms and melodies, 
                        where each track is an invitation to dance and feel the lively energy.</p>
                    </div>
                       <div class="buttoni"> <button type="button" onclick="document.location='music.html'">See</button> </div>
                </div>
                <div class="innerblock23">
                    <div class="innerblock231"> <h1><i class="fa-solid fa-martini-glass"></i> Bar</h1>
                    <p>Our bar is an oasis of taste and pleasure where you can enjoy the best cocktails and drinks. Our skilled bartenders expertly mix each drink to create true masterpieces that reveal new flavors and experiences. From classic cocktails to signature creations,
                         every drink in our bar is a journey into the world of extasy.</p>
                        </div>
                         <div class="buttoni"> <button type="button" onclick="document.location='bar.html'">See</button> </div>
                </div>
                <div class="innerblock23">
                    <div class="innerblock231"> <h1><i class="fa-solid fa-star"></i> Party</h1>
                    <p>At Midnight Miami, every night is a party that leaves an unforgettable experience. Our theme parties, exciting shows and live performances make every visit to the club unique. 
                        We always have something to entertain your soul and make every night unforgettable.</p>
                    </div>
                        <div class="buttoni"> <button type="button" onclick="document.location='galery.html'">See</button> </div>
                </div>
            </div>
        </div>

        <div class="block4">
            <div class="review1">
                <div class="innerblock41">
                    <h1>Reviews</h1>
                </div>
        
                <div class="innerblock42">
                    <div class="review">
                        <div><img src="img/lebron.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>LeBron James</h1>
                            <p>This place is my sunshine!</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 4</h1>
                            <p>I love drinks in that place</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 4</h1>
                            <p>Good spot to chill out</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 4</h1>
                            <p>This party sucks, i hate these people</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/pespatron.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Pes Patron</h1>
                            <p>"Woof woof woof"</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review1">
                <div class="innerblock41">
                    <h1>Reviews</h1>
                </div>
        
                <div class="innerblock42">
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 1</h1>
                            <p>It was perfect.</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 34</h1>
                            <p>I guess that soup was spoiled...</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unkown Man 14</h1>
                            <p>Not bad at all!</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 88</h1>
                            <p>Feels better after hard day.</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="review">
                        <div><img src="img/user.png" style="width: 100px; height: 100px;" alt="avatar"></div>
                        <div>
                            <h1>Unknown Man 5</h1>
                            <p>"Nice!"</p>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block3">
            <div class="innerfblock">
                <div class="innerblock31">
                    <h1>Where you can find us?</h1>
                </div>
                <div class="innerblock32">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114937.45443914585!2d-80.28779023462164!3d25.81032149040667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a6172bfeddb9%3A0x37be1741259463eb!2z0JzQsNGP0LzRli3QkdGW0YcsINCk0LvQvtGA0LjQtNCwLCDQodC_0L7Qu9GD0YfQtdC90ZYg0KjRgtCw0YLQuCDQkNC80LXRgNC40LrQuA!5e0!3m2!1suk!2sua!4v1713639480537!5m2!1suk!2sua"
                        width="600" height="450" style="border:0; margin: auto;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="innerfblock2">
                <div class="innerblock31">
                    <h1>Location</h1>
                </div>
                <div class="innerblock32">
                    <p>Our night club located at the vibrant Ocean Drive, our nightclub sits amidst the pulsating heart of Miami Beach. </p> 
                    <p>Nestled along the sandy shores of Florida, our venue offers a mesmerizing view of the azure waters of the Atlantic Ocean. </p>
                    <p>With its prime location and lively atmosphere, our club is the ultimate hotspot for those seeking an unforgettable night out in Miami.</p>
                </div>
            </div>
        </div>

        <div class="block5">
            <div class="innerblock51">
                <h1>Subscribe to our newsletter!</h1>
            </div>
            <div class="innerblock52">
            <form>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name...">
                    <label id="err1">Please provide your name!</label>
                    <label style="" for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="example@mail.com">
                    <label id="err2">Please provide your email!</label>
                    <input type="submit" value="Submit">
                </form>
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
<script src="js/carousel.js"></script>
<script src="js/script.js"></script>
<script src="js/database.js"></script>
</html>