<?php 
namespace BinaryStudioAcademy\Task1;
use BinaryStudioAcademy\Task1\Pokemon;

class Psyduck implements Pokemon
{
				
	public function battleCry(): string
	{
		return 'PSY!PSY!PSY!';
	}

	public function imageUrl(): string
	{
		return '<img src="https://img.pokemondb.net/artwork/psyduck.jpg" alt="Psyduck"/>';
	}
}