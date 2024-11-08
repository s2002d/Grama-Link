<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/dashboard.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a></p>
    </div>

    <!-- Dashboard Section -->
    <section class="container dashboard">
        <h1>Dashboard</h1>
        <div class="dashboard-cards">
            <a href="appointment">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="File Complaint">
                <h2>Appointments</h2>
                <p>Schedule a meeting with your local Grama Niladhari</p>
            </div>
            </a>
            <a href="application">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="View Status">
                <h2>Applications and Certifications</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            </a>
            <a href="complaint">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="Complaint History">
                <h2>Complaints</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quia.</p>
            </div>
            </a><a href="fieldvisit">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="Complaint History">
                <h2>Field Visits</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quia.</p>
            </div>
            </a><a href="housenumber">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="Complaint History">
                <h2>House Number</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quia.</p>
            </div>
            </a>
            </a><a href="feedback">
            <div class="card">
                <img src="<?=ROOT?>/assets/images/filecomplaint.jpg" alt="Complaint History">
                <h2>Feedback & Suggestions</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quia.</p>
            </div>
        </div>
    </section>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
</body>
</html>
