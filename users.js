document.addEventListener("DOMContentLoaded", function() {
    // Pokud už je uživatel uložený, zobrazíme jeho údaje
    const storedUser = localStorage.getItem("userData");
    
    if (storedUser) {
        const user = JSON.parse(storedUser);
        document.getElementById("user-info").classList.remove("hidden");
        document.getElementById("user-name").textContent = user.username;
        document.getElementById("user-skin-display").src = user.skin;
        document.getElementById("is-admin").textContent = user.isAdmin ? "Yes" : "No";
        document.getElementById("user-form").classList.add("hidden");
    } else {
        document.getElementById("user-form").classList.remove("hidden");
    }
});

// Funkce pro uložení uživatelských údajů
function saveUserData() {
    const username = document.getElementById("username").value;
    const skin = document.getElementById("user-skin").value;
    const isAdmin = document.getElementById("isAdmin").checked;

    const user = {
        username: username,
        skin: skin,
        isAdmin: isAdmin
    };

    // Uložení uživatele do localStorage
    localStorage.setItem("userData", JSON.stringify(user));

    // Zobrazit uživatelské informace
    document.getElementById("user-info").classList.remove("hidden");
    document.getElementById("user-name").textContent = user.username;
    document.getElementById("user-skin-display").src = user.skin;
    document.getElementById("is-admin").textContent = user.isAdmin ? "Yes" : "No";
    document.getElementById("user-form").classList.add("hidden");
}

// Funkce pro odhlášení uživatele
function logout() {
    // Odstranit uživatelská data z localStorage
    localStorage.removeItem("userData");

    // Skrýt uživatelské údaje a ukázat formulář
    document.getElementById("user-info").classList.add("hidden");
    document.getElementById("user-form").classList.remove("hidden");
}
