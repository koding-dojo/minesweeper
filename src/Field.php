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
        $bombs = [];
        for($row = 0; $row < $height; $row++) {
            $cells = str_split(trim($lines[$row]));
            $width = count($cells);
            for($column = 0; $column < $width; $column++) {
                $cell = new Cell($cells[$column]);
                $this->field[$row][$column] = $cell;
                if ($cell->isBomb()) {
                    $bombs[] = [$row, $column];
                }
            }
        }

        foreach ($bombs as [$row, $column]) {
            for($i = max($row-1, 0); $i < min($row+2, $height); $i++) {
                for($j = max($column-1, 0); $j < min($column+2, $width); $j++) {
                    $this->field[$i][$j]->increment();
                }
            }
        }
    }

    public function hasBombAt(int $row, int $column)
    {
       return $this->field[$row][$column]->isBomb();
    }
}
