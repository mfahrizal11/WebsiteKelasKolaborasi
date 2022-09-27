<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in = [
            [
                'id'=>1,
                'name' => 'Rusunawa Untan',
                'password'=> Hash::make('123456'),
                'email' => 'rusunawa@gmail.com',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ]
            
        ];

        DB::table('users')->insert($in);

    }
}
