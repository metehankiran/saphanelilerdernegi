<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class content.banner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        public string $title;
        public string $main;
        public string $sub;
        public string $bg;
        public string $href = route('home.index');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.banner');
    }
}
