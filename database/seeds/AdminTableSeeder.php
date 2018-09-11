<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('admins')->insert([
            'fullname' => 'admin',
            'email' => 'admin@kmipn.com',
            'password' => \Hash::make('sandiaman'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
