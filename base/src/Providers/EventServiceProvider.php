<?php

namespace LidyaPos\Base\Providers;

use LidyaPos\Base\Events\BeforeEditContentEvent;
use LidyaPos\Base\Events\CreatedContentEvent;
use LidyaPos\Base\Events\DeletedContentEvent;
use LidyaPos\Base\Events\SendMailEvent;
use LidyaPos\Base\Events\UpdatedContentEvent;
use LidyaPos\Base\Listeners\BeforeEditContentListener;
use LidyaPos\Base\Listeners\CreatedContentListener;
use LidyaPos\Base\Listeners\DeletedContentListener;
use LidyaPos\Base\Listeners\SendMailListener;
use LidyaPos\Base\Listeners\UpdatedContentListener;
use Illuminate\Support\Facades\Event;
use File;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SendMailEvent::class          => [
            SendMailListener::class,
        ],
        CreatedContentEvent::class    => [
            CreatedContentListener::class,
        ],
        UpdatedContentEvent::class    => [
            UpdatedContentListener::class,
        ],
        DeletedContentEvent::class    => [
            DeletedContentListener::class,
        ],
        BeforeEditContentEvent::class => [
            BeforeEditContentListener::class,
        ],
    ];

    public function boot()
    {
        parent::boot();

        Event::listen(['cache:cleared'], function () {
            File::delete([storage_path('cache_keys.json'), storage_path('settings.json')]);
        });
    }
}
