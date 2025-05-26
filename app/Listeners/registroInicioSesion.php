<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class registroInicioSesion
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */

    public function handle(Login $event): void
    {
        $user = $event->user;
        Log::channel('login_activity')->info('Inicio de sesión', ["Usuario {$user->name} ({$user->email}) inició sesión el " . now()]);
    }
}
