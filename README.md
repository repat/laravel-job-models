# laravel-job-models
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/laravel-job-models.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-job-models)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/laravel-job-models.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-job-models)

**laravel-job-models** contains 2 Eloquent models for the tables `jobs` and `job_fails` as created by the 2 artisan commands `queue:table` and `queue:failed-table`.

## Installation
`$ composer require repat/laravel-job-models`

## Documentation

#### Casting
There is a casting to `\Carbon\Carbon` objects for: `reserved_at`, `available_at`, `created_at` and `failed_at` and a casting to array for `payload`.

#### Attributes/ Mutators
There are getters for all the keys of the payload, including the `data` array. For more information, see the [Laravel Documentation on Eloquent Mutators](https://laravel.com/docs/5.8/eloquent-mutators).

```php
$job = \Repat\LaravelJobs\Job::first();

$job->display_name;
$job->max_tries;
$job->delay;
$job->timeout;
$job->timeout_at; // cast to Carbon if not null
$job->command_name; // ->payload['data']['commandName']
$job->command; // unserialized
```

## License
* MIT, see [LICENSE](https://github.com/repat/laravel-job-models/blob/master/LICENSE)

## Version
* Version 0.2

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/laravel-job-models&title=laravel-job-models&language=&tags=github&category=software)
