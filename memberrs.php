<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LD │ Clan Members</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2c2c2c;
        }

        /* Styly pro odkazy v navigaci */
        .nav-link {
            font-size: 0.875rem;
            color: #6f6f70;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link:hover {
            color: #e92fd0;
            transform: translateX(5px);
        }

        /* Horní sekce s pozadím */
        .top-section {
            background-image: url('https://i.imgur.com/ZCHPthN.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 35vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        /* Navbar */
        nav {
            position: relative;
            z-index: 10;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        /* Flexbox pro členy */
        .members-container {
            display: flex;
            flex-direction: column; /* Zajistí, že členové budou v různých řádcích */
            gap: 2rem;
            padding: 20px;
            background-color: #2c2c2c; /* Nastavení šedého pozadí pro tuto sekci */
        }

        /* Jednoduché zobrazení pro každý řádek s názvem */
        .member-row {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Nadpis pro řádek */
        .row-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e92fd0;
            text-align: center;
            margin-bottom: 10px;
        }

        .member-row-content {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .member {
            text-align: center;
            width: 200px; /* Nastavíme šířku každého člena */
            margin-bottom: 20px; /* Přidáme mezeru mezi řádky */
        }

        .member img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .member h3 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .member p {
            font-size: 0.9rem;
            color: #6f6f70;
        }
    </style>
</head>
<body class="text-white">

    <!-- Navbar -->
    <nav class="bg-[#060608] p-4 flex items-center">
        <div class="flex items-center space-x-4">
            <!-- Logo a text -->
            <img src="https://i.imgur.com/SwkMFE2.png" alt="Logo" class="w-20 h-20 rounded-lg">
            <span class="font-bold text-lg uppercase">LOVELY DOMINANCE</span>
        </div>

        <!-- Navigační odkazy (zůstanou na levé straně) -->
        <div class="ml-20 flex space-x-4 text-lg">
            <a href="home.html" class="nav-link font-bold">HOME</a>
            <a href="clan-members.html" class="nav-link font-bold">CLAN MEMBERS</a>
            <a href="informations.html" class="nav-link font-bold">INFORMATIONS</a>
            <a href="applications.html" class="nav-link font-bold">APPLICATIONS</a>
        </div>
    </nav>

    <!-- Horní sekce s obrázkovým pozadím -->
    <div class="top-section">
        <h1 class="text-8xl font-bold text-white transition-all duration-300 hover:text-red-500">CLAN MEMBERS</h1>
    </div>




    
<!-- Sekce s členy -->
<div class="members-container">
    <!-- LEADERSHIP -->
    <div class="member-row">
        <div class="row-title" style="color: #970a0a;">LEADERSHIP</div>
        <div class="member-row-content">
            <div class="member">
                <h3>Member 1</h3>
                <img src="https://vzge.me/uploads/skin1.png" alt="">
                <p><span class="role-badge" style="background-color: #9c0606;">OWNER</span></p>
            </div>
        </div>
    </div>

    <!-- Řádek 2: Admini -->
    <div class="member-row">
        <div class="row-title" style="color: #cc3333;">STAFF</div>
        <div class="member-row-content">
            <div class="member">
                <h3>Member 2</h3>
                <img src="https://vzge.me/uploads/skin2.png" alt="Member 2">
                <p><span class="role-badge" style="background-color: #ff0000;">Role: Admin</span></p>
            </div>
            <div class="member">
                <h3>Member 3</h3>
                <img src="https://vzge.me/uploads/skin3.png" alt="Member 3">
                <p><span class="role-badge" style="background-color: #ff0000;">Role: Admin</span></p>
            </div>
        </div>
    </div>

    <!-- Řádek 3: Moderátoři -->
    <div class="member-row">
        <div class="row-title" style="color: #a625ce;">MEMBERS</div>
        <div class="member-row-content">
            <div class="member">
                <h3>Member 4</h3>
                <img src="https://vzge.me/uploads/skin4.png" alt="Member 4">
                <p><span class="role-badge" style="background-color: #ff0000;">Role: Moderator</span></p>
            </div>
            <div class="member">
                <h3>Member 5</h3>
                <img src="https://vzge.me/uploads/skin5.png" alt="Member 5">
                <p><span class="role-badge" style="background-color: #ff0000;">Role: Moderator</span></p>
            </div>
        </div>
    </div>

</div>

<style>
    /* CSS pro obdélník kolem textu "Role: Majitel", "Role: Admin", atd. */
    .role-badge {
        color: white;  /* Barva textu */
        padding: 5px 10px;  /* Okraje kolem textu */
        border-radius: 8px;  /* Zaoblení rohů */
        font-size: 0.9rem;  /* Velikost písma */
        margin-top: 10px;  /* Vzdálenost mezi obrázkem a badge */
    }

    h3 {
        margin-bottom: 10px;  /* Vzdálenost mezi jménem a obrázkem */
    }

    .member {
        text-align: center;  /* Umožní zarovnání obrázku a textu */
    }

    .member img {
        width: 100px;  /* Velikost obrázku */
        height: 100px;  /* Výška obrázku */
        margin-top: 10px;  /* Vzdálenost mezi jménem a obrázkem */
    }
</style>
