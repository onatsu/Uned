<?php

namespace App\View\Components;

use App\Domain\Product\ProductRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLink extends Component
{
    public string $url;
    private ProductRepository $productRepository;

    /**
     * Create a new component instance.
     */
    public function __construct(string $url, ProductRepository $productRepository)
    {
        //
        $this->url = $url;
        $this->productRepository = $productRepository;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-link');
    }
}
