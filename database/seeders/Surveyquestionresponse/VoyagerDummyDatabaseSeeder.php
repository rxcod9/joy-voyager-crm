<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DummySurveyquestionresponsesTableSeeder::class
        ]);
    }
}
