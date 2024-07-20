<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tins')->insert(
            [
                [
                    'tieu_de' => 'Những đội hình có chuỗi bất bại cực dài trong lịch sử LMHT: Gen.G vẫn còn kém ở yếu tố quan trọng nhất',
                    'tom_tat' => 'Đây là những đội hình có chuỗi bất bại cực dài trong lịch sử LMHT chuyên nghiệp.',
                    'noi_dung' => 'Mới đây, sau trận đại thắng Nongshim RedForce, Gen.G đã cùng lúc lập nên 2 kỷ lục: đầu tiên là đội có chuỗi thắng dài nhất lịch sử giải đấu và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/geng-kyluc-1-17214459232161497318541.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Đội hình tiêu biểu LCK Mùa Xuân 2022; Faker trở lại, T1 chiếm 4/5 thành viên',
                    'tom_tat' => 'Với phong độ hủy diệt, không có gì ngạc nhiên khi T1 có tới 4 thành viên được vinh danh trong đội hình tiêu biểu của LCK Mùa Xuân 2022.',
                    'noi_dung' => 'Với phong độ hủy diệt, không có gì ngạc nhiên khi T1 có tới 4 thành viên được vinh danh trong đội hình tiêu biểu của LCK Mùa Xuân 2022. Danh hiệu tuyển thủ xuất sắc nhất mùa do các đội trường và HLV trưởng của các đội LCK bình chọn đã thuộc về Keria, hỗ trợ của T1. Anh đã chiến thắng với số phiếu áp đảo: 39/41 (Faker và HLV Polt không được bình chọn cho tuyển thủ cùng đội). Theo thống kê ở mùa giải năm nay, Keria dẫn đầu về tỷ lệ tham gia điểm hạ gục (72%), tỷ lệ Chiến công đầu (47%), đồng thời là hỗ trợ có số điểm Hỗ trợ nhiều nhất (462) vượt xa Kellin ở vị trí thứ 2 (129). Bên cạnh kỹ năng tuyệt vời đã được khẳng định kể từ khi anh còn thi đấu cho DRX cho đến tận bây giờ, Keria còn sở hữu cực kỳ rộng, khi sử dụng hơn 30 vị tướng trong mùa giải năm nay.',
                    'hinh_anh' => 'assets/images/all/thumbs/t1-keria-mvp.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'LCK: T1 chốt sổ đội hình thi đấu với các tuyển thủ trẻ cùng dàn HLV đẳng cấp',
                    'tom_tat' => 'Liệu dàn tuyển thủ trẻ T1 có thể làm nên chuyện trong mùa giải tới?',
                    'noi_dung' => 'Mới đây, sau trận đại thắng Nongshim RedForce, Gen.G đã cùng lúc lập nên 2 kỷ lục: đầu tiên là đội có chuỗi thắng dài nhất lịch sử giải đấu và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/t1-doi-hinh-2022-1024x576.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'T1 Mùa Xuân 2022 xứng đáng "ông hoàng của những kỷ lục" nhưng chặng đường phía trước vẫn còn rất dài',
                    'tom_tat' => 'T1 đã xác lập siêu kỷ lục ở Mùa Xuân 2022 nhưng hành trình của họ vẫn còn rất dài.',
                    'noi_dung' => 'MớT1 đã xác lập siêu kỷ lục ở Mùa Xuân 2022 nhưng hành trình của họ vẫn còn rất dài. và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/lck-t1-15-win-streak-1024x576.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Những đội hình có chuỗi bất bại cực dài trong lịch sử LMHT: Gen.G vẫn còn kém ở yếu tố quan trọng nhất',
                    'tom_tat' => 'Đây là những đội hình có chuỗi bất bại cực dài trong lịch sử LMHT chuyên nghiệp.',
                    'noi_dung' => 'Mới đây, sau trận đại thắng Nongshim RedForce, Gen.G đã cùng lúc lập nên 2 kỷ lục: đầu tiên là đội có chuỗi thắng dài nhất lịch sử giải đấu và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/geng-kyluc-1-17214459232161497318541.jpg',
                    'id_danh_muc' => 1,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Đội hình tiêu biểu LCK Mùa Xuân 2022; Faker trở lại, T1 chiếm 4/5 thành viên',
                    'tom_tat' => 'Với phong độ hủy diệt, không có gì ngạc nhiên khi T1 có tới 4 thành viên được vinh danh trong đội hình tiêu biểu của LCK Mùa Xuân 2022.',
                    'noi_dung' => 'Với phong độ hủy diệt, không có gì ngạc nhiên khi T1 có tới 4 thành viên được vinh danh trong đội hình tiêu biểu của LCK Mùa Xuân 2022. Danh hiệu tuyển thủ xuất sắc nhất mùa do các đội trường và HLV trưởng của các đội LCK bình chọn đã thuộc về Keria, hỗ trợ của T1. Anh đã chiến thắng với số phiếu áp đảo: 39/41 (Faker và HLV Polt không được bình chọn cho tuyển thủ cùng đội). Theo thống kê ở mùa giải năm nay, Keria dẫn đầu về tỷ lệ tham gia điểm hạ gục (72%), tỷ lệ Chiến công đầu (47%), đồng thời là hỗ trợ có số điểm Hỗ trợ nhiều nhất (462) vượt xa Kellin ở vị trí thứ 2 (129). Bên cạnh kỹ năng tuyệt vời đã được khẳng định kể từ khi anh còn thi đấu cho DRX cho đến tận bây giờ, Keria còn sở hữu cực kỳ rộng, khi sử dụng hơn 30 vị tướng trong mùa giải năm nay.',
                    'hinh_anh' => 'assets/images/all/thumbs/t1-keria-mvp.jpg',
                    'id_danh_muc' => 1,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'LCK: T1 chốt sổ đội hình thi đấu với các tuyển thủ trẻ cùng dàn HLV đẳng cấp',
                    'tom_tat' => 'Liệu dàn tuyển thủ trẻ T1 có thể làm nên chuyện trong mùa giải tới?',
                    'noi_dung' => 'Mới đây, sau trận đại thắng Nongshim RedForce, Gen.G đã cùng lúc lập nên 2 kỷ lục: đầu tiên là đội có chuỗi thắng dài nhất lịch sử giải đấu và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/t1-doi-hinh-2022-1024x576.jpg',
                    'id_danh_muc' => 1,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'T1 Mùa Xuân 2022 xứng đáng "ông hoàng của những kỷ lục" nhưng chặng đường phía trước vẫn còn rất dài',
                    'tom_tat' => 'T1 đã xác lập siêu kỷ lục ở Mùa Xuân 2022 nhưng hành trình của họ vẫn còn rất dài.',
                    'noi_dung' => 'MớT1 đã xác lập siêu kỷ lục ở Mùa Xuân 2022 nhưng hành trình của họ vẫn còn rất dài. và kế đến là đội có chuỗi thắng 2-0 dài nhất lịch sử LMHT Hàn. Có thể nói, tập thể Gen.G hiện tại là đội hình thống trị tuyệt đối LCK. Tất nhiên, khi bước chân ra đấu trường quốc tế, họ vẫn có những chỗ va vấp, điển hình như trận thua 0-2 trước Top Esports ở Esports World Cup 2024. Tuy nhiên, nếu chỉ tính trong khuôn khổ các giải chính thức do Riot công nhận trong hệ thống thì Gen.G vẫn đang là "độc cô cầu bại".
                Nhưng xét theo top 3 đội tuyển đang có thành tích bất bại cực dài trong lịch sử LCK, Gen.G vẫn đang được xem là kém nhất vì họ còn thiếu một yếu tố quan trọng. Chính là chức vô địch CKTG. SKT T1 Mùa Hè 2015 Đây chính là tập thể đầu tiên đặt ra khái niệm đội hình hoàn hảo ở mọi vị trí và thiết lập kỷ lục bất bại đầu tiên trong lịch sử LCK cũng như LMHT với 14 trận toàn thắng. SKT T1 của năm 2015 thậm chí còn tiệm cận hoàn hảo đến nỗi, nhiều người tin rằng họ sẽ là tập thể đầu tiên giành được Grand Slam danh hiệu. Chỉ đáng tiếc, tại giải đấu MSI đầu tiên của làng LMHT thế giới, SKT T1 2015 đã không thể thắng nổi EDG để rồi không chỉ mất chuỗi bất bại mà còn tiêu tan hy vọng trở thành đội tuyển đầu tiên hoàn thành Golden Road trong lịch sử LMHT.',
                    'hinh_anh' => 'assets/images/all/thumbs/lck-t1-15-win-streak-1024x576.jpg',
                    'id_danh_muc' => 1,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],

                [
                    'tieu_de' => 'Bóng chuyền nam Việt Nam dự kiến dự cúp CLB châu Á sau 5 năm vắng bóng',
                    'tom_tat' => 'Lần gần nhất một CLB bóng chuyền nam Việt Nam dự giải châu Á đã là từ năm 2019 với Thành phố Hồ Chí Minh là đội đại diện.',
                    'noi_dung' => 'Lần gần nhất một CLB bóng chuyền nam Việt Nam dự giải châu Á đã là từ năm 2019 với Thành phố Hồ Chí Minh là đội đại diện Nhà đương kim vô địch giải bóng chuyền vô địch quốc gia - câu lạc bộ Sanest Khánh Hòa dự kiến sẽ tham gia tranh tài ở cúp các CLB châu Á 2024 - sự kiện danh giá nhất bóng chuyền châu lục cấp độ CLB. Hồi đầu năm nay, trước khi diễn ra giai đoạn 1 giải VĐQG, Sanest Khánh Hòa đã bỏ ngỏ khả năng tranh tài ở cúp CLB châu Á bởi Ban tổ chức giải đấu vẫn chưa công bố thời gian, địa điểm tổ chức sự kiện này. Phải đến chiều ngày 15/7 vừa rồi theo giờ Việt Nam, những thông tin mới nhất về thời gian cùng nước chủ nhà của cúp CLB châu Á năm nay mới được hé lộ. Theo đó, giải đấu này sẽ được diễn ra từ ngày 8/9 đến ngày 15/9 tại thành phố Yazd, Iran. Với lịch trình phù hợp, nhiều khả năng đội bóng phố biển sẽ đại diện Việt Nam tham gia thi đấu cùng các đội mạnh ở châu lục. Một số cầu thủ của Sanest Khánh Hòa sẽ tập trung cùng đội tuyển quốc gia để tranh tài 2 chặng của giải SEA V.League 2024. Tuy nhiên, với việc thời gian diễn ra giải đấu này chỉ gói gọn trong tháng 8, điều này không ảnh hưởng đến kế hoạch của huấn luyện viên trưởng Bùi Quang Ngọc ở tháng 9 với cúp các CLB châu Á 2024.',
                    'hinh_anh' => 'assets/images/all/thumbs/669bb5bf26bcb.jpg',
                    'id_danh_muc' => 3,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Sanest Khánh Hòa vô địch giai đoạn I bóng chuyền VĐQG 2024',
                    'tom_tat' => '(Kết quả bóng chuyền) - Sanest Khánh Hòa tỏ ra quá vượt trội so với chủ nhà Hà Tĩnh ở trận đấu hạ màn giai đoạn I giải bóng chuyền VĐQG 2024.',
                    'noi_dung' => '(Kết quả bóng chuyền) - Sanest Khánh Hòa tỏ ra quá vượt trội so với chủ nhà Hà Tĩnh ở trận đấu hạ màn giai đoạn I giải bóng chuyền VĐQG 2024.giải bóng chuyền vô địch quốc gia - câu lạc bộ Sanest Khánh Hòa dự kiến sẽ tham gia tranh tài ở cúp các CLB châu Á 2024 - sự kiện danh giá nhất bóng chuyền châu lục cấp độ CLB. Hồi đầu năm nay, trước khi diễn ra giai đoạn 1 giải VĐQG, Sanest Khánh Hòa đã bỏ ngỏ khả năng tranh tài ở cúp CLB châu Á bởi Ban tổ chức giải đấu vẫn chưa công bố thời gian, địa điểm tổ chức sự kiện này. Phải đến chiều ngày 15/7 vừa rồi theo giờ Việt Nam, những thông tin mới nhất về thời gian cùng nước chủ nhà của cúp CLB châu Á năm nay mới được hé lộ. Theo đó, giải đấu này sẽ được diễn ra từ ngày 8/9 đến ngày 15/9 tại thành phố Yazd, Iran. Với lịch trình phù hợp, nhiều khả năng đội bóng phố biển sẽ đại diện Việt Nam tham gia thi đấu cùng các đội mạnh ở châu lục. Một số cầu thủ của Sanest Khánh Hòa sẽ tập trung cùng đội tuyển quốc gia để tranh tài 2 chặng của giải SEA V.League 2024. Tuy nhiên, với việc thời gian diễn ra giải đấu này chỉ gói gọn trong tháng 8, điều này không ảnh hưởng đến kế hoạch của huấn luyện viên trưởng Bùi Quang Ngọc ở tháng 9 với cúp các CLB châu Á 2024.',
                    'hinh_anh' => 'assets/images/all/thumbs/66113246ca5c6.jpg',
                    'id_danh_muc' => 3,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Danh sách cầu thủ Sanest Khánh Hòa giai đoạn I giải bóng chuyền VĐQG 2024',
                    'tom_tat' => 'Lần gần nhất một CLB bóng chuyền nam Việt Nam dự giải châu Á đã là từ năm 2019 với Thành phố Hồ Chí Minh là đội đại diện.',
                    'noi_dung' => 'Lần gần nhất một CLB bóng chuyền nam Việt Nam dự giải châu Á đã là từ năm 2019 với Thành phố Hồ Chí Minh là đội đại diện Nhà đương kim vô địch giải bóng chuyền vô địch quốc gia - câu lạc bộ Sanest Khánh Hòa dự kiến sẽ tham gia tranh tài ở cúp các CLB châu Á 2024 - sự kiện danh giá nhất bóng chuyền châu lục cấp độ CLB. Hồi đầu năm nay, trước khi diễn ra giai đoạn 1 giải VĐQG, Sanest Khánh Hòa đã bỏ ngỏ khả năng tranh tài ở cúp CLB châu Á bởi Ban tổ chức giải đấu vẫn chưa công bố thời gian, địa điểm tổ chức sự kiện này. Phải đến chiều ngày 15/7 vừa rồi theo giờ Việt Nam, những thông tin mới nhất về thời gian cùng nước chủ nhà của cúp CLB châu Á năm nay mới được hé lộ. Theo đó, giải đấu này sẽ được diễn ra từ ngày 8/9 đến ngày 15/9 tại thành phố Yazd, Iran. Với lịch trình phù hợp, nhiều khả năng đội bóng phố biển sẽ đại diện Việt Nam tham gia thi đấu cùng các đội mạnh ở châu lục. Một số cầu thủ của Sanest Khánh Hòa sẽ tập trung cùng đội tuyển quốc gia để tranh tài 2 chặng của giải SEA V.League 2024. Tuy nhiên, với việc thời gian diễn ra giải đấu này chỉ gói gọn trong tháng 8, điều này không ảnh hưởng đến kế hoạch của huấn luyện viên trưởng Bùi Quang Ngọc ở tháng 9 với cúp các CLB châu Á 2024.',
                    'hinh_anh' => 'assets/images/all/thumbs/6610cfadc77b8.jpg',
                    'id_danh_muc' => 3,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ]
            ]





        );
    }
}
