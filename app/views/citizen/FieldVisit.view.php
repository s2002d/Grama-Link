<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Visit Requests</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font (Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/fieldvisit.css">
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="fieldvisit" class="crumb">Field Visit Requests</a></p>
    </div>

    <div class="visit-container">
        <div class="visit-card">
            <h1>Field Visit Requests</h1>

            <div class="visit-info">
                <p><strong>Date:</strong> 15th September 2024</p>
                <p><strong>Time:</strong> 10:00 AM - 11:00 AM</p>
                <p><strong>Grama Niladhari:</strong> Mr. John Doe</p>
                <p><strong>Reason:</strong> Property Inspection</p>
            </div>

            <div class="visit-info">
                <p><strong>Date:</strong> 24th January 2024</p>
                <p><strong>Time:</strong> 8:00 AM - 9:00 AM</p>
                <p><strong>Grama Niladhari:</strong> Mr. John Doe</p>
                <p><strong>Reason:</strong> New House Number</p>
            </div>

            <div class="actions">
                <button class="btn accept">Accept Visit</button>
                <button class="btn reschedule" id="triggerbutton" onclick="toggleRescheduleForm()">Request Reschedule</button>
            </div>

            <!-- Reschedule Form -->
            <div id="rescheduleform" class="reschedule-section">
                <h3>Reschedule Request</h3>
                <label for="new-date">Select New Date:</label>
                <input type="date" id="new-date" class="input-field">
                
                <label for="new-time">Select New Time:</label>
                <input type="time" id="new-time" class="input-field">
                
                <button class="btn submit-reschedule">Submit Reschedule Request</button>
            </div>
        </div>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/fieldvisit.js"></script>
</body>
</html>
