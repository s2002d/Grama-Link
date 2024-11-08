<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grama-Link Login</title>
    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/auth/loginselect.css">
</head>
<body>
    <div class="login-container">
        <button class="close-button" onclick="closeLoginForm()"><i class="uil uil-multiply"></i></button>
        <div class="login-header">
            <img src="<?=ROOT?>/assets/images/gramalink_logo.png" alt="Grama-Link Logo" class="logo">
            <h1>Login to <span class="grama-link">GRAMA-LINK</span></h1>
        </div>
        <div id="loginFormContainer" class="login-form">
            <h2>Select User Type</h2>
            <div class="user-options">
                <button class="user-type" onclick="displayLoginForm('citizen')">Citizen</button>
                <button class="user-type" onclick="displayLoginForm('gn')">Grama Niladhari</button>
                <button class="user-type" onclick="displayLoginForm('agn')">Administrative Grama Niladhari</button>
            </div>
        </div>
    </div>

    <script src="<?=ROOT?>/assets/js/auth/loginselect.js"></script>
</body>
</html>
