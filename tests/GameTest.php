<?php

namespace Tests;

use MineSweeper\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testInitializeOneField()
    {
        $game = new Game(<<<EOF
            4 4
            *...
            ....
            .*..
            ....
            0 0
            EOF);

        self::assertNotNull($game);

    }
}
