<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Partits extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(    
        public string $local,
        public string $visitant,
        public string $data,
        public string $resultat
    )
                                    
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partit');
    }
}
