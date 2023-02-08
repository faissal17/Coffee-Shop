function addbtn() {
    document.getElementById("Meal-modal").reset();
    document.getElementById("meal-save-btn").style.display = "block";
    document.getElementById("meal-delete-btn").style.display = "none";
    document.getElementById("meal-update-btn").style.display = "none";
}

function edit() {
    document.getElementById("meal-save-btn").style.display = "none";
    document.getElementById("meal-delete-btn").style.display = "block";
    document.getElementById("meal-update-btn").style.display = "block";
}
