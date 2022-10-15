<?php

namespace taufiq\data;

class People
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name";
    }
}
