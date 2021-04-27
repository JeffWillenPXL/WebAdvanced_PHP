<?php namespace map;

class Road {
    private array $points;

    public function __construct()
    {
        $this->points = array();
    }

    public static function make(): self {
        return new self();
    }

    public function addPoint(Point $point): void {
        $this->points[] = $point;
    }

    public function manhattanDistance(): int {
        $som = 0;
        $last = count($this->points) - 1;
        for($i = $last; $i > 0; $i--) {
            $som += $this->points[$i]->manhattanDistance($this->points[$i -1]);
        }

        return $som;
    }


}
