<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thêm dữ liệu mới
        $this->seedData();
    }
    private function seedData()
    {
        $customerId = 2; // ID của khách hàng

        for ($i = 1; $i <= 5; $i++) {
            DB::table('don_hang')->insert([
                'name' => "Đơn hàn $i",
                'address' => "Địa chỉ đơn hàng $i",
                'date' => now(),
                'phone' => '0123456789',
                'status' => 'Đang xử lý',
                'enable' => true,
                'total' => rand(100, 500),
                'idCus' => $customerId,
            ]);
        }
    }
}
