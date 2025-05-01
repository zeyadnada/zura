<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Department 1: Electronics
            [
                'name' => 'Electronics',
                'department_id' => 1,
                'parent_id' => null, // Top-level
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Computers',
                'department_id' => 1,
                'parent_id' => 1, // Parent: Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mobile Phones',
                'department_id' => 1,
                'parent_id' => 1, // Parent: Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 2, // Parent: Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 2: Fashion
            [
                'name' => 'Fashion',
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Men',
                'department_id' => 2,
                'parent_id' => 5, // Parent: Fashion
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Women',
                'department_id' => 2,
                'parent_id' => 5, // Parent: Fashion
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 3: Home & Kitchen
            [
                'name' => 'Furniture',
                'department_id' => 3,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kitchen Appliances',
                'department_id' => 3,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 4: Books
            [
                'name' => 'Books',
                'department_id' => 4,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fiction',
                'department_id' => 4,
                'parent_id' => 10, // Parent: Books
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Science',
                'department_id' => 4,
                'parent_id' => 10, // Parent: Books
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}