<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Product::create([
            'name' => 'Sữa rửa mặt Cetaphil',
            'type' => 'Sữa rửa mặt',
            'provider' => 'VFU Shop',
            'sex' => 'Nam & nữ',
            'skin_problem' => 'Da nhạy cảm, kích ứng, mẫn đỏ',
            'skin_type' => 'Mọi loại da',
            'description' => 'Có khả năng làm sạch sâu, loại bỏ hoàn toàn bụi bẩn, và tạp chất trên da một cách dịu nhẹ nhưng vẫn duy trì độ ẩm tự nhiên để bảo vệ da khỏi tình trạng khô ráp, sữa rửa mặt Cetaphil mới với công thức lành tính không gây kích ứng sẽ an toàn cho mọi loại da, kể cả da nhạy cảm.',
            'quantity' => 15,
            'price' => 329000,
            'price_todel' => 395000,
            'link_photo' => 'Cetaphil.png',
        ]);

        // Thêm dữ liệu mẫu khác
        Product::create([
            'name' => 'Sữa rửa mặt Simple',
            'type' => 'Sữa rửa mặt',
            'provider' => 'VFU Shop',
            'sex' => 'Nam & nữ',
            'skin_problem' => 'Da nhạy cảm, kích ứng, mẫn đỏ',
            'skin_type' => 'Da nhạy cảm',
            'description' => 'sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da.',
            'quantity' => 100,
            'price' => 155000,
            'price_todel' => 197000,
            'link_photo' => 'Simple.png',
        ]);
        Product::create([
            'name' => 'Sữa rửa mặt Nivea',
            'type' => 'Sữa rửa mặt',
            'provider' => 'Bici Cosmetic',
            'sex' => 'Nữ',
            'skin_problem' => 'Da xạm, xỉn, không đều màu',
            'skin_type' => 'Da thường',
            'description' => 'sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da.',
            'quantity' => 100,
            'price' => 150000,
            'price_todel' => 1750000,
            'link_photo' => 'Nivea.png',
        ]);

        Product::create([
            'name' => 'Sữa rửa mặt Oxy',
            'type' => 'Sữa rửa mặt',
            'provider' => 'Bici Cosmetic',
            'sex' => 'Nam',
            'skin_problem' => 'Da dầu, lỗ chân lông to',
            'skin_type' => 'Da dầu',
            'description' => 'Sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da.',
            'quantity' => 100,
            'price' => 150000,
            'price_todel' => 1750000,
            'link_photo' => 'Oxy.png',
        ]);
