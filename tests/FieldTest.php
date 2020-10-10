<?php

namespace Tests;

use MineSweeper\Field;
use PHPUnit\Framework\TestCase;

class FieldTest extends TestCase
{
    public function testInitializesWithStringMap()
    {
        $field = new Field(<<<EOF
            2 2
            *.
            ..
            EOF);

        self::assertNotNull($field);
    }
}
