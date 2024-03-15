<?php

namespace App\View\Components\Cv;

use Closure;
use Illuminate\Contracts\View\View;

class Language extends AbstractAbility
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cv.language');
    }
}
