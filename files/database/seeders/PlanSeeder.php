<?php

namespace Database\Seeders;

use App\Models\Plan;
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
            [ 'name'  => 'Plano 1', 'amount' => 29.90, 'frequency' => 'monthly', 'interval' => 1],
            [ 'name'  => 'Plano 2', 'amount' => 37.90, 'frequency' => 'monthly', 'interval' => 1],
            [ 'name'  => 'Plano 3', 'amount' => 44.90, 'frequency' => 'monthly', 'interval' => 1],
            [ 'name'  => 'Plano 4', 'amount' => 49.90, 'frequency' => 'monthly', 'interval' => 1],
            [ 'name'  => 'Plano 5', 'amount' => 89.90, 'frequency' => 'monthly', 'interval' => 1],
            [ 'name'  => 'Plano 6', 'amount' => 149.90, 'frequency' => 'monthly', 'interval' => 1],
        ];
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
