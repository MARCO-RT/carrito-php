<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' 		=> 'marco',
                'last_name' => 'paredes',
                'email' 	=> 'admin@admin.com',
                'user' 		=> 'marco10',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'address' 	=> 'florida,395-peru',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]);


        DB::table('users')->insert([
            'name' 		=> 'michel',
            'last_name' => 'paredes',
            'email' 	=> 'hola@admin.com',
            'user' 		=> 'michel10',
            'password' 	=> \Hash::make('123456'),
            'type' 		=> 'admin',
            'active' 	=> 1,
            'address' 	=> 'florida,395-peru',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
