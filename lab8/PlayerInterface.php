<?php

interface PlayerInterface
{
  

    public function attackPlayer(PlayerInterface $_enemyPlayer, int $_turn) : void;
    public function heroesLeft() : bool;
    public function getName() : string;
    public function setName(string $_name) : void;
    public function getHeroes() : array;
    public function setHeroes(array $_heroes) : void;
}