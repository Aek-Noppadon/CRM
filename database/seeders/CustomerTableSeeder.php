<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(
            array(
                [
                    'name_english' => 'Noppadon',
                    'name_thai' => 'นพดล',
                    'parent_code' => null,
                    'parent_name' => null,
                    'source' => '1',
                    'created_user_id' => '1',
                    'updated_user_id' => '1',
                    'created_at' => '2025-11-05',
                    'updated_at' => '2025-11-05',
                ],
                [
                    'name_english' => 'Noppadon',
                    'name_thai' => 'นพดล',
                    'parent_code' => null,
                    'parent_name' => null,
                    'source' => '1',
                    'created_user_id' => '1',
                    'updated_user_id' => '1',
                    'created_at' => '2025-11-05',
                    'updated_at' => '2025-11-05',
                ],
            )
        );
    }
}
