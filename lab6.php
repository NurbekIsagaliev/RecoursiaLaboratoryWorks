<?php



$fileContent = file_get_contents('client.txt');


$clientsData = explode(';', $fileContent);


$clients = [];
$currentIndex = 0;
foreach ($clientsData as $clientItem) {
    $currentIndex++;
    if ($currentIndex % 3 === 1) {
        $fullName = $clientItem;
    } elseif ($currentIndex % 3 === 2) {
        $birthdate = $clientItem;
    } elseif ($currentIndex % 3 === 0) {
        $phoneNumber = $clientItem;
        $clients[] = [
            'ФИО' => $fullName,
            'Дата рождения' => $birthdate,
            'Телефон' => $phoneNumber,
        ];
    }
}


echo '<table border="1">';
echo '<tr><th>ФИО</th><th>Дата рождения</th><th>Телефон</th></tr>';
foreach ($clients as $client) {
    echo '<tr>';
    foreach ($client as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

