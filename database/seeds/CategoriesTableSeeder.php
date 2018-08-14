<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Sala', 'slug' => 'sala'],
            ['name' => 'Quarto', 'slug' => 'quarto'],
            ['name' => 'Cozinha', 'slug' => 'cozinha'],
            ['name' => 'Banheiro', 'slug' => 'banheiro']
        ];

        DB::table('categories')->insert($categories);
    }
}
