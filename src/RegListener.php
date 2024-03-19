<?php


namespace Range396\RegListener;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Range396\RegListener\Listeners\AuthorizationListener;

class RegListener extends AuthorizationListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {
        var_dump($event);
        self::sendWelcomeEmail($event->email);
    }

    public function TestListen()
    {
//        return view('range396:welcome-email');
        echo "Works";
    }
}