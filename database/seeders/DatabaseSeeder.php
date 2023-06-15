<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Building;
use App\Models\Room;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Rent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        { {
            }
        }
        // \Ap{{ p\Mo }}dels\User::factory()->create([
        //    {{  'na }}me' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'super admin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'dosen',
        ]);

        Role::create([
            'name' => 'ketua kelompok',
        ]);

        Role::create([
            'name' => 'mahasiswa',
        ]);

        Role::create([
            'name' => 'guest',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'nomor_induk' => '2001194590',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Awi',
            'email' => 'awi@gmail.com',
            'password' => bcrypt('awi'),
            'nomor_induk' => '2007703',
            'role_id' => 2,
        ]);


        User::create([
            'name' => 'Afist',
            'email' => 'afist@gmail.com',
            'password' => bcrypt('afist'),
            'nomor_induk' => '1007272',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'Syifa',
            'email' => 'syifa@gmail.com',
            'password' => bcrypt('syifa'),
            'nomor_induk' => '1905221',
            'role_id' => 4,
        ]);



        Room::create([
            'code' => 'R301',
            'name' => 'Aula',
            'status' => false,
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
        ]);

        Room::create([
            'code' => 'R302',
            'name' => 'Lab Jaringan',
            'status' => false,
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
        ]);

        Room::create([
            'code' => 'R303',
            'name' => 'Lab Komputer',
            'status' => false,
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
        ]);

        Room::create([
            'code' => 'A201',
            'name' => 'Proyektor',
            'status' => false,
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
        ]);

        Room::create([
            'code' => 'A202',
            'name' => 'Laptop',
            'status' => false,
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 4),
            'no_handphone' => '081234566789',
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-11 08:00:00',
            'time_end_use' => '2022-05-11 12:00:00',
            'purpose' => 'praktikum',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 4),
            'no_handphone' => '08998765432',
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2022-05-20 09:00:00',
            'time_end_use' => '2022-05-20 12:00:00',
            'purpose' => 'Responsi',
            'status' => 'selesai',
        ]);
    }
}
