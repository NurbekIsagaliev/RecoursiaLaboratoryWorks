<?php

include_once('./PlayerInterface.php');




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
        // echo '----------------------------Round ' . $_turn . '----------------------------------<br>';
        $logger = Logger::getLogger();
        foreach ($this->heroes as $hero) {
            foreach ($_enemyPlayer->getHeroes() as $enemyHero) {
                if ($hero->getHp() > 0 && $enemyHero->getHp() > 0) {
                    // echo $hero->getName() . '(DMG: ' . $hero->getDmg() . '; HP: ' . $hero->getHp() . ') attacks ' . $enemyHero->getName() . ' (DMG: ' . $enemyHero->getDmg() . '; HP: ' . $enemyHero->getHp() . ') <br>';
                    $hero->attack($enemyHero);
                    $logger->log($this, $_enemyPlayer, $hero, $enemyHero, $_turn);
                }
            }
        }
        // echo '--------------------------------------------------------------<br>';
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
