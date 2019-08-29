<?php

namespace Repat\LaravelJobs;

trait Attributes
{
    public function getDisplayNameAttribute()
    {
        return $this->payload['displayName'];
    }

    public function getMaxTriesAttribute()
    {
        return $this->payload['maxTries'];
    }

    public function getDelayAttribute()
    {
        return $this->payload['delay'];
    }

    public function getTimeoutAttribute()
    {
        return $this->payload['timeout'];
    }

    public function getTimeoutAtAttribute()
    {
        return !is_null($this->payload['timeout_at']) ? new \Carbon\Carbon($this->payload['timeout_at']) : null;
    }

    public function getCommandNameAttribute()
    {
        return $this->payload['data']['commandName'];
    }

    public function getCommandAttribute()
    {
        return unserialize($this->payload['data']['command']);
    }
}
