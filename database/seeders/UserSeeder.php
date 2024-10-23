<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'firstname' => 'Bunyod',
            'lastname' => 'Allabergenov',
            'phone' => '+998999999999',
            'email' => 'bunyod@gmail.com',
            'password' => Hash::make('123')
        ]);
        $client = User::create([
            'firstname' => 'Zuxal',
            'lastname' => 'Sodiqov',
            'phone' => '+998888888888',
            'email' => 'zuxal@gmail.com',
            'password' => Hash::make('123')
        ]);
        $custom = User::create([
            'firstname' => 'A\'zamjon',
            'lastname' => 'Nabijonov',
            'phone' => '+998777777777',
            'email' => 'nabijonov@gmail.com',
            'password' => Hash::make('123')
        ]);

        try {
            $admin->roles()->attach(1);
            $client->roles()->attach(2);
            $custom->roles()->attach(3);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
