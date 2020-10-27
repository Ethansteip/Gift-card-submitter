<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccesstype('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1FQzUL8yBbmiVXeva7biTaB67AMb-dAYy7GGBt3tqWwI";

$range = "Gift_Cards!A2:C2";
$values = [
    ["666666", "666", "$66"],
];

$body = new Google_Service_Sheets_Valuerange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->update(
    $spreadsheetId,
    $range,
    $body,
    $params

);



// Read data from the spreadsheet
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();

/*
if(empty($values)) {
    print "No data found. \n";
} else {
    $mask = "%10s %-10s %s\n";
    foreach ($values as $row) {
        echo sprintf($mask, $row[2], $row[1], $row[0]);
    }
}
*/

