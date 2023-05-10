<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'tes',
            'email' =>'oke@gmail.com',
            'password' => Hash::make('password')
        ]);

        // Tambahkan data pengguna lainnya jika diperlukan
    }
}
