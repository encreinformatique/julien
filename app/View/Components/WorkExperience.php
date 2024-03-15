<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkExperience extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $jobTitle,
        public int $from,
        public ?int $until = null,
        public ?string $location = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-experience');
    }
}
