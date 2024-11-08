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

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/contactus.css"> 
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
    
    <header class="container contact__header">
        <div class="header__container">
            <h1>Contact Us</h1>
            <p>Have questions or need assistance? Get in touch with us!</p>
        </div>
    </header>

    <section class="container contact__section">
        <div class="contact__container">
            <form action="#" class="contact__form">
                <div class="form__group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" placeholder="Enter your name">
                </div>
                <div class="form__group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form__group">
                    <label for="message">Message:</label>
                    <textarea id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="form__submit">Submit</button>
            </form>

            <div class="contact__info">
                <h2>Contact Information</h2>
                <p>Email: support@gramalink.gov</p>
                <p>Phone: +94 123 456 789</p>
                <p>Address: 123 Government Road, City, Country</p>
            </div>
        </div>
    </section>

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



