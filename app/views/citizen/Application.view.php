<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications and Certifications</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/application.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="application" class="crumb">Applications and Certifications</a></p>
    </div>

    <!-- Applications Section -->
     <div class="container wrapper">
    <div class="container applications-container">
        <h2>Your Applications</h2>

        <!-- New Application Button -->
        <div class="new-application-button">
            <a href="new_application" class="apply-btn">+ Apply for a New Service</a>
        </div>

        <table class="applications-table">
            <thead>
                <tr>
                    <th>Application Type</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Land Ownership Application</td>
                    <td>02 Sept 2024</td>
                    <td>Processing</td>
                </tr>
                <tr>
                    <td>Building Permit Application</td>
                    <td>15 Aug 2024</td>
                    <td>Approved</td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    
    <!-- Certifications Section -->
    <div class="container applications-container">
        <h2>Your Certifications</h2>

        <!-- New Certification Button -->
        <div class="new-application-button">
            <a href="new_certification" class="apply-btn">+ Apply for a New Certificate</a>
        </div>

        <table class="applications-table">
            <thead>
                <tr>
                    <th>Certificate Type</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Land Ownership Application</td>
                    <td>02 Sept 2024</td>
                    <td>Processing</td>
                </tr>
                <tr>
                    <td>Building Permit Application</td>
                    <td>15 Aug 2024</td>
                    <td>Approved</td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
</body>
</html>
