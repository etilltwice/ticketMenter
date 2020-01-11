<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルリセット
        DB::table('tickets')->truncate();

        // 自動生成
        factory(App\Ticket::class, 20)->create();
    }
}
