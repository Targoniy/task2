<?php 
namespace BinaryStudioAcademy\Task1;
use BinaryStudioAcademy\Task1\Pokemon;

class Slowpoke implements Pokemon
{
	public function battleCry(): string
	{
		return 'So slow!';
	}

	public function imageUrl(): string
	{
		return '<img src = "https://img.pokemondb.net/artwork/slowpoke.jpg" alt="Slowpoke"/>';
	}
}