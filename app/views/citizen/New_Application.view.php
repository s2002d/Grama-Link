<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Application</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/new_application.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="application" class="crumb">Applications and Certifications</a> > <a href="new_application" class="crumb">New Application</a></p>
    </div>

    <!-- Dropdown for form selection -->
    <div id="formSelector" class="container form-box">
        <h2>New Application</h2>
        <div class="dropdown">
            <select id="formTypeDropdown" onchange="displaySelectedForm()">
                <option value="">Select Form Type</option>
                <option value="birth-registration">Birth Registration</option>
                <option value="bursary-scholarship">Bursary and Scholarship</option>
                <option value="pension">Pension</option>
                <option value="utility-connection">Utility Connection</option>
                <option value="school-admission">School Admission</option>
                <option value="grants-scholarship">Grants and Scholarship</option>
            </select>
        </div>

    </div>

    <!-- The container where the form will be displayed -->
    <div id="formContainer" class="container form-box">
        <h3>Select a form to fill out</h3>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
    <script src="<?=ROOT?>/assets/js/citizen/new_application.js"></script>
</body>
</html>
