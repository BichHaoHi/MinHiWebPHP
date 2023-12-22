<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Feedback::create([
            'name' => 'Bích Hảo',
            'phone' => '0347743943',
            'enable' => 1,
            'desc' => 'Sản phẩm dùng tốt lắm',
            'point' => 5,
            'idUser' => 2,
            'idProduct' => 1,
        ]);
        Feedback::create([
            'name' => 'Bích Hiền',
            'phone' => '0358177141',
            'enable' => 1,
            'desc' => 'Sản phẩm dùng tốt ngay, đẹp tuyệt vời',
            'point' => 5,
            'idUser' => 2,
            'idProduct' => 1,
        ]);
        Feedback::create([
            'name' => 'Bích Ngân',
            'phone' => '0977726695',
            'enable' => 1,
            'desc' => 'Sản phẩm đcccc',
            'point' => 5,
            'idUser' => 2,
            'idProduct' => 2,
        ]);
        Feedback::create([
            'name' => 'Bích Hân',
            'phone' => '0977729975',
            'enable' => 1,
            'desc' => 'Tốt',
            'point' => 5,
            'idUser' => 2,
            'idProduct' => 3,
        ]);
    }
    
}
