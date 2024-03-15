<?php

namespace App\View\Components\Portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $titre,
        public string $tech,
        public string $snapshot,
        public string $website,
        public string $customer,
        public string $logo,
        public string $position = 'left'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio.card');
    }
}
