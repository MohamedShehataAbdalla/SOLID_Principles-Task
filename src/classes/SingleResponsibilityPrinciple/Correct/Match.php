<?php

namespace src\classes\SingleResponsibilityPrinciple\Correct;

class Match
{

    private $attack;
    private $defense;
    private $keeper;

    public function __construct(){
        $this->attack = new Attack();
        $this->defense = new Defense();
        $this->keeper = new Keeper();
    }

    public function start(){
        echo "Start Play";
    }



}