<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone_number' => '1234567890',
                'birth_date' => '1990-05-15',
                'password' => Hash::make('$2y$10$y6u4WQg4To4DxE3a9ZATXePwOcsEYsIxUWxIYIf6YPkMfrDAv.Miq'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'phone_number' => '0987654321',
                'birth_date' => '1995-09-20',
                'password' => Hash::make('$2y$10$zT1s7OSDm6jVBkA6pSPe8.Ww0f0th9lPHiIvTKgk7D3ArpS/5v1y2'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alice Smith',
                'email' => 'alice@example.com',
                'phone_number' => '111222333',
                'birth_date' => '1988-12-10',
                'password' => Hash::make('$2y$10$N1WsSPg7L7FJfG3KsH7dquzZRRPZ9FwqDCT/UuLE.WInPvpc5q9fa'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com',
                'phone_number' => '444555666',
                'birth_date' => '1985-07-25',
                'password' => Hash::make('$2y$10$3RPX3wF.2vJ.LX1WmQ3e3uEb9ldl.Jn/mjUvY7N3TWUH9.Z.F5IMe'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}