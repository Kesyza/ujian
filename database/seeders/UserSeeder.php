<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $pengguna = Role::create([
            'name' => 'user',
            'display_name' => 'User Pengguna'
        ]);

        $user = new User;
        $user->name = 'Admin Tryout Assalaam';
        $user->email = 'adminujian@gmail.com';
        $user->password = Hash::make('1234567890');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'Siswa Tryout';
        $pengunjung->email = 'userbiasa@gmail.com';
        $pengunjung->password = Hash::make('1234567890');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
