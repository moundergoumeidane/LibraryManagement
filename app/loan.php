<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class loan extends Pivot
{
    protected $table = 'document_subscriber';

    protected $fillable = ['comment','to','document_id','subscriber_id'];

    protected $casts = [
        'to'  => 'date'
    ];

    protected $with = ['subscriber','document'];

    public function subscriber(){
        return $this->belongsTo(Subscriber::class);
    }

    public function document(){
        return $this->belongsTo(document::class);
    }
}