//         Product::create([
//             'name' => 'Kem chống nắng Anessa',
//             'type' => 'Kem chống nắng',
//             'provider' => 'Olay',
//             'sex' => 'Nam & nữ',
//             'skin_problem' => 'Da dầu, lỗ chân lông to',
//             'skin_type' => 'Da dầu',
//             'description' => 'Sản phẩm chống nắng đến từ thương hiệu chống nắng dưỡng da ANESSA hàng đầu Nhật Bản suốt 21 năm liên tiếp, giúp chống lại tác hại của tia UV & bụi mịn tối ưu dưới mọi điều kiện sinh hoạt, kể cả thời tiết khắc nghiệt nhất. Sản phẩm ứng dụng công nghệ Auto Booster và Very Water Resistant độc quyền từ thương hiệu ANESSA, giúp cho lớp màng chống UV trở nên bền vững hơn khi gặp NHIỆT ĐỘ CAO - ĐỘ ẨM - MỒ HÔI - NƯỚC - MA SÁT, đồng thời chống trôi trong nước lên đến 80 phút, chống bụi mịn PM.25 và chống dính cát. Ngoài ra, sự bổ sung của phức hợp 50% thành phần dưỡng da giúp ngăn ngừa lão hoá do tia UV hiệu quả và nuôi dưỡng da ẩm mịn.',
//             'quantity' => 45,
//             'price' => 347000, // Không có giá khuyến mãi
//             'link_photo' => 'Anessa.png',
//         ]);
//         Product::create([
//             'name' => 'Kem chống nắng Skin1004',
//             'type' => 'Kem chống nắng',
//             'provider' => 'Olay',
//             'sex' => 'Nam & nữ',
//             'skin_problem' => 'Da nhạy cảm, kích ứng, mẩn đỏ',
//             'skin_type' => 'Da nhạy cảm',
//             'description' => 'Sản phẩm kem chống nắng đến từ thương hiệu mỹ phẩm Skin1004 của Hàn Quốc, là kem chống nắng vật lý với chiết xuất rau má và chất kem mỏng nhẹ có màu giúp che phủ nhẹ khuyết điểm cho da. Công thức đa năng vừa chống nắng vừa đều màu da lại dưỡng ẩm chính là sản phẩm mà những cô nàng da mụn hay da dầu nhạy cảm cần vì không cần sử dụng quá nhiều bước lỉnh kỉnh.',
//             'quantity' => 23,
//             'price' => 276000,
//             'price_todel' => 325000, // Không có giá khuyến mãi
//             'link_photo' => 'Skin1004.png',
//         ]);
//         Product::create([
//             'name' => 'Gel Chống Nắng Biore',
//             'type' => 'Kem chống nắng',
//             'provider' => 'Revlon',
//             'sex' => 'Nữ',
//             'skin_problem' => 'Da khô, mất nước',
//             'skin_type' => 'Mọi loại da',
//             'description' => 'Sản phẩm chống nắng da mặt đến từ thương hiệu mỹ phẩm Bioré của tập đoàn Kao Nhật Bản, với chiết xuất hương hoa mẫu đơn, sữa ong chúa giúp làm giảm kích ứng và dưỡng ẩm làn da trước các tác nhân gây hại từ UV.',
//             'quantity' => 12,
//             'price' => 172000,
//             'price_todel' => null, 
//             'link_photo' => 'Biore.png',
//         ]);
        
      
//         Product::create([
//             'name' => 'Tinh Chất Chống Nắng Sunplay',
//             'type' => 'Kem chống nắng',
//             'provider' => 'VFU Shop',
//             'sex' => 'Nam & nữ',
//             'skin_problem' => 'Da sạm, xỉn, không đều màu',
//             'skin_type' => 'Da khô',
//             'description' => 'Sản phẩm chống nắng da mặt đến từ thương hiệu Sunplay - nhãn hàng chống nắng dưỡng da nổi tiếng xuất xứ Nhật Bản, với 3 tác dụng chỉ trong 1 sản phẩm: khả năng chống nắng cực đỉnh (SPF 50+ PA++++), giữ ẩm và dưỡng sáng da tối ưu (nhờ thành phần dưỡng ẩm Hyaluronic Acid và Vitamin C), khả năng hiệu chỉnh sắc da và nâng tone da rạng rỡ. Kết cấu dạng tinh chất mỏng nhẹ, không nhờn rít giúp da luôn ẩm mượt.',
//             'quantity' => 29,
//             'price' => 150000,
//             'price_todel' => 195000,
//             'link_photo' => 'Sunplay.png',
//         ]);
//         Product::create([
//             'name' => 'Serum Garnier',
//             'type' => 'Serum',
//             'provider' => 'Revlon',
//             'sex' => 'Mọi loại da',
//             'skin_problem' => 'Da mụn',
//             'skin_type' => 'Mọi loại da',
//             'description' => 'Sản phẩm serum đến từ thương hiệu mỹ phẩm Garnier của Pháp, với công thức vượt trội 4% phức hợp Vitamin C, BHA, Niacinamide, AHA có công dụng giảm mụn, mờ vết thâm và vết thâm do mụn đồng thời làn da sẽ được làm dịu, sáng hơn rõ rệt. Sản phẩm hoạt động theo cơ chế 3 tác động làm giảm bã nhờn - tiêu sừng - mờ thâm mang lại làn da sáng mịn, rạng ngời.',
//             'quantity' => 40,
//             'price' => 259000,
//             'price_todel' => 355000, // Giữ nguyên giá khuyến mãi
//             'link_photo' => 'SerumGarnier.png', // Thay đổi tên ảnh
//         ]);
        
