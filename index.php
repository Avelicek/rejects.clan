<?php
// Zahrnutí funkce pro získání dat z API
include('getPlayerData.php');

// Zadej UUID hráče (můžeš to změnit, nebo ho načíst z formuláře nebo URL)
$uuid = "c8f20c1a1b2244e7b85ffb340e3819b9";  // Zde zadej UUID hráče

// Zavolání funkce pro získání dat o hráči
$playerData = getPlayerData($uuid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Info</title>
    <style>
        .member {
            text-align: center;
            margin: 20px;
        }

        .role-badge {
            background-color: #9c0606;
            color: white;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="members-container">
        <!-- Zobrazení dat hráče -->
        <div class="member-row">
            <div class="row-title" style="color: #970a0a;">LEADERSHIP</div>
            <div class="member-row-content">
                <div class="member">
                    <?php
                    // Zobrazení jména a skina hráče
                    if (isset($playerData['Avely_'])) {
                        echo "<h3>" . $playerData['Avely_'] . "</h3>";  // Jméno hráče
                        echo "<img src='" . $playerData['skinUrl'] . "' alt='Player Skin'>";  // Skin hráče
                    } else {
                        // Pokud došlo k chybě, zobrazí se chybová zpráva
                        echo "<p>Error: " . $playerData['error'] . "</p>";
                    }
                    ?>
                    <p><span class="role-badge">OWNER</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
