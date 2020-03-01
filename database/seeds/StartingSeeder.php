<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Modules\User\Entities\Unit;

class StartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $user = User::create([
            "first_name"    =>  "Mohsen",
            "last_name"     =>  "Bagheri",
            "phone_number"  =>  "09106769465",
            "job_title"     =>  "programmer",
            "password"      =>  Hash::make("admin"),
            'is_active'     =>  True
        ]);

        $unit = Unit::create([
            'user_id'   =>  $user->id,
            'name'      =>  "programming"
        ]);

        $user->update(['unit_id'=>$unit->id]);




    }
}
