<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'        => 1,
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'username'  => 'admin',
            'password'  => 'adminadmin'
        ]);
    }
}
