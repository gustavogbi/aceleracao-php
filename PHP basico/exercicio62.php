<?php

class Plano {
    private int $x;
    private int $y;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setPonto(Plano $plano) {
        $this->x = $plano->getX();
        $this->y = $plano->getY();
    }

    public function setX(int $x) {
        $this->x = $x;
    }

    public function setY(int $y) {
        $this->y = $y;
    }

    public function getX() : int {
        return $this->x;
    }

    public function getY() : int {
        return $this->y;
    }

    public function __toString() : string {
        return "X: {$this->x} Y: {$this->y}";
    }
}

?>
