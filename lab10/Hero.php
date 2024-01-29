<?php

include_once('./HeroInterface.php');

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
        // if (rand(1,5) != rand(1,5)) {
        //     $_enemyHero->takeDmg($this->dmg);
        // } else {
        //     $_enemyHero->takeDmg(0);
        //     echo '<br>' . $_enemyHero->getName() . ' Увернулся от атаки ' . $this->getName() . '!!!<br>';
        // }
        $_enemyHero->takeDmg($this->dmg);
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