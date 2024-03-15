<?php

namespace App\View\Components\Magellan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Bullet extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id = '',
        public bool $current = false,
        public bool $completed = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.magellan.bullet');
    }
}
