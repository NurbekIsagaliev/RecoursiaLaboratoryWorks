<?php

interface HeroInterface
{
    public function attack(HeroInterface $_enemyHero) : void;

    public function takeDmg(int $_dmg) : void;
}