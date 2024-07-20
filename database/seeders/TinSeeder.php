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
                    'tieu_de' => 'Leny Yoro rạng rỡ ra mắt Man Utd, lộ diện số áo huyền thoại',
                    'tom_tat' => 'Leny Yoro trở thành tân binh thứ 2 của Man Utd trong kỳ chuyển nhượng hè năm nay.',
                    'noi_dung' => 'Leny Yoro trở thành tân binh thứ 2 của Man Utd trong kỳ chuyển nhượng hè năm nay.Sau tất cả, Man Utd đã chiêu mộ thành công Leny Yoro từ Lille. Thương vụ này tiêu tốn của Quỷ đỏ 70 triệu euro, trong đó 50 triệu euro phí cố định. Đại diện bóng đá Pháp thúc ép Yoro cập bến Old Trafford bởi đây là lời đề nghị tốt nhất mà họ có thể nhận được trên bàn đàm phán. Yoro trở thành tân binh thứ hai của MU trong kỳ chuyển nhượng hè năm nay. Trước đó, Man Utd công bố Zirkzee là chữ ký đầu tiên. Quỷ đỏ trả 42,5 triệu euro với điều khoản thanh toán trong 3 năm.',
                    'hinh_anh' => 'assets/images/all/thumbs/yoroepl_leny-yoro-profile.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => '"Kobbie Mainoo thật là ngây thơ"',
                    'tom_tat' => 'Graeme Souness đã chỉ trích cầu thủ trẻ Kobbie Mainoo của Manchester United vì màn trình diễn của anh tại Giải vô địch châu Âu.',
                    'noi_dung' => 'Graeme Souness đã chỉ trích cầu thủ trẻ Kobbie Mainoo của Manchester United vì màn trình diễn của anh tại Giải vô địch châu Âu.Mainoo lọt vào đội hình xuất phát của Anh ở vòng loại trực tiếp EURO 2024, đặc biệt gây ấn tượng trong các chiến thắng ở tứ kết và bán kết của Anh trước Thụy Sĩ và Hà Lan. Tuy nhiên, sau khi giành được suất đá chính trận chung kết, chỉ sau 8 lần khoác áo đội tuyển quốc gia, cầu thủ 19 tuổi này đã gặp khó khăn trong việc tạo ra ảnh hưởng trước Tây Ban Nha và bị thay ra bởi Cole Palmer giữa hiệp 2. Dù thừa nhận Mainoo rất tài năng, Souness vẫn chỉ trích cầu thủ trẻ này vì sự ngây thơ trong trận thua 1-2 của tuyển Anh trước La Roja.Cựu danh thủ này nói: "Tôi nghĩ cậu ấy cầm bóng rất giỏi. Nhưng cậu ấy không hoàn toàn hiểu được vị trí của mình. Cậu ấy đi lang thang, cậu ấy để lại khoảng trống giữa sân quá dễ dàng." "Cậu ấy vào sân thay người khi đang dẫn trước 1-0 (trong trận đầu tiên của Anh gặp Serbia) và điều đầu tiên cậu ấy làm là đuổi theo và cố gắng gây áp lực cho thủ môn. Thật là ngây thơ, cậu ấy vẫn đang học cách chơi bóng."',
                    'hinh_anh' => 'assets/images/all/thumbs/graeme-souness-slams-naive-man-united-star-kobbie-mainoo-for-his-performances-at-euro-2024-1721311539899.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Graeme Souness: Declan Rice làm điều không tưởng trong trận chung kết EURO',
                    'tom_tat' => 'Trong cuộc trao đổi được trích dẫn bởi Metro, cựu cầu thủ Graeme Souness đã thẳng thừng chỉ trích Declan Rice.',
                    'noi_dung' => 'Trong cuộc trao đổi được trích dẫn bởi Metro, cựu cầu thủ Graeme Souness đã thẳng thừng chỉ trích Declan Rice.Nhận định về màn thể hiện của tuyển Anh trong trận chung kết EURO 2024, cựu cầu thủ Graeme Souness đã đặc biệt chỉ trích Declan Rice. Huyền thoại của Liverpool chia sẻ: "Tuyển Anh có phong độ tốt nhất khi họ bị dẫn trước một bàn. Đột nhiên, họ bắt đầu chấp nhận rủi ro. Họ phải dũng cảm hơn và chấp nhận phạm sai lầm, mạo hiểm chuyền bóng về phía trước." "Thay vào đó, họ chỉ chuyền ngang hoặc chuyền về trong trận chung kết, và điều đó khiến tôi phát điên."“Tôi đã thực hiện một số nghiên cứu, và phát hiện ra rằng Declan Rice chỉ thực hiện được một đường chuyền hướng lên phía trước trong trận gặp Tây Ban Nha. Duy nhất một đường chuyền chính xác hướng lên phía trước trong suốt 90 phút, đối với một tiền vệ… điều đó là không thể!" “Tuyến giữa của tuyển Anh không tồn tại trong trận chung kết với Tây Ban Nha. Harry Kane đã gặp khó khăn vì điều đó, cậu ấy không nhận được đủ bóng. Không ai chuyền bóng cho Kane, cậu ấy xin bóng và không nhận được nó. Tôi đồng cảm với cậu ấy."',
                    'hinh_anh' => 'assets/images/all/thumbs/AP24192760946436.jpg',
                    'id_danh_muc' => 2,
                    'ngay_dang' =>  Carbon::now(),
                    'luot_xem' => rand(100, 1000),

                ],
                [
                    'tieu_de' => 'Anh thua Tây Ban Nha vì những cuộc đối đầu cá nhân',
                    'tom_tat' => 'Thất thế ở từng cá nhân riêng lẻ, Tam Sư đã thất bại trước La Roja trong trận chung kết EURO 2024.',
                    'noi_dung' => 'Thất thế ở từng cá nhân riêng lẻ, Tam Sư đã thất bại trước La Roja trong trận chung kết EURO 2024.Sự chờ đợi mòn mỏn của đội tuyển Anh để bổ sung thêm một danh hiệu nữa vào bộ sưu tập của họ vẫn tiếp tục sau thất bại hụt hẫng 1-2 trước Tây Ban Nha ở những phút cuối cùng trong trận chung kết EURO 2024. Tam Sư chưa bao giờ thể hiện phong độ tốt nhất trong suốt mùa hè và cuối cùng đứng thứ hai sau Tây Ban Nha, đội bóng hoàn toàn xứng đáng kết thúc giải đấu với chức vô địch trong tay. Sau đây là ba cuộc đối đầu cá nhân quan trọng mà người Anh đã không thể giành chiến thắng trong trận chung kết hôm qua.Nico Williams vs Kyle Walker Nico Williams là mối đe dọa lớn ngay từ khi tiếng còi khai cuộc vang lên. Kyle Walker thực sự đã có những nỗ lực khá tốt để ngăn cản ngôi sao của Athletic Bilbao và chắc chắn đã tạo ra tác động thực sự trong hiệp một, nhưng sự thách thức đó đã bị phá vỡ ngay sau khi Williams mở tỷ số cho Tây Ban Nha. Walker nói riêng và tuyển Anh nói chung không thể tìm ra cách ngăn cản Williams, người đã có một mùa hè bùng nổ cùng La Roja.Giải Vô địch Bóng đá châu Âu 2024 đáng thất vọng của Harry Kane có thể khép lại với danh hiệu đồng sở hữu Chiếc giày vàng, nhưng không thể phủ nhận rằng anh đã không đáp ứng được kỳ vọng của người hâm mộ cũng như các chuyên gia. Bị mắc kẹt trong 60 phút không có gì đáng chú ý, Kane chẳng đóng góp được gì nhiều trong suốt thời gian trên sân vì Robin Le Normand tỏ ra quá ổn định. Hậu vệ của Real Sociedad chiếm ưu thế trên không và thực sự đã hạn chế tầm di chuyển của Kane. Không phải ngẫu nhiên mà đội tuyển Anh tỏ ra nguy hiểm nhất khi Kane được thay thế bởi Ollie Watkins, người thường xuyên có những pha chạy chỗ, thực sự đã gây ra những vấn đề cho hàng phòng ngự của Tây Ban Nha ở vài phút cuối trận.',
                    'hinh_anh' => 'assets/images/all/thumbs/walker_nico.jpg',
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
