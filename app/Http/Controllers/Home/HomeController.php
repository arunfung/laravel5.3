<?php

namespace App\Http\Controllers\Home;

use App\Models\User;

use App\Services\EmailService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var
     */
    protected $emailService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmailService $emailService)
    {
        $this->middleware('auth');
        $this->emailService =$emailService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(1);
        $this->emailService->SendWelcome($user);
        return view('home');

    }
}
