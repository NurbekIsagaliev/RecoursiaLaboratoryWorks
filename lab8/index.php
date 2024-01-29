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

$turn = 1;

while ($nurbek->heroesLeft() && $roma->heroesLeft())
{
    $nurbek->attackPlayer($roma, $turn);
    $roma->attackPlayer($nurbek, $turn);
    $turn++;
}
$logger = Logger::getLogger();
echo '<pre>';
print_r($logger->getActivity());
echo '</pre>';
if ($nurbek->heroesLeft()) {
    echo '<p style="color: green;">' . $nurbek->getName() . ' won!!!!!!!!!</p>';
} else if ($roma->heroesLeft()) {
    echo '<p style="color: green;">' . $roma->getName() . ' won!!!!!!!!!</p>';
} else {
    echo '<p style="color: orange;">TIE!!!!</p>';
}