<?php

namespace Tests;

use MineSweeper\Cell;
use PHPUnit\Framework\TestCase;

class CellTest extends TestCase
{
    public function testBomb()
    {
        $cell = new Cell('*');
        self::assertTrue($cell->isBomb());
    }
}
