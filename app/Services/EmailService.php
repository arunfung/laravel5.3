<?php
namespace App\Services;

use App\Mail\Welcome;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function SendWelcome($user)
    {
        Mail::to($user->email)->send(new Welcome($user));
    }
}