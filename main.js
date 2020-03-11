function burger-menu() {
    let menu = document.getElementById("menu-burger");;
   
    if (menu.style.display === "none") {
        menu.style.display = "block";
        button.innerHTML = "Close";
    } else {
        menu.style.display = "none";
        button.innerHTML = "Menu";
    }
}