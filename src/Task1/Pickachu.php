<?php 
namespace BinaryStudioAcademy\Task1;
use BinaryStudioAcademy\Task1\Pokemon;

class Pickachu implements Pokemon
{
	public function battleCry(): string 
	{
		return 'Pika-Pika!';
	}

	public function imageUrl(): string
	{
		return '<img src = "https://img.pokemondb.net/artwork/pikachu.jpg" alt="Pikachu"/>';
	}
	
	
}