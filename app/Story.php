<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';
    protected $fillable = ['title', 'post'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function userCanEdit(User $user)
{
    return $user->id === $this->user_id;
}
}
