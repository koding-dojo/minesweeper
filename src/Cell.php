<?php

namespace MineSweeper;

class Cell
{
    private string $value;

    /**
     * Cell constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function isBomb(): bool
    {
        return '*' === $this->value;
    }
}
