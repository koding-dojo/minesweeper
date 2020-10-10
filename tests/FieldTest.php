<?php

namespace Tests;

use MineSweeper\Field;
use PHPUnit\Framework\TestCase;

class FieldTest extends TestCase
{
    public function testInitializesWithStringMap()
    {
        $field = new Field(<<<EOF
            *.
            ..
            EOF);

        self::assertNotNull($field);
    }

    public function testParsesMap()
    {
        $field = new Field(<<<EOF
            *.
            ..
            EOF);
        self::assertTrue($field->hasBombAt(0,0));
    }

    public function xtestHintsBombsNeighbours()
    {
        $field = new Field(<<<EOF
            *...
            ....
            .*..
            ....
            EOF);

        self::assertEquals(<<<EOF
            *100
            2210
            1*10
            1110
            EOF, (string)$field);
    }
}
