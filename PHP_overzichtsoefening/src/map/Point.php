<?php namespace map;

use http\Exception\InvalidArgumentException;


class Point
{
    private int $x;
    private int $y;

    private function __construct(int $x, int $y)
    {
        if ($x >= 100 || $x < 0
            || $y >= 100 || $y < 0) {
            throw new InvalidArgumentException("The range for a point is [0, 100[");
        }
        $this->x = $x;
        $this->y = $y;
    }


    public static function make(int $x, int $y): self {
        return new self($x, $y);
    }

    public function manhattanDistance(self $point): int {
        return abs($this->x - $point->x) + abs($this->y - $point->y);
    }
}

