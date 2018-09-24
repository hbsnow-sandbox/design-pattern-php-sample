<?php
namespace strategy\sample1\Monster;

class Slime extends Monster implements Walkable
{
    public function walk()
    {
        return "ゆっくり歩く";
    }
}
