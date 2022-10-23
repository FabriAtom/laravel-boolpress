<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'film',
            'serie tv',
            'food',
            'moda',
            'digitale',
            'sport',
        ];

        foreach ($categories as $category){
            $c = new Category(); 
            $c->name = $category;
            $c->slug = Str::slug($category);

            $c->save();
        }
    }
}