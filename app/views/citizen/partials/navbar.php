<!-- Navbar Section -->
<nav>
    <div class="container nav__container">
        <a href="home">
            <img src="<?=ROOT?>/assets/images/gramalink_logo.png" alt="gramalink_logo" style="height: 7rem; width:auto;">
        </a>
        <ul class="nav__menu">
            <li><a href="home">Home</a></li>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contactus">Contact Us</a></li>
        </ul>
        <img src="<?=ROOT?>/assets/images/userpic.jpg" alt="profile picture" class="user-pic">
        <ul class="sub-menu">
            <div class="user-info">
                <a href="profile"><img src="<?=ROOT?>/assets/images/userpic.jpg" alt="profile picture"></a>
                <a href="profile"><h4>John Doe</h4></a>
            </div>
            <hr>
            <li><a href="profile">Edit Profile</a></li>
            <li><a href="changepassword">Change Password</a></li>
            <hr>
            <a href="../guesthome" class="logoutbutton">Logout</a>
        </ul>
        <button class="open-menu-button"><i class="uil uil-bars"></i></button>
        <button class="close-menu-button"><i class="uil uil-multiply"></i></button>
    </div>
</nav>
