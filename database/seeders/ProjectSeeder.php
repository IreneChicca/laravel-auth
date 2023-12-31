<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_projects = config('projects');

        foreach($_projects as $_project){

            $project = new Project();

            $project->title= $_project['title'];
            $project->date= $_project['date'];
            $project->main_lang= $_project['main_lang'];
            $project->commit= $_project['commit'];
            $project->bonus= $_project['bonus'];

            $project->save();
        }

    }
}