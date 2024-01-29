<?php

interface PlayerInterface
{
    public function attackPlayer(PlayerInterface $_enemyPlayer, int $_turn) : void;

    public function heroesLeft() : bool;
}