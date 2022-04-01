<?php

namespace Database\Seeders;

use App\Models\Supervisor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Worker;
use Database\Factories\WorkerSupervisorFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        Worker::factory(500)->create();
        Supervisor::factory(5)->create();

        foreach(Worker::all() as $worker) {

            foreach(Supervisor::all() as $supervisor) {
                //30%
                if (rand(1, 100) > 70) {
                        $worker->supervisor()->attach($supervisor->id);
                }
            }
            $worker->save();
        }   
}

    }