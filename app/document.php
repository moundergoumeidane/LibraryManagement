<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $fillable = ['title','author','type','edition','promotion','ISBN','number_of_copies','placement'];

    public function subscribers()
    {
        return $this->belongsToMany(Subscriber::class)->withPivot(['to','comment'])->withTimestamps();
    }
}
