<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Campaign;
use App\Models\CampaignTasks;

class CampaignTasksController extends Controller
{
    public function index(Campaign $campaign) {
        return view('tasks.index', compact(['campaign']));
    }

    public function show(Campaign $campaign, CampaignTasks $task) {
        $assigned_user = User::where('id', $task->assigned_to)->firstOrFail();

        if (auth()->user()->currentTeam->isNot($campaign->team)){
            abort(403);
        }

        return view('tasks.show', compact(['campaign', 'task', 'assigned_user']));
    }

    public function create(Campaign $campaign) {
        return view('tasks.create', compact(['campaign']));
    }

    public function edit() {

    }

    public function store(Campaign $campaign) {
        $team_id = auth()->user()->currentTeam->id;


        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
            'assigned_to' => 'required',
            'status' => 'required',
            'priority' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['team_id'] = $team_id;
        $attributes['campaign_id'] = $campaign->id;

        $task = $campaign->addTask($attributes);
        return redirect($task->path());
    }

    // public function store() {
    //     $team_id = auth()->user()->currentTeam->id;
    //     $attributes = request()->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //     ]);
    //     $attributes['team_id'] = $team_id;
    //     $campaign = auth()->user()->campaigns()->create($attributes);

    //     return redirect($campaign->path());
    // }

    public function delete(){

    }
}
