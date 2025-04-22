#a
SELECT * FROM tbl_bantin ORDER BY solike DESC LIMIT 10;
#b
SELECT * FROM tbl_bantin WHERE tieude LIKE '%công nghệ%';
#c
SELECT * FROM tbl_bantin b JOIN tbl_danhmuc d ON b.id_danhmuc = d.id_danhmuc WHERE ten_danhmuc IN ('Đời sống', 'Giáo dục');
#d
SELECT bl.tieude, bl.noidung FROM tbl_binhluan AS bl JOIN tbl_bantin AS bt ON bl.id_bantin = bt.id_bantin WHERE bt.tieude = 'Sự thay đổi cách thức mua sắm của khách hàng trong thời kì thương mại điện tử';
#e
SELECT dg.*
FROM tbl_binhluan bl
JOIN tbl_docgia dg ON bl.id_docgia = dg.id_docgia
JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
WHERE bt.tieude = 'Thoái trào tất yêu của Apple trước cạnh tranh trên thị trường smartphone' AND bt.tukhoa LIKE '%ngốc nghếch%';
#f
SELECT tieude, solike FROM tbl_bantin ORDER BY solike DESC;
#g
INSERT INTO tbl_bantin 
(id_bantin, id_danhmuc, tieude, hinhanh, noidung, tukhoa, nguontin, solike, rating)
VALUES 
(28, (SELECT id_danhmuc FROM tbl_danhmuc WHERE ten_danhmuc = 'Công nghệ'), 'AI làm thay đổi cách chúng ta học tập', 'ai.jpg', 'Học sinh giờ dùng AI làm bài suốt', 'AI, học tập, công nghệ', 'Báo Công nghệ', 10, 7);
#h
INSERT INTO tbl_binhluan 
(id_binhluan, tieude, noidung, solike, thoigian, id_bantin, id_docgia) 
VALUES 
(21, 'Chờ đợi sản phẩm đột phá!', 'Hy vọng Samsung có chiến lược tốt để không đi vào vết xe đổ của Apple.', 6, '2023-06-07 09:00:00', (SELECT id_bantin FROM tbl_bantin WHERE tieude = 'Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple'), 3);
#i
UPDATE tbl_bantin
SET noidung = 'Nội dung mới đang được cập nhật'
WHERE id_bantin = 123;

SELECT id_bantin FROM tbl_bantin WHERE tieude = 'Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple';
