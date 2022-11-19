<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'user_id' => 1,
            'first_name' => "admin",
            'last_name' => "admin",
            'gender' => "male",
            'birthdate' => "1996-11-22",
            'mobile_number' => 1234567890,
            'address' => "admin address",
            'toda_group' => "Anos",
            'plate_number' => "ADM1234",
            'photo_url' => 'uploads/member_photos/etoda-default-image.png',
        ]);
    }
}
