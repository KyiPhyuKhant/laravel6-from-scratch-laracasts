<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Example
{
    protected $collaborator;

    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
}
