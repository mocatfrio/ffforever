<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeddingInvitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('users')->insert(['name' => 'John Doe', 'seed' => true]);
    }
}
