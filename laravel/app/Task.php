<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['completed', 'description'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {
        //$this->update(['completed' => $completed]);
        $this->update(compact('completed'));
    }
    public function incomplete($completed = false)
    {
        $this->complete(false);
    }
}
