<?php

namespace Database\Seeders;

use App\Models\iPag\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [ 'ipag_id'  => 741 ],
            [ 'ipag_id'  => 742 ],
            [ 'ipag_id'  => 743 ],
            [ 'ipag_id'  => 744 ],
            [ 'ipag_id'  => 745 ],
            [ 'ipag_id'  => 746 ],
        ];
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
