<?php

include_once('./Logger.php');
include_once('./Player.php');
include_once('./Hero.php');

$names1 = ['Batman', 'Joker', 'Jason', 'Kabal', 'NoobSaibot'];
$names2 = ['SuperGirl', 'CapitanMarvel', 'MissMarvel', 'Black Widow', 'Herley Queen'];

$heroes1 = [];
$heroes2 = [];
for ($i = 0; $i < 5; $i++) {
    $heroes1[$i] = new Hero($names1[$i], rand(1000, 2500), rand(20, 170));
    $heroes2[$i] = new Hero($names2[$i], rand(1000, 2500), rand(20, 170));
}

$nurbek = new Player('Nurbek', $heroes1);
$roma = new Player('Roma', $heroes2);
$players = [
    'p1' => [
        'name' => $nurbek->getName(),
        'heroes' => $nurbek->getHeroesAsArray(),
    ],
    'p2' => [
        'name' => $roma->getName(),
        'heroes' => $roma->getHeroesAsArray(),
    ]
];
$turn = 1;

while ($nurbek->heroesLeft() && $roma->heroesLeft())
{
    $nurbek->attackPlayer($roma, $turn);
    $roma->attackPlayer($nurbek, $turn);
    $turn++;
}
$logger = Logger::getLogger();
$activity = $logger->getActivity();
// echo '<pre>';
// print_r($logger->getActivity());
// echo '</pre>';
// if ($nurbek->heroesLeft()) {
//     echo '<p style="color: green;">' . $nurbek->getName() . ' won!!!!!!!!!</p>';
// } else if ($roma->heroesLeft()) {
//     echo '<p style="color: green;">' . $roma->getName() . ' won!!!!!!!!!</p>';
// } else {
//     echo '<p style="color: orange;">TIE!!!!</p>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10</title>
</head>
<body>
    <table border="1">
        <tr id="player1">

        </tr>
        <tr id="player2">
            
        </tr>
    </table>
    <script>
        let players = <?php echo json_encode($players) ?>;
        let activity = <?php echo json_encode($activity) ?>;

        let trPlayer1 = document.getElementById('player1');
        let trPlayer2 = document.getElementById('player2');
        let tdNamePlayer1 = document.createElement('td');
        let tdNamePlayer2 = document.createElement('td');
        tdNamePlayer1.innerHTML = players.p1.name;
        tdNamePlayer2.innerHTML = players.p2.name;
        trPlayer1.appendChild(tdNamePlayer1);
        trPlayer2.appendChild(tdNamePlayer2);
        for (let i = 0; i < players.p1.heroes.length; i++) {
            let hero1 = players.p1.heroes[i];
            let hero2 = players.p2.heroes[i];

            let td1 = document.createElement('td');
            td1.innerHTML = hero1.name + '<br>HP: ' + hero1.hp + '<br>DMG: ' + hero1.dmg;
            td1.id = players.p1.name + '_' + hero1.name;

            let td2 = document.createElement('td');
            td2.innerHTML = hero2.name + '<br>HP: ' + hero2.hp + '<br>DMG: ' + hero2.dmg;
            td2.id = players.p2.name + '_' + hero2.name;

            trPlayer1.appendChild(td1);
            trPlayer2.appendChild(td2);
        }

        for (let i = 0; i < activity.length; i++) {
            setTimeout(function() {
                let tds = document.getElementsByTagName('td');
                for (let td of tds) {
                    if (!td.dead) {
                        td.style = '';
                    } else {
                        td.style = 'background-color: gray;';
                    }
                }
                let tdActive = document.getElementById(activity[i].playerActive + '_' + activity[i].heroActive);
                let tdPassive = document.getElementById(activity[i].playerPassive + '_' + activity[i].heroPassive);

                tdActive.style = 'background-color: green;';
                tdPassive.style = 'background-color: red;';
                tdPassive.innerHTML = activity[i].heroPassive + '<br>HP: ' + activity[i].heroPassiveHp + '<br>DMG: ' + activity[i].heroPassiveDmg;
                if (activity[i].heroPassiveHp <= 0) {
                    tdPassive.dead = true;
                }
            }, i*300);
        }
    </script>
</body>
</html>