//         // Sửa thông tin cho sản phẩm "Serum Skin1004"
//         Product::create([
//             'name' => 'Serum Skin1004',
//             'type' => 'Serum',
//             'provider' => 'Olay',
//             'sex' => 'Da thường',
//             'skin_problem' => 'Da nhạy cảm, kích ứng, mẩn đỏ',
//             'skin_type' => 'Da thường',
//             'description' => 'Sản phẩm bán chạy nhất của thương hiệu chăm sóc da Skin1004 đến từ Hàn Quốc, đoạt giải thưởng Best of Beauty Award 2019 Winner của tạp chí Female Daily. Sản phẩm chứa chiết xuất từ rau má giúp làm dịu da, giảm sưng viêm mụn, hỗ trợ phục hồi da và chữa lành các thương tổn do mụn hoặc kích ứng gây ra, tái tạo làn da mới tươi sáng và mịn màng hơn.',
//             'quantity' => 22,
//             'price' => 350000,
//             'price_todel' => 390000,
//             'link_photo' => 'SerumSkin1004.png', // Thay đổi tên ảnh
//         ]);
//         Product::create([
//             'name' => 'Serum GoodnDoc',
//             'type' => 'Serum',
//             'provider' => 'Gosh',
//             'sex' => 'Da dầu',
//             'skin_problem' => 'Da nhạy cảm, kích ứng, mẩn đỏ',
//             'skin_type' => 'Da dầu',
//             'description' => 'Sản phẩm serum dưỡng da đến từ thương hiệu GoodnDoc của Hàn Quốc, chứa thành phần Pro-Vitamin B5 kết hợp cùng Hyaluronic Acid, Adenosine và Niacinamide giúp dưỡng ẩm chuyên sâu và hỗ trợ phục hồi làn da tổn thương, kích ứng. Giúp da luôn căng đầy sức sống, trẻ hóa và căng mịn da. Bảo vệ làn da của bạn khỏi cháy nắng, nám tàn nhang da. Phục hồi tăng cường độ đàn hồi cho da, giúp da khô ráp trở nên mịn màng và trẻ trung hơn.',
//             'quantity' => 35,
//             'price' => 126000,
//             'price_todel' => 175000, // Giữ nguyên giá khuyến mãi
//             'link_photo' => 'SerumGoodnDoc.png', // Thay đổi tên ảnh
//         ]);
        
//         // Sửa thông tin cho sản phẩm "Serum Klairs"
//         Product::create([
//             'name' => 'Serum Klairs',
//             'type' => 'Serum',
//             'provider' => 'Bici Cosmetic',
//             'sex' => 'Nam & nữ',
//             'skin_problem' => 'Da khô, mất nước',
//             'skin_type' => 'Da khô',
//             'description' => 'Sản phẩm tinh chất (serum) giúp cung cấp độ ẩm chuyên sâu dành cho tình trạng da khô mất nước, giúp da trở nên căng mọng ngay tức thì, đồng thời hỗ trợ làm dịu mát da, xoa dịu mẩn đỏ và hỗ trợ ngăn ngừa các dấu hiệu lão hóa.',
//             'quantity' => 66,
//             'price' => 250000,
//             'price_todel' => 299000, 
//             'link_photo' => 'SerumKlairs.png', 
//         ]);
//         // Sản phẩm "Kem Dưỡng Ẩm Neutrogena"
// Product::create([
//     'name' => 'Kem Dưỡng Ẩm Neutrogena',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Olay',
//     'sex' => 'Da dầu',
//     'skin_problem' => 'Da khô, mất nước',
//     'skin_type' => 'Da khô, mất nước',
//     'description' => 'Kem dưỡng ẩm đến từ thương hiệu mỹ phẩm Neutrogena của Mỹ, bảo vệ độ ẩm cho da mạnh hơn 80% cùng với công thức 1% các yếu tố giữ ẩm tự nhiên chứa Hyaluronic Acid, Axit Amin và chất điện giải. Kết cấu nhẹ thích hợp sử dụng hàng ngày. Với công thức chăm sóc da cải tiến và đã qua kiểm nghiệm da liễu, Kem Dưỡng Ẩm Neutrogena Hydro Boost Water Gel 50g giúp kích hoạt khả năng tiềm ẩn của làn da - tự sản sinh ra hàm lượng Hyaluronic Acid tự nhiên của hàng triệu tế bào da, từ đó mang lại độ ẩm dồi dào và dài lâu hơn, duy trì làn da thật ẩm mịn và căng mướt. Sản phẩm phù hợp cho cả nam lẫn nữ và đặc biệt lý tưởng cho làn da từ thường đến dầu, da đang gặp tình trạng thiếu nước.',
//     'quantity' => 120,
//     'price' => 270000,
//     'price_todel' => 299000,
//     'link_photo' => 'AmNeutrogena.png',
// ]);

// // Sản phẩm "Sữa Dưỡng Ẩm Embryolisse"
// Product::create([
//     'name' => 'Sữa Dưỡng Ẩm Embryolisse',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Bici Cosmetic',
//     'sex' => 'Mọi loại da',
//     'skin_problem' => 'Da khô, mất nước',
//     'skin_type' => 'Mọi loại da',
//     'description' => 'Sản phẩm kem dưỡng đa năng đến từ thương hiệu Embryolisse của Pháp, với các thành phần tự nhiên lành tính, không gây dị ứng, hỗ trợ cấp nước, giữ ẩm cho làn da luôn căng bóng, mềm mịn và rạng rỡ. Kết cấu sản phẩm dạng kem sữa, phù hợp làm lớp lót trước trang điểm, kem dưỡng ẩm hoặc mặt nạ dưỡng da, mang lại sự thoải mái cho cả những làn da khô & nhạy cảm nhất.',
//     'quantity' => 200,
//     'price' => 375000,
//     'price_todel' => 0, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'AmEmbryolisse.png',
// ]);

