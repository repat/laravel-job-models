<?php

namespace Repat\LaravelJobs;

class Job extends \Illuminate\Database\Eloquent\Model
{
    use Attributes;

    public $timestamps = false;

    protected $casts = [
        'payload' => 'array',
        'reserved_at' => 'datetime',
        'available_at' => 'datetime',
        'created_at' => 'datetime',
    ];
}
