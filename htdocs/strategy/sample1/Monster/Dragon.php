<?php
namespace strategy\sample1\Monster;

class Dragon extends Monster implements Walkable, Flyable
{
    public function walk()
    {
        return "歩く";
    }

    public function fly()
    {
        return "飛ぶ";
    }
}
