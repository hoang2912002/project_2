# Phân tích trang web điểm danh học viên


## 1. Đối tượng sử dụng
- Giáo vụ.
- Giảng viên.
- Học viên.

## 2. Chức năng từng đối tượng:
 #### a. Giáo vụ
    + Quản lý khóa
    +	Quản lý ngành
    + 	Quản lý lớp
    +	Quản lý môn học
    +	Quản lý gv
    + 	Quản lý sinh viên
    +	Phân công dạy học
    +	Quản lý điểm danh
    +	Quản lý lịch thi
    +	Quản lý điểm chuyên cần
    +	Quản lý tín chỉ

 #### b. Giảng viên:
    +  Điểm danh học viên(radio).
    +  Tìm kiếm học viên theo lớp, tên, theo ca ( select 2 ).
    +  Thêm sinh viên cho mỗi lớp.
    +  Thống kê lại danh sách học viên (vắng) theo tuần.
    +  Xuất file : excel hoặc gửi mail cho bên liên quan.
 #### c. Học viên:
    +  Xem số cá nhân đã điểm danh, vắng, đi trễ.  
    +  Xem lịch học.  


## 3. Phân tích chức 
#### a. Điểm danh học viên:

| Các tác nhân | Giảng viên |
| ------ | ------ |
| Mô tả | Điểm danh học viên theo tiết. |
| Kích hoạt | Người dùng nhấn vào nút “Attendance” ở menu  |
| Đầu vào | Tên học viên <br> Lớp học <br> Số tiết học <br> Môn học <br> Trường học <br> Ca học (theo tuần , ngày) |
| Trình tự xử lý |  |
| Đầu ra |  Đúng: <br> &nbsp; + Hiển thị danh sách học viên cho  người dùng và thông báo thành công <br> Sai: <br> &nbsp; + Hiển thị trang đăng nhập và thông báo thất bại  |
| Lưu ý | Kiểm tra ô điểm danh học viên theo từng ngày (radio) không được để trống bằng JavaScript |






## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
