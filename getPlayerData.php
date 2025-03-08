<?php

// Funkce pro získání dat o hráči podle UUID z VZGE API
function getPlayerData($uuid) {
    // URL endpointu VZGE API pro získání informací o hráči podle UUID
    // Tento URL adresu nahraď URL, která je poskytována VZGE API (zkontroluj dokumentaci API)
    $url = "https://api.vzge.com/player/$uuid"; // Změň URL podle dokumentace VZGE API
    
    // Inicializace cURL
    $ch = curl_init();
    
    // Nastavení cURL pro URL požadavek
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Nastaví, aby cURL vrátil odpověď
    $response = curl_exec($ch);  // Spuštění požadavku
    curl_close($ch);  // Uzavření cURL požadavku

    // Zkontroluj, jestli požadavek proběhl úspěšně
    if ($response === false) {
        return ['error' => 'Unable to fetch data from VZGE API.'];
    }

    // Dekóduj JSON odpověď z API
    $data = json_decode($response, true);

    // Zkontroluj, zda byla vrácena data
    if (isset($data['name']) && isset($data['skinUrl'])) {
        // Pokud data obsahují jméno a skinUrl, vrať je
        return [
            'name' => $data['name'],       // Jméno hráče
            'skinUrl' => $data['skinUrl']  // URL na skin hráče
        ];
    }

    // Pokud není nalezen hráč nebo jsou data nevalidní
    return ['error' => 'Player data not found or invalid UUID.'];
}
?>
