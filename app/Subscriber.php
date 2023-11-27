<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable=['first_name','last_name','email','card_number','phone_number','state'];

    public function documents()
    {
        return $this->belongsToMany(document::class)->withPivot(['to','comment'])->withTimestamps();
    }
}
