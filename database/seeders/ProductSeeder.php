<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Cetaphil',
                'type'=>'Sữa rửa mặt',
                'provider'=>'VFU Shop',
                'enable'=>'1',
                'sex'=>'Nam Nữ',
                'skin_problem'=>'Da nhạy cảm, kích ứng, mẫn đỏ',
                'skin_type'=>'Mọi loại da',
                'description'=>'Có khả năng làm sạch sâu, loại bỏ hoàn toàn bụi bẩn, và tạp chất trên da một cách dịu nhẹ nhưng vẫn duy trì độ ẩm tự nhiên để bảo vệ da khỏi tình trạng khô ráp, sữa rửa mặt Cetaphil mới với công thức lành tính không gây kích ứng sẽ an toàn cho mọi loại da, kể cả da nhạy cảm.',
                'quantity'=>15,
                'price'=>329000,
                'link_photo'=>''
            ],
            [
                'name'=>'Simple',
                'type'=>'Sữa rửa mặt',
                'provider'=>'VFU Shop',
                'enable'=>'1',
                'sex'=>'Nam Nữ',
                'skin_problem'=>'Da nhạy cảm, kích ứng, mẫn đỏ',
                'skin_type'=>'Da nhạy cảm',
                'description'=>'sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da',
                'quantity'=>15,
                'price'=>100000,
                'link_photo'=>''

            ],
            [
                'name'=>'Nivea',
                'type'=>'Sữa rửa mặt',
                'provider'=>'Bici Cosmetic',
                'enable'=>'1',
                'sex'=>'Nữ',
                'skin_problem'=>'Da xạm, xỉn, không đều màu',
                'skin_type'=>'Da thường',
                'description'=>'Sản phẩm sữa rửa mặt chăm sóc da đến từ thương hiệu mỹ phẩm Nivea của Đức, giúp làm sạch sâu bụi bẩn và lớp trang điểm còn sót lại trên da một cách hiệu quả đồng thời bổ sung thành phần ngọc trai Pearly Bright tăng cường khả năng dưỡng sáng da vượt trội.',
                'quantity'=>15,
                'price'=>150000,
                'link_photo'=>''

            ]
        ]);
    }
}
