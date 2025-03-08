<?php
// Funkce pro získání dat o hráči z VZGE API
function getPlayerData($uuid) {
    $apiUrl = "https://vzge.me/api/player/" . $uuid; // URL pro API, kde získáme data hráče
    $response = file_get_contents($apiUrl); // Načteme JSON odpověď z API
    return json_decode($response, true); // Dekódujeme JSON do pole
}

// Definice členů s UUID a role
$members = [
    ['uuid' => 'UUID_PLAYER_1', 'role' => 'OWNER', 'color' => '#970a0a'],
    ['uuid' => 'UUID_PLAYER_2', 'role' => 'ADMIN', 'color' => '#cc3333'],
    ['uuid' => 'UUID_PLAYER_3', 'role' => 'MODERATOR', 'color' => '#a625ce'],
];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clan Members</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2c2c2c;
        }
        .role-badge {
            color: white;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-top: 10px;
        }
        h3 {
            margin-bottom: 10px;
        }
        .member {
            text-align: center;
        }
        .member img {
            width: 100px;
            height: 100px;
            margin-top: 10px;
        }
    </style>
</head>
<body class="text-white">

<div class="members-container">
    <?php foreach ($members as $member): ?>
        <?php
        // Načteme data pro každého člena
        $data = getPlayerData($member['uuid']);
        if ($data): ?>
            <!-- Dynamicky generovaný řádek pro člena -->
            <div class="member-row">
                <div class="row-title" style="color: <?= $member['color'] ?>;">
                    <?= strtoupper($member['role']) ?>
                </div>
                <div class="member-row-content">
                    <div class="member">
                        <h3><?= $data['name'] ?></h3> <!-- Zobrazí jméno -->
                        <img src="<?= $data['skinUrl'] ?>" alt="<?= $data['name'] ?> Skin"> <!-- Zobrazí skin -->
                        <p><span class="role-badge" style="background-color: <?= $member['color'] ?>;">
                            <?= strtoupper($member['role']) ?>
                        </span></p>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <p>Chyba při načítání dat pro hráče <?= $member['uuid'] ?>.</p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

</body>
</html>
