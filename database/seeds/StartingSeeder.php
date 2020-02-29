<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class StartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            "first_name"    =>  "Mohsen",
            "last_name"     =>  "Bagheri",
            "phone_number"  =>  "09106769465",
            "password"      =>  Hash::make("admin"),
            'is_active'     =>  True
        ]);



    }
}
