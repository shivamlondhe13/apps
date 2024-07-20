<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class b_textarea extends Component
{
    public $name;
    public $value;
    public $label;
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $label = "", $id = "", $value = "")
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.b_textarea');
    }
}
