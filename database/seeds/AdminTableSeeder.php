<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('admins')->first();
        if(!$admin){
            DB::table('admins')->insert([
                'name' => 'shobhit singh',
                'email' => 'sksingh@yopmail.com',
                'password' => md5(111111)
            ]);
        }
    }
}
