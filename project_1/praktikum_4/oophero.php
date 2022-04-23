<?php
class Hero {
    public $nama;
    public $hp;
    public $damage;
    public $level;

    function __construct($nama, $hp, $damage, $level)
    {
        $this->nama = $nama;
        $this->hp = $hp;
        $this->damage = $damage;
        $this->level = $level;
    }

    function diserang($penyerang){
        $this->hp = $this->hp - $penyerang->damage;

        echo "Anda diserang oleh $penyerang->nama! <br/>";
        echo "HP Saat ini: $this->hp ";
    }
    function menyerang($hero){
        $hero->hp -= $this->damage;
        $this->level += 1;
        echo "dyrot Menyerang hero $hero->nama! <br>";
        echo "Hp alu  Saat ini : $hero->hp <br>";
        echo "level dyrot saat ini : $this->level";

    }
}

$hero1 = new Hero("Layla", 3000, 300, 1);

$hero2 = new Hero("Dyrot", 4000, 240, 2);

$hero3 = new Hero("Alucard", 4200, 220, 1);

// $hero1->diserang($hero3);

$hero2->menyerang($hero3);