<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Jugador extends Component
{
    public string $nom;
    public string $equip;
    public string $posicio;

    /**
     * Create a new component instance.
     */
    public function __construct(string $nom, string $equip, string $posicio)
    {
        $this->nom = $nom;
        $this->equip = $equip;
        $this->posicio = $posicio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jugador');
    }
}
