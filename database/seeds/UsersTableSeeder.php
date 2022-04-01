<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = DB::table('users')->first();
        if (count($row) == 0) {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@gbisukawarna.org',
                'password' => bcrypt('digital123')
            ]);
        }
    }
}
