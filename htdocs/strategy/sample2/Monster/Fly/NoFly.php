<?php
namespace strategy\sample2\Monster\Fly;

class NoFly implements FlyInterface
{
    public function fly()
    {
        // 飛べないので何もしない
    }
}
