<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="assets/img/logo.png">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Deowangi</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Deowangi
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ __('/#home') }}" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ __('/#about') }}" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ __('/#products') }}" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link active-link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('login') }}" class="nav__link"><i class="ri-user-fill"></i></a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== CONTACT ====================-->
            <section class="product section container" id="contact">                
                
                    <div class="contact__box">
                        <h2 class="section__title-center">
                            Contact us
                        </h2>
                    </div>

                    <form action="https://formsubmit.co/andrefebriano1987@gmail.com" method="POST">
                        <div>
                            <input type="text" name="name" id="name" placeholder="Name" required>
                        </div>

                        <div>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>

                        <div class="full-width">
                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                        </div>

                        <div class="full-width">
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
                        </div>

                        <div class="full-width">
                            <button class="contact__btn" type="submit">
                                Send
                            </button>
                        </div>
                    </form>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section" style="background-color: #84644B;">
            <center>
                <h1 style="font-size: medium; color: white;">
                    © 2023 DEOWANGI ® MEREK DAGANG TERDAFTAR DARI DEOWANGI™ <br> MEREK DEOWANGI TERBATAS SEMUA HAK <br> WARALABA DEOWANGI YANG DIMILIKI DAN DIOPERASIKAN BERDASARKAN LISENSI  
                </h1>
            </center>
            <p class="footer__copy">&#169; Deowangi | Poliwangi</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
