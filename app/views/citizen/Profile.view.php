<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Grama Link</h2>
            <nav>
                <a href="#">Dashboard</a>
                <a href="#">Profile</a>
                <a href="#">Field Visits</a>
                <a href="#">Applications</a>
                <a href="#">Complaints</a>
                <a href="#">Logout</a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="profile">
            <h1>Your Profile</h1>
            <div class="profile-info">
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="profile-pic">
                <div class="profile-details">
                    <h2 id="citizen-name">John Doe</h2>
                    <p>Email: <span id="citizen-email">johndoe@example.com</span></p>
                    <p>Phone: <span id="citizen-phone">+123 456 7890</span></p>
                    <button onclick="editProfile()">Edit Profile</button>
                </div>
            </div>
            
            <!-- Edit Profile Form (hidden by default) -->
            <form id="editForm" class="edit-form" onsubmit="saveProfile(event)">
                <label for="name">Name:</label>
                <input type="text" id="name" value="John Doe" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" value="johndoe@example.com" required>
                
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" value="+123 456 7890" required>
                
                <button type="submit">Save</button>
                <button type="button" onclick="cancelEdit()">Cancel</button>
            </form>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
