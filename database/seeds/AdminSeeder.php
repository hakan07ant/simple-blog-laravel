<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
        'name'=>'Hakan Özdemir',
        'email'=>'hakan07ant@gmail.com',
        'password'=>bcrypt(102030),
      ]);
    }
}
