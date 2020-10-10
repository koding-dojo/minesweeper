<?php

namespace MineSweeper;

class Game
{
    /**
     * @var Field[]
     */
    private array $fields;

    public function __construct(string $fields)
    {
        $lines = explode("\n", $fields);
        $lastLine = 0;
        [$height, $width] = explode(' ', $lines[$lastLine++]);
        while($height > 0 && $width > 0) {
            $map = implode("\n", array_slice($lines, $lastLine, $height));
            $this->fields[] = new Field($map);
            $lastLine += $height;
            [$height, $width] = explode(' ', $lines[$lastLine++]);
        }
    }
}
