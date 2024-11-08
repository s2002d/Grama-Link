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

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/housenumber.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="housenumber" class="crumb">House Number</a></p>
    </div>

    <div class="container house-number">
        <h2>Request House Number</h2>
        <form id="house-number-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" required>

            <label for="land-number">Land Number:</label>
            <input type="text" id="land-number" required>

            <label for="address">Address:</label>
            <input type="text" id="address" required>

            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" required>

            <button type="submit">Request House Number</button>
        </form>

        <div id="response" class="response"></div>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
</body>
</html>