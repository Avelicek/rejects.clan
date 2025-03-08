<?php
// Funkce pro získání dat o hráči podle UUID z VZGE API
function getPlayerData($uuid) {
    $url = "https://api.vzge.me/player/$uuid";  // Zde zadejte správnou URL endpointu pro získání dat o hráči.

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Kontrola, zda je odpověď validní
    if ($response === false) {
        return null;  // Pokud je chyba při volání API, vrátíme null
    }

    // Dekódujeme JSON odpověď
    $data = json_decode($response, true);
    return $data;
}
?>

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

        .members-container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 20px;
            background-color: #2c2c2c;
        }

        .member-row {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

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
            width: 200px;
            margin-bottom: 20px;
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

        .role-badge {
            color: white;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-top: 10px;
        }

    </style>
</head>
<body class="text-white">
    <div class="members-container">
        <?php
        // Úprava podle UUID členů
        $members = [
            ['uuid' => 'UUID_PLAYER_1', 'role' => 'OWNER'],
            ['uuid' => 'UUID_PLAYER_2', 'role' => 'ADMIN'],
            ['uuid' => 'UUID_PLAYER_3', 'role' => 'MODERATOR'],
        ];

        // Pro každý člen zobrazení jeho dat
        foreach ($members as $member) {
            $data = getPlayerData($member['uuid']);
            if ($data) {
                echo "<div class='member-row'>";
                echo "<div class='row-title' style='color: #970a0a;'>".$member['role']."</div>";
                echo "<div class='member'>";
                echo "<h3>".$data['name']."</h3>";  // Zobrazí jméno hráče
                echo "<img src='".$data['skinUrl']."' alt='Player Skin'>";  // Zobrazí skin hráče
                echo "<p><span class='role-badge' style='background-color: #9c0606;'>".$member['role']."</span></p>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p>Chyba při načítání dat pro hráče.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
