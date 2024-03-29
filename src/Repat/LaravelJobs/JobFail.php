<?php

namespace Repat\LaravelJobs;

use Illuminate\Support\Facades\Config;

class JobFail extends \Illuminate\Database\Eloquent\Model
{
    use Attributes;

    public $timestamps = false;

    protected $casts = [
        'payload' => 'array',
        'failed_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('queue.failed.table', 'job_fails');
    }
}
