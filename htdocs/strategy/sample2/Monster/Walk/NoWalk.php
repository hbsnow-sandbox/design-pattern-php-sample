<?php
namespace strategy\sample2\Monster\Walk;

class NoWalk implements WalkInterface
{
    public function walk()
    {
        // 歩けないので何もしない
    }
}
