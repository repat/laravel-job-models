<?php

namespace Repat\LaravelJobs;

class JobFail extends \Illuminate\Database\Eloquent\Model
{
    use Attributes;

    public $timestamps = false;

    protected $casts = [
        'payload' => 'array',
        'failed_at' => 'datetime',
    ];
}
