function addbtn() {
    document.getElementById("Meal-modal").reset();
    document.getElementById("meal-save-btn").style.display = "block";
    document.getElementById("meal-delete-btn").style.display = "none";
    document.getElementById("meal-update-btn").style.display = "none";
}

function edit(plat) {
    console.log(plat);
    document.getElementById("meal-save-btn").style.display = "none";
    document.getElementById("meal-delete-btn").style.display = "block";
    document.getElementById("meal-update-btn").style.display = "block";

    let title = document.getElementById("name");
    let price = document.getElementById("price");
    let des = document.getElementById("description");

    title.value = plat.name;
    price.value = plat.price;
    des.value = plat.description;
}
