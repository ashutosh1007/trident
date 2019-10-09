<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Ashutosh',
            'email' => 'ashu@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
