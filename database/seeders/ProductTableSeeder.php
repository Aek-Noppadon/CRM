<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            array(
                [
                    'code' => '',
                    'product_name' => 'Noppadon',
                    'brand' => 'นพดล',
                    'supplier_rep' => null,
                    'principal' => null,
                    'status' => '0',
                    'source' => '1',
                    'created_user_id' => '1',
                    'updated_user_id' => '1',
                    'created_at' => '2025-11-05',
                    'updated_at' => '2025-11-05',
                ],
                [
                    'code' => '',
                    'product_name' => 'Noppadon',
                    'brand' => 'นพดล',
                    'supplier_rep' => null,
                    'principal' => null,
                    'status' => '0',
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
