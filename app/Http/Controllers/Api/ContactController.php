<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\SlackAlerts\Facades\SlackAlert;

class ContactController extends Controller
{
    public function __invoke(Request $request): array
    {
        //$token = csrf_token();
        $url = $request->request->get('url');
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $company = $request->request->get('company');
        $message = $request->request->get('message');

        if (!empty($url)) {
            return ['success' => false];
        }

        $slackMsg = "You have a new message from %s.".PHP_EOL.PHP_EOL.'email: *%s*'.PHP_EOL.PHP_EOL.'company: *%s*'.PHP_EOL.PHP_EOL.trim($message);
        SlackAlert::message(sprintf($slackMsg, $name, $email, $company, $message));

        return ['success' => true];
    }
}
