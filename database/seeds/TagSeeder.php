<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Carne','Pesce','Ferro','Latta','Vegano','senza glutine','Sicurezza'];

        foreach ($tags as $tag){
            $t = new Tag();
            $t ->name = $tag;
            $t ->slug = Str::slug($tag);

            $t ->save();


        }
    }
}