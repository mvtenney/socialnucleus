<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;
class PostReviewCard extends Component
{
    public $card;

    /**
     * Create a new component instance.
     *
     * @param array $card
     * @return void
     */

    public function __construct($card)
    {
        $this->card = $card;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.post-review-card');
    }
}
