<?php

namespace Helper;

//static cocok sekali untuk utility/helper yang tidak memerlukan instansiasi/membuat objek dulu

class MathHelper {
    //static pada properti
    static public string $name = "MathHelper";

    //static pada method
    static public function sum(int ...$numbers): int{
        $total = 0;

        foreach($numbers as $number){
           $total += $number;
        }
        return $total;
    }
}

// echo MathHelper::$name. PHP_EOL;