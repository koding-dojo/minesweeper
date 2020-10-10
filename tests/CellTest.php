<?php

namespace Tests;

use MineSweeper\Cell;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CellTest extends TestCase
{
    public function testBomb()
    {
        $cell = new Cell('*');
        self::assertTrue($cell->isBomb());
    }

    public function testValidatesValues()
    {
        self::expectException(InvalidArgumentException::class);
        new Cell('x');
    }

    public function testToStringBomb()
    {
        $cell = new Cell('*');

        self::assertEquals('*', (string)$cell);
    }
}
