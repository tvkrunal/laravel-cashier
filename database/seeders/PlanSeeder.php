<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::truncate();
        $plans = [
            [
                'name' => 'Basic', 
                'slug' => 'basic', 
                'stripe_plan' => 'price_1OWFz5Fg27YJKsCQhwTawgi2',
                'price' => 200, 
                'description' => 'Basic'
            ]
        ];

        foreach ($plans as $plan) {

            Plan::create($plan);

        }
    }
}
