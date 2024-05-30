<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReturnArrow extends Component
{
    public function __construct(
        public string $href
    ) {}

    public function render(): View
    {
        return view('components.return-arrow');
    }
}
