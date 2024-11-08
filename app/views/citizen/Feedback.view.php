<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback & Suggestions</title>

    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Montserrat Font(Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/feedback.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="feedback" class="crumb">Feedback & Suggestions</a></p>
    </div>

    <!-- Feedback & Suggestions Section -->
    <div class="container feedback-container">
        <h2>We Value Your Feedback</h2>
        <p>Your suggestions help us improve the services we provide.</p>
        <form action="" method="POST" class="feedback-form">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Enter your name">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email">

            <label for="message">Your Feedback or Suggestion</label>
            <textarea id="message" rows="5" placeholder="Write your feedback here..."></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>

    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
</body>
</html>
