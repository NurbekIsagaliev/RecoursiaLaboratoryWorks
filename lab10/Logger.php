<?php

class Logger
{
    private static $instance = null;

    private $activity = [];

    private function __construct()
    {
    }

    public static function getLogger() : Logger
    {
        if (self::$instance == null) { 
            self::$instance = new Logger();
        }
        
        return self::$instance;
    }

    public function log(PlayerInterface $_playerActive, PlayerInterface $_playerPassive, HeroInterface $_heroActive, HeroInterface $_heroPassive, int $_turn) : void
    {
        $this->activity[] = [
            'playerActive' => $_playerActive->getName(),
            'playerPassive' => $_playerPassive->getName(),
            'heroActive' => $_heroActive->getName(),
            'heroPassive' => $_heroPassive->getName(),
            'heroActiveHp' => $_heroActive->getHp(),
            'heroActiveDmg' => $_heroActive->getDmg(),
            'heroPassiveHp' => $_heroPassive->getHp(),
            'heroPassiveDmg' => $_heroPassive->getDmg(),
            'turn' => $_turn
        ];
    }

    public function getActivity() : array
    {
        return $this->activity;
    }
}