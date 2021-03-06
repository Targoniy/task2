<?php

namespace BinaryStudioAcademy\Task1;
use BinaryStudioAcademy\Task1\Pickachu;
use BinaryStudioAcademy\Task1\Bulbasaur;
use BinaryStudioAcademy\Task1\Slowpoke;
use BinaryStudioAcademy\Task1\Psyduck;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
    	return substr(strrchr(get_class($pokemon), '\\'), 1) . ': ' . $pokemon->battleCry();
    } 
}
