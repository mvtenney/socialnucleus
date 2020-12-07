<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignsController extends Controller
{
    public function index() {
        $campaigns = auth()->user()->currentTeam->campaigns;
        return view('campaigns.index', compact('campaigns'));
    }

    public function show(Campaign $campaign) {
        // if (auth()->user()->isNot($campaign->owner)){
        //     abort(403);
        // }

        if (auth()->user()->currentTeam->isNot($campaign->team)){
            abort(403);
        }

        return view('campaigns.show', compact('campaign'));
    }

    public function create() {
        return view('campaigns.create');
    }

    public function edit() {

    }

    public function store() {
        $team_id = auth()->user()->currentTeam->id;
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $attributes['team_id'] = $team_id;
        $campaign = auth()->user()->campaigns()->create($attributes);

        return redirect($campaign->path());
    }

    public function delete(){

    }
}
