<?php


interface HeroInterface
{
    public function attack(HeroInterface $_enemyHero) : void;

    public function takeDmg(int $_dmg) : void;
}

interface PlayerInterface
{
    public function attackPlayer(PlayerInterface $_enemyPlayer, int $_turn) : void;

    public function heroesLeft() : bool;
}

class Player implements PlayerInterface
{
    private $name = null;

    private $heroes = [];

    public function __construct(string $_name, array $_heroes)
    {
        $this->name = $_name;
        $this->heroes = $_heroes;
    }

    public function attackPlayer(PlayerInterface $_enemyPlayer, int $_turn) : void
    {
        echo '----------------------------Round ' . $_turn . '----------------------------------<br>';
        foreach ($this->heroes as $hero) {
            foreach ($_enemyPlayer->getHeroes() as $enemyHero) {
                if ($hero->getHp() > 0 && $enemyHero->getHp() > 0) {
                    echo $hero->getName() . '(DMG: ' . $hero->getDmg() . '; HP: ' . $hero->getHp() . ') attacks ' . $enemyHero->getName() . ' (DMG: ' . $enemyHero->getDmg() . '; HP: ' . $enemyHero->getHp() . ') <br>';
                    $hero->attack($enemyHero);
                }
            }
        }
        echo '--------------------------------------------------------------<br>';
    }

    public function heroesLeft() : bool
    {
        foreach ($this->heroes as $hero) {
            if ($hero->getHp() > 0) {
                return true;
            }
        }

        return false;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $_name) : void
    {
        $this->name = $_name;
    }

    public function getHeroes() : array
    {
        return $this->heroes;
    }

    public function setHeroes(array $_heroes) : void
    {
        $this->heroes = $_heroes;
    }
}

class Hero implements HeroInterface
{
    private $name = null;

    private $hp = 0;

    private $dmg = 0;

    public function __construct(string $_name, int $_hp, int $_dmg)
    {
        $this->name = $_name;
        $this->hp = $_hp;
        $this->dmg = $_dmg;
    }

    public function attack(HeroInterface $_enemyHero) : void
    {
        if (rand(1,5) != rand(1,5)) {
            $_enemyHero->takeDmg($this->dmg);
        } else {
            $_enemyHero->takeDmg(0);
            echo '<br>' . $_enemyHero->getName() . ' Увернулся от атаки ' . $this->getName() . '!!!<br>';
        }
    }

    public function takeDmg(int $_dmg) : void
    {
        $this->hp -= $_dmg;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $_name) : void
    {
        $this->name = $_name;
    }

    public function getHp() : int
    {
        return $this->hp;
    }

    public function setHp(int $_hp) : void
    {
        $this->hp = $_hp;
    }

    public function getDmg() : int
    {
        return $this->dmg;
    }

    public function setDmg(int $_dmg) : void
    {
        $this->dmg = $_dmg;
    }
}

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

if ($nurbek->heroesLeft()) {
    echo '<p style="color: green;">' . $nurbek->getName() . ' won!!!!!!!!!</p>';
} else if ($roma->heroesLeft()) {
    echo '<p style="color: green;">' . $roma->getName() . ' won!!!!!!!!!</p>';
} else {
    echo '<p style="color: orange;">TIE!!!!</p>';
}