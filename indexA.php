<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styless.css">
        <link rel="stylesheet" href="login.html">

    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="logo image">
                    Sushi
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list ">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About Us</a>
                        </li>

                        <li class="nav__item">
                            <a href="#popular" class="nav__link">Popular
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#recently" class="nav__link">Recently</a>
                        </li>
                        <li class="nav__item">
                            <a href="" class="nav__link">Dashboard</a>
                        </li>
                    </ul>
                    <!-- Close button -->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                    <img src="assets/img/leaf-branch-4.png" alt="nav image" class="nav__img-1">
                        <img src="assets/img/leaf-branch-3.png" alt="nav image" class="nav__img-2">
                    </div>
                    <div class="nav__buttons">
                        <!-- Theme change button -->
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                        <!-- Toggle button -->
                        <div class="nav__toggle" id="nav-toggle">
                            <i class="ri-apps-2-line"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
               <div class="home__container container grid">
                 <img src="assets/img/home-sushi-rolls.png" alt="home image" class="home__img">
                 <div class="home__data">
                     <h1 class="home__title">
                        Enjoy Delicious 

                        <div>
                            <img src="assets/img/home-sushi-title.png" alt="home image"> 
                            Sushi Food
                        </div>
                     </h1>

                     <p class="home__description">
                        Enjoy a good dinner with the best dishes in 
                        the restaurant and improve your day.
                     </p>

                     <a href="#" class="button">
                        Order Now <i class="ri-arrow-right-line"></i>
                     </a>
                 </div>
               </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container container grid">
                    <div class="about__data">
                        <span class="section__subtitle">About Us</span>
                        <h2 class="section__title about__title">
                            <div>
                                We Provide 
                            <img src="assets/img/about-sushi-title.png" alt="about image"> 
                            </div>

                                Healthy Food
                        </h2>

                        <p class="about__description">
                            Food comes to us from our relatives, whether they 
                            have wings or roots. This is how we consider food, 
                            it also has a culture. It has a history that passes 
                            from generation to generation.
                        </p>
                    </div>

                    <img src="assets/img/about-sushi.png" alt="about image" class="about__img">
                </div> 
                 
                 <img src="assets/img/leaf-branch-1.png" alt="about image" class="about__leaf">
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
               <spam class="section__subtitle">The Best Food</spam> 
                <h2 class="section__title">Popular Dishes</h2>

                <div class="popular__container container grid">
                    
                    <article class="popular__card">
                        <img src="assets/img/popular-onigiri.png" alt="popular image" class="popular__img">

                        <h3 class="popular__name">Onigiri</h3>
                        <span class="popular__description">Japanese Dish</span>
                        <span class="popular__price">$10.99</span>
                        <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="popular__card">
                        <img src="assets/img/popular-spring-rols.png" alt="popular image" class="popular__img">

                        <h3 class="popular__name"> Spring Rolls</h3>
                        <span class="popular__description">Japanese Dish</span>
                        <span class="popular__price">$15.99</span>
                        <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="popular__card">
                        <img src="assets/img/popular-sushi-rolls.png" alt="popular image" class="popular__img">

                        <h3 class="popular__name">Sushi Rolls</h3>
                        <span class="popular__description">Japanese Dish</span>
                        <span class="popular__price">$19.99</span>
                        <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== RECENTLY ====================-->
            <section class="recently section" id="recently">
                <div class="recently__container container grid">
                   <div class="recently__data">
                    <span class="section__subtitle">Recently Added</span>
                    <h2 class="section__title">
                        Sushi Samurai <br>
                        Salmón Cheese
                    </h2>

                    <p class="recently__description">
                        Take a look at what's new. And do not deprive 
                        yourself of a good meal, enjoy and be happy.
                    </p>

                    <a href="#" class="button">
                        Order Now <i class="ri-arrow-right-line"></i>
                    </a>
                    <img src="assets/img/spinach-leaf.png" alt="recently image" class="recently__data-img">
                   </div> 

                   <img src="assets/img/recently-salmon-sushi.png" alt="recently image" class="recently__img">
                </div>
                <img src="assets/img/leaf-branch-2.png" alt="recently image" class="recently__leaf-l">
                <img src="assets/img/leaf-branch-3.png" alt="recently image" class="recently__leaf-2"> 
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section">
                <div class="newsletter__container container">
                   <div class="newsletter__content grid">
                    <img src="assets/img/newsletter-sushi.png" alt="newsletter image" class="newsletter__img">

                    <div class="newsletter__data">
                        <span class="section__subtitle"></span>
                        <h2 class="section__title">
                            Subscribe For <br>
                            Offer Updates
                        </h2>

                        <form action="" class="newsletter__form">
                            <input type="email" placeholder="Enter email"class="newsletter_input">

                            <button class="button newsletter__button">
                                Subscribe <i class="ri-send-plane-line"></i>
                            </button>
                        </form> 
                    </div>
                   </div> 

                   <img src="assets/img/spinach-leaf.png" alt="newsletter image" class="newsletter__spinach">
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__container container grid">
                 <div>
                    <a href="#" class="footer__logo">
                        <img src="assets/img/logo.png" alt="logo image">
                        Sushi
                    </a>
                    <p class="footer__description">
                        Food for the body is not <br>
                        enough. There must be food <br>
                        for the soul.
                    </p>
                 </div>

                 <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Main Menu</h3>

                        <ul class="footer__links">
                          <li>
                            <a href="#" class="footer__link">About</a>
                          </li> 

                          <li>
                            <a href="#" class="footer__link">Menus</a>
                          </li>  

                          <li>
                            <a href="#" class="footer__link">Offer</a>
                          </li>  

                          <li>
                            <a href="#" class="footer__link">Events</a>
                          </li>  
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Information</h3>

                        <ul class="footer__links">
                          <li>
                            <a href="#" class="footer__link">Contact</a>
                          </li> 

                          <li>
                            <a href="#" class="footer__link">Order & Returns</a>
                          </li>  

                          <li>
                            <a href="#" class="footer__link">Videos</a>
                          </li>  
                          
                          <li>
                            <a href="#" class="footer__link">Reservation</a>
                          </li>  
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Address</h3>

                        <ul class="footer__links">
                          <li class="footer__information">
                            Av. Hacienda 1234 <br>
                            Lima 4321, Perú 
                          </li> 

                          <li class="footer__information">
                            9AM - 11PM
                          </li>  
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Social Media</h3>

                        <ul class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class="ri-facebook-box-line"></i>
                            </a>

                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>

                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                          
                        </ul>
                    </div>
                 </div>
                 <img src="assets/img/spring-onion.png" alt="footer image" class="footer__onion">
                 <img src="assets/img/spinach-leaf.png" alt="footer image" class="footer__spinach">
                 <img src="assets/img/leaf-branch-4.png" alt="footer image" class="footer__leaf">
            </div>

            <div class="footer__info container">
                <div class="footer__card">
                    <img src="assets/img/footer-card-1.png" alt="footer image">
                    <img src="assets/img/footer-card-2.png" alt="footer image">
                    <img src="assets/img/footer-card-3.png" alt="footer image">
                    <img src="assets/img/footer-card-4.png" alt="footer image">
                </div>
              
            </div>
            
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>


        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>