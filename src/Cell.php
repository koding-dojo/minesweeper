<?php

namespace MineSweeper;

use InvalidArgumentException;

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
        if (!in_array($value, ['.', '*'])) {
            throw new InvalidArgumentException("Cell can be . or *");
        }
        $this->value = $value;
    }

    public function isBomb(): bool
    {
        return '*' === $this->value;
    }
}
