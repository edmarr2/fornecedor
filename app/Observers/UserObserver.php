<?php

namespace App\Observers;

use App\Jobs\SendWelcomeEmail;
use App\User;
class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        SendWelcomeEmail::dispatch($user);
    }
}
