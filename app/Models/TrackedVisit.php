<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackedVisit extends Model
{
    protected $fillable = [
        'token',
        'ip',
        'ips',
        'user_agent',
        'method',
        'referer',
        'origin',
        'host',
        'headers',
        'bearer_token',
        'full_url',
        'url',
        'path',
        'domain',
        'scheme',
        'port',
        'is_secure',
        'is_ajax',
        'expects_json',
        'remote_addr',
        'http_user_agent',
        'request_method_raw',
        'request_uri',
        'http_referer_raw',
        'server_data',
    ];

    protected $casts = [
        'ips' => 'array',
        'headers' => 'array',
        'server_data' => 'array',
        'is_secure' => 'boolean',
        'is_ajax' => 'boolean',
        'expects_json' => 'boolean',
    ];
}