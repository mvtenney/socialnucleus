<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignTask extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function root()
    {
        return "/campaigns/{$this->campaign->id}/tasks/";
    }

    public function path()
    {
        return "/campaigns/{$this->campaign->id}/tasks/{$this->id}";
    }

    public function getType()
    {
        switch ($this->type){
            case 'content_request':
                $type = 'Create Content';
            break;
            case 'brainstorm':
                $type = 'Idea';
            break;
            default:
                $type = 'No Type';
            break;
        }
        return $type;
    }

    public function getPriority()
    {
        $priority = new \StdClass();
        switch ($this->priority){
            case 0:
                $priority->title = 'Backlog';
                $priority->color = 'gray-300';
            break;
            case 1:
                $priority->title = 'Low Priority';
                $priority->color = 'green-500';
            break;
            case 2:
                $priority->title = 'Normal Priority';
                $priority->color = 'yellow-500';
            break;
            case 3:
                $priority->title = 'High Priority';
                $priority->color = 'red-500';
            break;
        }
        return $priority;
    }


}
