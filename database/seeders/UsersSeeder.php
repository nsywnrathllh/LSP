<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $userData = [
            [
                'name'=> 'Admin',
                'email' =>'admin@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>'admin',
                'aktif'=> '1'
            ],
            [
                'name' => 'Pemilik',
                'email' =>'pemilik@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>'pemilik',
                'aktif'=> '1'
            ],
            [
                'name'=> 'Bendahara',
                'email' =>'bendahara@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>'bendahara',
                'aktif'=> '1'
            ],
            [
                'name'=> 'Nasywa',
                'email' =>'nasywa@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>'pelanggan',
                'aktif'=> '1'
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
