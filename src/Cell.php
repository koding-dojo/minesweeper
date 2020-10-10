<?php

namespace MineSweeper;

use InvalidArgumentException;

class Cell
{
    private int $value;

    public function __construct(string $value)
    {
        if (!in_array($value, ['.', '*'])) {
            throw new InvalidArgumentException("Cell can be . or *");
        }
        $this->value = '*' == $value ? -1 : 0;
    }

    public function increment(): void
    {
        if ($this->isBomb()) return;
        $this->value += 1;
    }

    public function isBomb(): bool
    {
        return -1 === $this->value;
    }
}
