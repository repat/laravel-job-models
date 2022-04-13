<?php

namespace Repat\LaravelJobs;

use Illuminate\Support\Facades\Config;

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

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('queue.connections.' . (Config::get('queue.default', 'database')) . '.table', 'jobs');
    }
}
