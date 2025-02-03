<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = collect(["Laravel", 'help', 'bugs']);
        $tag->each(function ($c) {
            \App\Tag::create([
                'nama' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
