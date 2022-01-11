<?php

namespace App\Observers;

use App\Models\Segment;
use Illuminate\Support\Str;

class SegmentObserver
{
    /**
     * Handle the Segment "creating" event.
     *
     * @param  \App\Models\Segment  $segment
     * @return void
     */
    public function creating(Segment $segment)
    {
        $segment->uri = Str::kebab($segment->name);
    }

    /**
     * Handle the Segment "updating" event.
     *
     * @param  \App\Models\Segment  $segment
     * @return void
     */
    public function updating(Segment $segment)
    {
        $segment->uri = Str::kebab($segment->name);
    }

    /**
     * Handle the Segment "deleted" event.
     *
     * @param  \App\Models\Segment  $segment
     * @return void
     */
    public function deleted(Segment $segment)
    {
        //
    }

    /**
     * Handle the Segment "restored" event.
     *
     * @param  \App\Models\Segment  $segment
     * @return void
     */
    public function restored(Segment $segment)
    {
        //
    }

    /**
     * Handle the Segment "force deleted" event.
     *
     * @param  \App\Models\Segment  $segment
     * @return void
     */
    public function forceDeleted(Segment $segment)
    {
        //
    }
}
