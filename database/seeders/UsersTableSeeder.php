<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'rene@bild.mx',
            'password' => bcrypt('ZZik672ro4K@'),
        ]);

    }
}
