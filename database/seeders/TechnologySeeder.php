<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['Html', 'Javascript', 'Css', 'Vue.js', 'Laravel', 'Php', 'Boostrap'];
        foreach($technologies as $item){
            $newTechnology = new Technology();
            $newTechnology->name = $item;
            $newTechnology->slug = Str::slug($item, '-');
            $newTechnology->save();
        }
    }
}
