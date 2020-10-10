<?php

namespace MineSweeper;

class Field
{
    /**
     * @var Field[][]
     */
    private array $field;

    public function __construct(string $map)
    {
        $lines = explode("\n", $map);
        $height = count($lines);
        for($row = 0; $row < $height; $row++) {
            $cells = str_split(trim($lines[$row]));
            $width = count($cells);
            for($column = 0; $column < $width; $column++) {
                $this->field[$row][$column] = new Cell($cells[$column]);
            }
        }
    }

    public function hasBombAt(int $row, int $column)
    {
       return $this->field[$row][$column]->isBomb();
    }
}
