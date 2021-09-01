<?php

namespace LidyaPos\Base\Providers;

use LidyaPos\Base\Commands\ClearLogCommand;
use LidyaPos\Base\Commands\InstallCommand;
use LidyaPos\Base\Commands\PublishAssetsCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            ClearLogCommand::class,
            InstallCommand::class,
            PublishAssetsCommand::class,
        ]);
    }
}
