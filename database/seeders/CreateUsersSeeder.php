<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              => 'Muqoddam',
                'email'             => 'udilprodigy333@gmail.com',
                'type'              => 1, // 
                'password'          => bcrypt('11111111'),
                'email_verified'    => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ];
        
        
            foreach ($users as $key => $user) {
                User::create($user);
         }
    }
}
