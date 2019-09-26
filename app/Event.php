<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $dates = [
        'occurred_at',
        'created_at',
        'updated_at',
    ];

    public $fillable = [
        'name',
        'occurred_at',
        'created_at',
        'updated_at',
    ];
}
