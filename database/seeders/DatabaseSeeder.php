<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use App\Models\HistoryOrder;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//         Food::factory(10)->create();
//        Category::factory(5)->create();
//        Order::factory(10)->create();
        HistoryOrder::factory(10)->create();
    }
}
