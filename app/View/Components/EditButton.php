<?php

namespace App\View\Components;

use App\Domain\Product\ProductRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditButton extends Component
{
    public string $url;
    private ProductRepository $repository;

    /**
     * Create a new component instance.
     */
    public function __construct(string $url, ProductRepository $repository)
    {
        $this->url = $url;
        $this->repository = $repository;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-button');
    }
}
