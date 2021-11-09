<?php
require 'Personnage.php';

$merlin = new Personnage("Merlin");
echo $merlin->setNom('Marlin');
echo $merlin->getNom();
echo $merlin->getAtk();