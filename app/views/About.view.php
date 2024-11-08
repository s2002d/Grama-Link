<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Grama-Link</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/about.css"> 
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="guesthome">
                <img src="<?=ROOT?>/assets/images/gramalink_logo.png" alt="gramalink_logo" style="height: 7rem; width:auto;">
            </a>
            <ul class="nav__menu">
                <li><a href="guesthome">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contactus">Contact Us</a></li>
                <li><a href="auth/loginselect" class="loginbutton">Login</a></li>
            </ul>
            <button class="open-menu-button"><i class="uil uil-bars"></i></button>
            <button class="close-menu-button"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    
    <header class="container about__header">
        <div class="header__container">
            <h1>About Grama-Link</h1>
            <p>
                Grama-Link is your gateway to access various government services, designed to simplify and improve the interaction between citizens and the local administration.
            </p>
        </div>
    </header>

    <section class="container about__section">
        <div class="about__container">
            <article class="about__content">
                <h2>Our Mission</h2>
                <p>Grama-Link aims to enhance the efficiency and accessibility of services provided by local government agencies. We strive to bridge the gap between citizens and administrative processes through digital transformation.</p>
            </article>
            <article class="about__content">
                <h2>Our Vision</h2>
                <p>Our vision is to create a streamlined, transparent, and user-friendly platform that empowers citizens and fosters trust between the community and government authorities.</p>
            </article>
            <article class="about__content">
                <h2>Our Team</h2>
                <p>Grama-Link is a collaborative effort between dedicated IT professionals, government representatives, and the community. We are committed to continuous improvement to meet the evolving needs of citizens.</p>
                <div class="team__container">
                <div class="teammember"><img src="<?=ROOT?>/assets/images/team/PMAT Srikantha.jpg" alt="Member1">
                <h4>PMAT Srikantha</h4></div>
                <div class="teammember"><img src="<?=ROOT?>/assets/images/team/DN Kodithuwakku.jpg" alt="Member2">
                <h4>DN Kodithuwakku</h4></div>
                <div class="teammember"><img src="<?=ROOT?>/assets/images/team/JMCK Jayathilake.jpg" alt="Member3">
                <h4>JMCK Jayathilake</h4></div>
                <div class="teammember"><img src="<?=ROOT?>/assets/images/team/LHLS Darshana.jpg" alt="Member4">
                <h4>LHLS Darshana</h4></div>
                </div>
            </article>
        </div>
    </section>
    </div>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__1">
                <a href="guesthome" class="footer__logo"><img src="<?=ROOT?>/assets/images/logo_white.png" alt="gramalink_logo" style="height: 5rem; width:auto;"></a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="guesthome">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contactus">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+94 78 779 2301</p>
                    <p>pmatsrikantha@gmail.com</p>
                </div>
                <ul class="footer__socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <small>&copy; 2024 Grama-Link. All rights reserved.</small>
        </div>
    </footer>

    <script src="<?=ROOT?>/assets/js/guestmain.js"></script>
</body>
</html>


