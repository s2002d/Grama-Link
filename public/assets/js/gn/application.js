// Store the action function to execute after confirmation
let confirmAction;

// Show the modal with a custom message and action
function showModal(message, action) {
    document.getElementById("modalMessage").innerText = message;
    confirmAction = action;
    document.getElementById("confirmationModal").style.display = "block";
}

// Close the modal
function closeModal() {
    document.getElementById("confirmationModal").style.display = "none";
}

// Event listeners for confirm and cancel buttons
document.getElementById("confirmBtn").addEventListener("click", function() {
    confirmAction();
    closeModal();
});

document.getElementById("cancelBtn").addEventListener("click", closeModal);

// Action functions with confirmation modal
function viewApplication(id) {
    showModal("Are you sure you want to view application ID " + id + "?", function() {
        alert("Viewing application ID " + id);
    });
}

function approveApplication(id) {
    showModal("Are you sure you want to approve application ID " + id + "?", function() {
        alert("Application ID " + id + " approved!");
    });
}

function rejectApplication(id) {
    showModal("Are you sure you want to reject application ID " + id + "?", function() {
        alert("Application ID " + id + " rejected!");
    });
}

function submitForAGNApproval(id) {
    showModal("Are you sure you want to submit application ID " + id + " for AGN approval?", function() {
        alert("Application ID " + id + " submitted for AGN approval!");
    });
}
