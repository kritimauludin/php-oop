<?php

namespace Data ;
class Shape {
    function getCorner(): int{
        return 0;
    }
}

class Rectangel extends Shape{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner(): int {
        //parent keyword
        return parent::getCorner();
    }
}