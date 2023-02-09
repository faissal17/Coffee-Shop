function addbtn() {
    document.getElementById("Meal-modal").reset();
    document.getElementById("meal-save-btn").style.display = "block";
    document.getElementById("meal-delete-btn").style.display = "none";
    document.getElementById("meal-update-btn").style.display = "none";
}

function edite(plat) {
    console.log(plat);
    document.getElementById("meal-save-btn").style.display = "none";
    document.getElementById("meal-delete-btn").style.display = "none";
    document.getElementById("meal-update-btn").style.display = "block";

    let id = document.getElementById("id");
    let title = document.getElementById("namee");
    let price = document.getElementById("pricee");
    let des = document.getElementById("descriptione");

    id.value = plat.id;
    title.value = plat.name;
    price.value = plat.price;
    des.value = plat.description;
}