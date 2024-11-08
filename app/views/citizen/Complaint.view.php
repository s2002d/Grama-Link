<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/complaint.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="complaint" class="crumb">Complaints</a></p>
    </div>

    <!-- Compalints Section -->
    <div class="container wrapper">
    <div class="container complaints-container">
        <h2>Your Complaints</h2>

        <!-- New Complaint Button -->
        <div class="new-complaint-button">
            <a href="new_complaint" class="apply-btn">+ Submit New Complaint</a>
        </div>

        <table class="complaints-table">
            <thead>
                <tr>
                    <th>Complaint Type</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Complaint 1</td>
                    <td>02 Sept 2024</td>
                    <td>Processing</td>
                    <td><a href="view_complaint">View Complaint</a></td>
                </tr>
                <tr>
                    <td>Complaint 2</td>
                    <td>15 Aug 2024</td>
                    <td>Approved</td>
                    <td><a href="view_complaint">View Complaint</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
</body>
</html>
