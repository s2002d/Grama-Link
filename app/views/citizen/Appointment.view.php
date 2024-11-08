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

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/citizen/appointment.css"> 
</head>
<body>
    <?php include '../app/views/citizen/partials/navbar.php'; ?>

    <!-- Breadcrumb Section -->
    <div class="container breadcrumb">
        <p><a href="home" class="crumb">Home</a> > <a href="dashboard" class="crumb">Dashboard</a> > <a href="appointment" class="crumb">Appointments</a></p>
    </div>


    <!-- Appointment Section -->

        <div class="main">
        <div class="container appointment_container">
            <div>

            </div>
            <h2>Book appointment</h2>
            <div class="form_container">
                <div class="form_left">
                    <label for="reason">REASON FOR VISIT</label>
                    <select id="reason">
                        <option value="empty"></option>
                        <option value="PR">Personal Reason</option>
                        <option value="OR">Offical Reason</option>
                    </select>

                    <label for="name">NAME</label>
                    <input type="text" id="name">

                    <label for="email">EMAIL ADDRESS</label>
                    <input type="email" id="email">

                    <label for="phone">PHONE NUMBER</label>
                    <input type="tel" id="phone">
                </div>
                <div class="form_right">
                    <div class="calender">
                        <div class="calender_header">
                            <span class="arrow" id="prev"><i class="uil uil-angle-double-left"></i></span> 
                            <span class="day" id="day1"></span>
                            <span class="day" id="day2"></span>
                            <span class="day" id="day3"></span>
                            <span class="day" id="day4"></span>
                            <span class="arrow" id="next"><i class="uil uil-angle-double-right"></i></span>
                        </div>

                        <div class="time_slots">
                            <div><button>9:45 am</button></div><div><button>9:45 am</button></div><div><button>9:45 am</button></div><div><button>9:45 am</button></div>
                            <div><button>10:30 am</button></div><div><button>10:30 am</button></div><div><button>10:30 am</button></div><div><button>10:30 am</button></div>
                            <div><button>10:45 am</button></div><div><button>10:45 am</button></div><div><button>10:45 am</button></div><div><button>10:45 am</button></div>
                            <div><button>11:30 am</button></div><div><button>11:30 am</button></div><div><button>11:30 am</button></div><div><button>11:30 am</button></div>

                            <button class="more">MORE ...</button> <button class="more">MORE ...</button> <button class="more">MORE ...</button> <button class="more">MORE ...</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_container">
                <button class="cancel">CANCEL</button>
                <button class="book-now">BOOK NOW </button>
            </div>
        </div>

        <div class="gif_container">
            <img src="<?=ROOT?>/assets/images/gif1.gif" alt="Appintment-gif" class="gif-image">
        </div>
    </div>

    <?php include '../app/views/citizen/partials/footer.php'; ?>
    
    <script src="<?=ROOT?>/assets/js/citizen/main.js"></script>
    <script src="<?=ROOT?>/assets/js/citizen/appointment.js"></script>
</body>
</html>