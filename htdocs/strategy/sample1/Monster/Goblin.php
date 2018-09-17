<?php
namespace strategy\sample1\Monster;

class Goblin extends Monster implements Walkable
{
    public function walk()
    {
        return "歩く";
    }
}
