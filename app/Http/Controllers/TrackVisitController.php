<?php

namespace App\Http\Controllers;

use App\Models\TrackedVisit;
use Illuminate\Http\Request;

class TrackVisitController extends Controller
{
    public function __invoke(Request $request)
    {
        $token =  $request->route('token', 'víctima');
        TrackedVisit::create([
            'token' => $token,

            'ip' => $request->ip(),
            'ips' => $request->ips(),

            'user_agent' => $request->userAgent(),
            'method' => $request->method(),

            'referer' => $request->header('referer'),
            'origin' => $request->header('origin'),
            'host' => $request->header('host'),

            'headers' => $request->headers->all(),
            'bearer_token' => $request->bearerToken(),

            'full_url' => $request->fullUrl(),
            'url' => $request->url(),
            'path' => $request->path(),

            'domain' => $request->getHost(),
            'scheme' => $request->getScheme(),
            'port' => (string) $request->getPort(),

            'is_secure' => $request->secure(),
            'is_ajax' => $request->ajax(),
            'expects_json' => $request->expectsJson(),

            'remote_addr' => $request->server('REMOTE_ADDR'),
            'http_user_agent' => $request->server('HTTP_USER_AGENT'),
            'request_method_raw' => $request->server('REQUEST_METHOD'),
            'request_uri' => $request->server('REQUEST_URI'),
            'http_referer_raw' => $request->server('HTTP_REFERER'),

            'server_data' => $request->server(),
        ]);

        return response()->view('tracked-visit-thanks', [
            'token' => $token,
        ]);
    }
}