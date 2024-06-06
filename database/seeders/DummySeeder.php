<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($i=0; $i < 5000; $i++) {
             User::create([
            'name'      => 'User Ke'.$i,
            'email'     => 'User'.$i.'@gmail.com',
            'password'  =>  Hash::make('inipassword'),
        ]);

        }



    }
}
