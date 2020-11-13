<?php

namespace App\Http\Livewire;
use Unsplash;
use Livewire\Component;
// use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {
        Unsplash\HttpClient::init([
            'applicationId'	=> config('services.unsplash.key'),
            'secret'	=> config('services.unsplash.secret'),
            'callbackUrl'	=> 'https://localhost',
            'utmSource' => 'SocialNucleus'
        ]);


        $page = 1;
        $per_page = 15;
        $orientation = 'landscape';

        $response = Unsplash\Search::photos($this->search, $page, $per_page, $orientation);
        $this->searchResults = $response->getResults();
        //ddd($this->searchResults);
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
