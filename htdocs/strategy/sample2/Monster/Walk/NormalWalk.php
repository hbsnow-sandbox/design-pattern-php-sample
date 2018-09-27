<?php
namespace strategy\sample2\Monster\Walk;

class NormalWalk implements WalkInterface
{
    public function walk()
    {
        return "歩く";
    }
}
