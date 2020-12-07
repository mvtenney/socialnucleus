<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use App\Models\CampaignTask;
use Illuminate\Http\Request;

class CampaignTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Campaign $campaign) {
        return view('tasks.index', compact('campaign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function create(Campaign $campaign) {
        return view('tasks.create', compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Campaign $campaign) {
        $team_id = auth()->user()->currentTeam->id;

        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
            'assigned_to' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'campaign_id' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['team_id'] = $team_id;

        $task = $campaign->addTask($attributes);
        return redirect($task->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampaignTask  $campaignTask
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignTask $task)
    {


        // if (auth()->user()->currentTeam->isNot($campaign->team))
        // {
        //     abort(403);
        // }

        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampaignTask  $campaignTask
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignTask $campaignTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampaignTask  $campaignTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignTask $campaignTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignTask  $campaignTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignTask $campaignTask)
    {
        //
    }
}
