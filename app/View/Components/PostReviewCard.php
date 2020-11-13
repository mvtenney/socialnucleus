<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Faker\Generator as Faker;

class PostReviewCard extends Component
{
    public $card;

    /**
     * Create a new component instance.
     *
     * @param array $cardData
     * @return void
     */

    public function __construct(Faker $faker)
    {
        $this->card = [
            'image' => $faker->imageUrl($width = 225, $height = 225),
            'title' => $faker->words(4, true),
            'hashtags' => $faker->words(6, false),
            'body' => $faker->realText($maxNbChars = 140, $indexSize = 2),
        ];
    }

    // public function mockCards(){
    //     $cardData = ;
    //     $this->cardData = $cardData;
    //     dd($this->cardData);
    //     return $this->cardData;
    // }

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
