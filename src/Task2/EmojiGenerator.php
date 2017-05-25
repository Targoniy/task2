<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    {
        $Emoji = ['😀', '😃', '😄', '😁', '😆', '😅', '😂'];

        foreach ($Emoji as $one) {
            yield $one;
        }
    }
}
