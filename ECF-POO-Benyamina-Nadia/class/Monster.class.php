<?php
// l'entité monster qui hérite de la class character, on crée seulement le __construct comme ça lors 
// de l'instanciation du monstre, on aura qu'à lui donner ses points de vie et de force
class Monster extends Character
{
    public function __construct(int $lifePoint, int $strenghtPoint)
    {
        parent::__construct($lifePoint, $strenghtPoint);
    }
}