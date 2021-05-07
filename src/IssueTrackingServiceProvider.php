<?php

namespace Codeex\IssueTracking;

use Codeex\RoleAssignment\Models\Resource;
use Codeex\RoleAssignment\Policies\ResourcePolicy;
use Codeex\RoleAssignment\Services\RaService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class IssueTrackingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/api.php");

        // Policies
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
