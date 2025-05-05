<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptions = [
            ['id' => 1, 'name' => 'Monthly', 'amount' => 5.00, 'discount_amount' => 1.88, 'plan_id' => '', 'discount_plan_id' => '', 'is_discount' => true, 'interval' => '1 month'],
            ['id' => 2, 'name' => 'Bi-Annual','amount' => 30.00, 'discount_amount' => 11.88, 'plan_id' => '', 'discount_plan_id' => '', 'is_discount' => true, 'interval' => '6 months'],
            ['id' => 3, 'name' => 'Annual', 'amount' => 60.00, 'discount_amount' => 22.88, 'plan_id' => '', 'discount_plan_id' => '', 'is_discount' => true, 'interval' => '12 months'],
        ];

        foreach($subscriptions as $sub){
            Plan::create($sub);
        }
    }
}
