<?php

namespace LidyaPos\ACL\Providers;

use LidyaPos\ACL\Events\RoleAssignmentEvent;
use LidyaPos\ACL\Events\RoleUpdateEvent;
use LidyaPos\ACL\Listeners\LoginListener;
use LidyaPos\ACL\Listeners\RoleAssignmentListener;
use LidyaPos\ACL\Listeners\RoleUpdateListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RoleUpdateEvent::class     => [
            RoleUpdateListener::class,
        ],
        RoleAssignmentEvent::class => [
            RoleAssignmentListener::class,
        ],
        Login::class               => [
            LoginListener::class,
        ],
    ];
}
