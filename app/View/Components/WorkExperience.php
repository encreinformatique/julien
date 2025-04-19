<?php

namespace App\View\Components;

use Closure;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Jenssegers\Date\Date;

class WorkExperience extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string    $jobTitle,
        public DateTime  $from,
        public ?DateTime $until = null,
        public ?string   $location = null,
        public array $stack = []
    ) {
        $this->from = Date::createFromFormat('d m Y', $from->format('d m Y'));
        if ($until) {
            $this->until = Date::createFromFormat('d m Y', $until->format('d m Y'));
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-experience');
    }
}
