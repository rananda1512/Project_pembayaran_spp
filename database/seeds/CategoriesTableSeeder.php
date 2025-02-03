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
        //
        $categories = collect(["fremework", 'code']);
        $categories->each(function ($c) {
            \App\Category::create([
                'nama' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
