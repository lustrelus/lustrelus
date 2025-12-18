<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class left.inspo extends Component
{
    public $inspirations
    /**
     * Create a new component instance.
     */
    public function __construct($inspirations)
    {
        $this->inspirations = $inspirations
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.left.inspo');
    }
}
