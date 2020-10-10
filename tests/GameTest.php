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
        self::assertTrue($game->getField(0)->hasBombAt(0,0));
        self::assertTrue($game->getField(0)->hasBombAt(2,1));
        self::assertFalse($game->getField(0)->hasBombAt(1,1));
    }
}
