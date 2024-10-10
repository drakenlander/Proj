<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectDecorator extends Controller implements ConcreteObject
{
    protected $component;

    public function __construct(ConcreteObject $component)
    {
        $this->component = $component;
    }

    public function index() {
        return $this->component->index();
    }
}
