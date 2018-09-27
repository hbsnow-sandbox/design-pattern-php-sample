<?php
namespace strategy\sample2\Monster\Fly;

class NormalFly implements FlyInterface
{
    public function fly()
    {
        return "飛ぶ";
    }
}