// // Sản phẩm "Kem Dưỡng ẩm Vichy"
// Product::create([
//     'name' => 'Kem Dưỡng ẩm Vichy',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Revlon',
//     'sex' => 'Da khô',
//     'skin_problem' => 'Da sạm, xỉn, không đều màu',
//     'skin_type' => 'Da khô',
//     'description' => 'Kem dưỡng ẩm ban đêm thuộc bộ sản phẩm Liftactiv Collagen Specialist ngăn ngừa lão hóa da mới từ thương hiệu dược mỹ phẩm Vichy. Công thức chuyên biệt chứa phức hợp Bio-Peptide, Resveratrol nguồn gốc tự nhiên và nước khoáng núi lửa Vichy giúp làm sáng da, mờ thâm nám rõ rệt, mang lại làn da đều màu, săn chắc và rạng rỡ hơn, nếp nhăn được giảm thiểu đáng kể.',
//     'quantity' => 125,
//     'price' => 875000,
//     'price_todel' => 990000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'AmVichy.png',
// ]);

// // Sản phẩm "Kem Dưỡng Bioderma"
// Product::create([
//     'name' => 'Kem Dưỡng Bioderma',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Gosh',
//     'sex' => 'Da nhạy cảm',
//     'skin_problem' => 'Da nhạy cảm, kích ứng, mẩn đỏ',
//     'skin_type' => 'Da nhạy cảm',
//     'description' => 'Sản phẩm kem dưỡng đến từ thương hiệu mỹ phẩm GoodnDoc của Hàn Quốc, với thành phần chính là tinh chất rau má giúp kích thích tổng hợp callogen nội sinh, giúp da sáng mịn màng, tăng tái tạo, phục hồi tế bào da. Ngoài ra sản phẩm còn bổ sung Ceramic, Beta glucan, Hyaluronic Acid tạo lớp màng ẩm bảo vệ da, cung cấp dưỡng chất cho da giúp da khỏe mạnh.',
//     'quantity' => 23,
//     'price' => 360000,
//     'price_todel' => 400000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'AmBioderma.png',
// ]);

// // Sản phẩm "Kem Dưỡng GoodnDoc"
// Product::create([
//     'name' => 'Kem Dưỡng Ẩm GoodnDoc',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Max',
//     'sex' => 'Mọi loại da',
//     'skin_problem' => 'Da bị tổn thương',
//     'skin_type' => 'Mọi loại da',
//     'description' => 'Sản phẩm kem dưỡng đến từ thương hiệu mỹ phẩm GoodnDoc của Hàn Quốc, với thành phần chính là tinh chất rau má giúp kích thích tổng hợp callogen nội sinh, giúp da sáng mịn màng, tăng tái tạo, phục hồi tế bào da. Ngoài ra sản phẩm còn bổ sung Ceramic, Beta glucan, Hyaluronic Acid tạo lớp màng ẩm bảo vệ da, cung cấp dưỡng chất cho da giúp da khỏe mạnh.',
//     'quantity' => 38,
//     'price' => 450000,
//     'price_todel' => 490000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'AmGoodnDoc.png',
// ]);

// // Sản phẩm "Kem Dưỡng Hatomugi"
// Product::create([
//     'name' => 'Kem Dưỡng Hatomugi',
//     'type' => 'Kem dưỡng ẩm',
//     'provider' => 'Max',
//     'sex' => 'Da khô',
//     'skin_problem' => 'Da khô, mất nước',
//     'skin_type' => 'Da khô, mất nước',
//     'description' => 'Kem dưỡng đến từ thương hiệu mỹ phẩm Hatomugi của Nhật Bản, với thành phần chính từ 81% là nước và hạt ý dĩ cải thiện tình trạng khô ráp và mang đến làn da căng mướt, mịn màng, rạng rỡ. Bên cạnh đó, hỗ trợ làm dịu làn da kích ứng và làm sáng da.',
//     'quantity' => 42,
//     'price' => 560000,
//     'price_todel' => 595000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'AmHatomugi.png',
// ]);
// // Sản phẩm "Nước Tẩy Trang Garnier"
// Product::create([
//     'name' => 'Nước Tẩy Trang Garnier',
//     'type' => 'Tẩy trang',
//     'provider' => 'VFU Shop',
//     'sex' => 'Da dầu',
//     'skin_problem' => 'Da dầu, lỗ chân lông to',
//     'description' => 'Dòng sản phẩm tẩy trang nổi tiếng đến từ thương hiệu Garnier của Pháp, sử dụng công nghệ Micelles (Micellar Technology) có chứa các phân tử mi-xen hoạt động theo cơ chế nam châm giúp nhẹ nhàng làm sạch da và lấy đi bụi bẩn, cặn trang điểm và dầu thừa sâu bên trong lỗ chân lông mà không gây khô da.',
//     'quantity' => 300,
//     'price' => 260000,
//     'price_todel' => 295000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'TTGarnier.png',
// ]);

