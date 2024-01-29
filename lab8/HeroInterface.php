<?php

interface HeroInterface
{
  

    public function attack(HeroInterface $_enemyHero) : void;
    public function takeDmg(int $_dmg) : void;
    public function getName() : string;
    public function setName(string $_name) : void;
    public function getHp() : int;
    public function setHp(int $_hp) : void;
    public function getDmg() : int;
    public function setDmg(int $_dmg) : void;
}