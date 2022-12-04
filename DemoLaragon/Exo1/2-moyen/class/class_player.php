<?php
class Player
{
    private $name;
    private $pv;
    private $force;

    public function __construct($name, $pv, $force)
    {
        $this->name = $name;
        $this->force = $force;
        $this->pv = $pv;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPv()
    {
        return $this->pv;
    }

    public function getForce()
    {
        return $this->force;
    }
}

$player1 = new Player('Mason', 80 , 75);
$player2 = new Player('Dragovich', 100, 95);
$player3 = new Player('Reznov', 50, 30);

$joueurs = [$player1, $player2, $player3];
?>