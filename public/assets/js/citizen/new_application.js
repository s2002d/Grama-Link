// Function to handle dropdown change and form display
function displaySelectedForm() {
  const dropdown = document.getElementById("formTypeDropdown");
  const formType = dropdown.value;
  const formContainer = document.getElementById("formContainer");

  let formHtml = "";

  if (formType === "") {
    formContainer.innerHTML = "<h3>Select a form to fill out</h3>";
    return;
  }

  // Show the selected form based on the dropdown value
  switch (formType) {
    case "birth-registration":
      formHtml = `
      <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>Birth Registration Application</h2>
                </div>
                <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="mName">Mother's Name:</label>
                            <input type="text" id="mName" name="mName" required>
                        </div>

                        <div class="form-group">
                            <label for="fName">Father's Name:</label>
                            <input type="text" id="fName" name="fName" required>
                        </div>

                        <div class="form-group">
                            <label for="bplc">Place of Birth of Child:</label>
                            <input type="text" id="bplc" name="bplc" required>
                        </div>

                        <div class="form-group">
                            <label for="gen">Child's Gender:</label>
                            <input type="text" id="gen" name="gen" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    case "bursary-scholarship":
      formHtml = `
                <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>Bursary and Scholarship Application</h2>
                </div>
                <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="mName">Mother's Name:</label>
                            <input type="text" id="mName" name="mName" required>
                        </div>

                        <div class="form-group">
                            <label for="fName">Father's Name:</label>
                            <input type="text" id="fName" name="fName" required>
                        </div>

                        <div class="form-group">
                            <label for="nos">Number of Sibilings:</label>
                            <input type="text" id="nos" name="nos" required>
                        </div>

                        <div class="form-group">
                            <label for="scl">Name of the School/University:</label>
                            <input type="text" id="scl" name="scl" required>
                        </div>

                        <div class="form-group">
                            <label for="inc">Annual Income of the family:</label>
                            <input type="text" id="inc" name="inc" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    case "pension":
      formHtml = `
                <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>Pension Application</h2>
                </div>
                <div class="form-content">
                    <h3>Please fill out this form:</h3>
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="job">Applicant's Occupation:</label>
                            <input type="text" id="job" name="job" required>
                        </div>

                        <div class="form-group">
                            <label for="dor">Date of Retirement:</label>
                            <input type="date" id="dor" name="dor" required>
                        </div>

                        <div class="form-group">
                            <label for="age">Applicant's Age:</label>
                            <input type="text" id="age" name="age" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    case "utility-connection":
      formHtml = `
                <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>Utility Connection Application</h2>
                </div>
                <div class="form-content">
                    <h3>Please fill out this form:</h3>
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dob">Birthday:</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    case "school-admission":
      formHtml = `
                <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>School Admission Application</h2>
                </div>
                <div class="form-content">
                    <h3>Please fill out this form:</h3>
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dis">Distance from Home to School(km):</label>
                            <textarea id="dis" name="dis" placeholder="Enter Distance(km)" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="old">Is Father/Mother a school Alumnus?:</label>
                            <textarea id="old" name="old" placeholder="Yes or No" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="time">If Yes,Period of time in school:</label>
                            <textarea id="time" name="time" placeholder="Ex:2008-2021" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="age>Age of Child:</label>
                            <input type="text" id="age" name="age" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    case "grants-scholarship":
      formHtml = `
                <main class="form">
        <section class="form-section">
            <div class="form-container">
                <div class="form-sidebar">
                    <h2>Grants and Scholarship Application</h2>
                </div>
                <div class="form-content">
                    <h3>Please fill out this form:</h3>
                    <form>
                        <div class="form-group">
                            <label for="nicNumber">NIC Number:</label>
                            <input type="text" id="nicNumber" name="nicNumber" placeholder="Enter your NIC Number"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="initialName">Name With Initial:</label>
                            <input type="text" id="initialName" name="initialName"
                                placeholder="Enter your Name with Initial" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" placeholder="Enter your Address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="mName">Mother's Name:</label>
                            <input type="text" id="mName" name="mName" required>
                        </div>

                        <div class="form-group">
                            <label for="fName">Father's Name:</label>
                            <input type="text" id="fName" name="fName" required>
                        </div>

                        <div class="form-group">
                            <label for="nos">Number of Sibilings:</label>
                            <input type="text" id="nos" name="nos" required>
                        </div>

                        <div class="form-group">
                            <label for="scl">Name of the School/University:</label>
                            <input type="text" id="scl" name="scl" required>
                        </div>

                        <div class="form-group">
                            <label for="inc">Annual Income of the family:</label>
                            <input type="text" id="inc" name="inc" required>
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
            `;
      break;
    default:
      formHtml = "<h3>Select a form to fill out</h3>";
  }

  formContainer.innerHTML = formHtml;
}