// // Sản phẩm "Nước Tẩy Trang Garnier - Bioderma"
// Product::create([
//     'name' => 'Nước Tẩy Trang Garnier - Bioderma',
//     'type' => 'Tẩy trang',
//     'provider' => 'Olay',
//     'sex' => 'Mọi loại da',
//     'skin_problem' => 'Da nhạy cảm, kích ứng, mẩn đỏ',
//     'description' => 'Sản phẩm nước tẩy trang công nghệ Micellar đầu tiên trên thế giới, do thương hiệu dược mỹ phẩm Bioderma nổi tiếng của Pháp phát minh. Dung dịch giúp làm sạch sâu da và loại bỏ lớp trang điểm nhanh chóng mà không cần rửa lại bằng nước. Công thức dịu nhẹ, không kích ứng, không gây khô căng da, đặc biệt phù hợp với làn da nhạy cảm.',
//     'quantity' => 260,
//     'price' => 250000,
//     'price_todel' => 0, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'NuocTayTrangGarnierBioderma.png',
// ]);

// // Sản phẩm "Nước Tẩy Trang L'Oreal"
// Product::create([
//     'name' => 'Nước Tẩy Trang L\'Oreal',
//     'type' => 'Tẩy trang',
//     'provider' => 'Bici Cosmetic',
//     'sex' => 'Da khô',
//     'skin_problem' => 'Da dầu, lỗ chân lông to',
//     'description' => 'Sản phẩm tẩy trang dạng nước đến từ thương hiệu L\'Oreal Paris, được ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, lấy đi bụi bẩn, dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da thông thoáng, mềm mượt mà không hề khô căng.',
//     'quantity' => 360,
//     'price' => 150000,
//     'price_todel' => 195000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'TTLOreal.png',
// ]);

// // Sản phẩm "Nước Tẩy Trang Senka"
// Product::create([
//     'name' => 'Nước Tẩy Trang Senka',
//     'type' => 'Tẩy trang',
//     'provider' => 'KissA Skincare',
//     'sex' => 'Da thường',
//     'skin_problem' => 'Da dầu, lỗ chân lông to',
//     'description' => 'Dòng sản phẩm tẩy trang dạng nước từ thương hiệu mỹ phẩm SENKA Nhật Bản, với công thức Micellar giúp giúp làm sạch bụi bẩn, bã nhờn, lớp trang điểm lâu trôi tận sâu lỗ chân lông một cách hiệu quả mà vẫn dịu nhẹ cho làn da. Đặc biệt, mỗi phân loại được bổ sung các chiết xuất thiên nhiên giúp nuôi dưỡng và hỗ trợ cải thiện từng vấn đề về da riêng biệt.',
//     'quantity' => 120,
//     'price' => 80000,
//     'price_todel' => 120000, // Giữ nguyên giá khuyến mãi
//     'link_photo' => 'TTSenka.png',
// ]);

// // Sản phẩm "Nước Tẩy Trang Cocoon"
// Product::create([
//     'name' => 'Nước Tẩy Trang Cocoon',
//     'type' => 'Tẩy trang',
//     'provider' => 'Gosh',
//     'sex' => 'Da nhảy cảm',
//     'skin_problem' => 'Da dầu, lỗ chân lông to',
//     'description' => 'Sản phẩm sữa rửa mặt độc đáo đến từ thương hiệu mỹ phẩm Việt Nam Cocoon, được chiết xuất từ thành phần tự nhiên phù hợp với làn da dầu mụn như bí đao, rau má, tràm trà... Công thức dạng gel tạo bọt nhẹ nhàng nhưng lại có khả năng làm sạch sâu, ngăn ngừa các tác nhân gây mụn, đặc biệt là mụn ẩn dưới da, mang đến cho sự ẩm mịn tự nhiên cùng cảm giác vô cùng tươi mới và sạch sẽ. Độ pH 5.5 cân bằng lý tưởng, an toàn cho làn da dầu, mụn & nhạy cảm.',
//     'quantity' => 20,
//     'price' => 160000,
//     'price_todel' => 195000,
//     'link_photo' => 'TTCocoon.png',
// ]);



    }
}
