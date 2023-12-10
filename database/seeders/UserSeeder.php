<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
        [
            'name'=>'Cao Sy Ky',
            'address'=>'Quan 2 TP HCM',
            'phone'=>'0865217637',
            'postcode'=>'064303002139',
            'email'=>'csk@gmail.com',
            'birthday'=>'2003/11/09',
            'total'=>0,
            'enable'=>true,
            'password'=>bcrypt('csk@123'),
            'role'=>'admin'
        ],
        [
            'name'=>'Ly Tran Anh Qui',
            'address'=>'Quan 8 TP HCM',
            'phone'=>'0836274635',
            'postcode'=>'086387446297',
            'email'=>'ltaq@gmail.com',
            'birthday'=>'1998/09/21',
            'total'=>0,
            'enable'=>true,
            'password'=>bcrypt('ltaq@123'),
            'role'=>'customer'

        ]
        ]);
    }
}
