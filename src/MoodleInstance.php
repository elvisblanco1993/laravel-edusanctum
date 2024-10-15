<?php

namespace ElvisBG\LaravelEdusanctum;

use Illuminate\Database\Eloquent\Model;

class MoodleInstance extends Model
{
    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'server_ip',
        'app_id',
        'is_enabled',
    ];
}