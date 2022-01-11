<?php

namespace App\Providers;

use App\Models\iPag\Plan;
use App\Models\Segment;
use App\Models\Tenant;
use App\Models\User;
use App\Observers\iPag\PlanObserver;
use App\Observers\SegmentObserver;
use App\Observers\TenantObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Plan::observe(PlanObserver::class);
        Tenant::observe(TenantObserver::class);
        Segment::observe(SegmentObserver::class);
    }
}
