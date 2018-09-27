<?php
namespace strategy\sample2\Monster;

abstract class Monster
{
    private $walkBehavior;
    private $flyBehavior;

    public function __construct(
        Walk\WalkInterface $walkBehavior,
        Fly\FlyInterface $flyBehavior
    ) {
        $this->walkBehavior = $walkBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function attack()
    {
        return "攻撃する";
    }

    public function walk()
    {
        return $this->walkBehavior->walk();
    }

    public function fly()
    {
        return $this->flyBehavior->fly();
    }
}
