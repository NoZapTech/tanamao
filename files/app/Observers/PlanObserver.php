<?php

namespace App\Observers;

use App\Models\Plan;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class PlanObserver
{
    /**
     * Handle the Plan "creating" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function creating(Plan $plan)
    {
        $plan->uri = Str::kebab($plan->name);
        $plan->uuid = Uuid::uuid4();
    }

    /**
     * Handle the Plan "updating" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function updating(Plan $plan)
    {
        $plan->uri = Str::kebab($plan->name);
        $plan->uri = Uuid::uuid4();
    }

    /**
     * Handle the Plan "deleted" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function deleted(Plan $plan)
    {
        //
    }

    /**
     * Handle the Plan "restored" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function restored(Plan $plan)
    {
        //
    }

    /**
     * Handle the Plan "force deleted" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function forceDeleted(Plan $plan)
    {
        //
    }
}
