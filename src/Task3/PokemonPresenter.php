<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        $page = '<ul>';

        foreach ($this->pokemons as $pokemon) {
            $page .= '<li>';
            $page .= $pokemon->imageUrl();
            $page .= '</li>';
        }

        $page .= '</ul>';

        return $page;

    }
}
