<?php 
namespace BinaryStudioAcademy\Task1;
use BinaryStudioAcademy\Task1\Pokemon;

class Bulbasaur implements Pokemon
{
				
	public function battleCry(): string
	{
		return 'Bool bool!';
	}

	public function imageUrl(): string
	{
		return '<img src="https://img.pokemondb.net/artwork/bulbasaur.jpg" alt="Bulbasaur"/>';
	}
}