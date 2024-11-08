function displayLoginForm(userType) {
    let formHtml = '';

    switch (userType) {
        case 'citizen':
            formHtml = `
                <form class="form-content">
                    <h3>Citizen Login</h3>
                    <div class="form-group">
                        <label for="citizenNIC">NIC:</label>
                        <input type="text" id="citizenNIC" name="citizenNIC" placeholder="Enter your NIC" required>
                    </div>
                    <div class="form-group">
                        <label for="citizenPassword">Password:</label>
                        <input type="password" id="citizenPassword" name="citizenPassword" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                    <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="loginbutton">Login</button>
                    </div>
                </form>
                <button class="back-btn" onclick="goBack()">Back</button>
            `;
            break;
        case 'gn':
            formHtml = `
                <form class="form-content">
                    <h3>Grama Niladhari Login</h3>
                    <div class="form-group">
                        <label for="gnUsername">Username:</label>
                        <input type="text" id="gnUsername" name="gnUsername" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="gnPassword">Password:</label>
                        <input type="password" id="gnPassword" name="gnPassword" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                    <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="loginbutton">Login</button>
                    </div>
                </form>
                <button class="back-btn" onclick="goBack()">Back</button>
            `;
            break;
        case 'agn':
            formHtml = `
                <form class="form-content">
                    <h3>Administrative Grama Niladhari Login</h3>
                    <div class="form-group">
                        <label for="agnUsername">Username:</label>
                        <input type="text" id="agnUsername" name="agnUsername" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="agnPassword">Password:</label>
                        <input type="password" id="agnPassword" name="agnPassword" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                    <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="loginbutton">Login</button>
                    </div>
                </form>
                <button class="back-btn" onclick="goBack()">Back</button>
            `;
            break;
        default:
            formHtml = '<p>Please select a user type to proceed with login.</p>';
    }

    // Display the form
    document.getElementById('loginFormContainer').innerHTML = formHtml;
}

// Function to go back to user selection
function goBack() {
    const initialHtml = `
        <h2>Select User Type</h2>
        <div class="user-options">
            <button class="user-type" onclick="displayLoginForm('citizen')">Citizen</button>
            <button class="user-type" onclick="displayLoginForm('gn')">Grama Niladhari</button>
            <button class="user-type" onclick="displayLoginForm('agn')">Administrative Grama Niladhari</button>
        </div>
    `;
    document.getElementById('loginFormContainer').innerHTML = initialHtml;
}

function closeLoginForm() {
    window.history.back();
}

