<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;

class Thread extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "threads/{$this->id}";
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
