<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $article)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.shared.card');
    }
}
