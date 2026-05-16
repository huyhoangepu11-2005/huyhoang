# 🌱 Website Bán Đồ Nông Sản

## 📌 Giới thiệu đề tài
Đây là website bán đồ nông sản trực tuyến được xây dựng nhằm hỗ trợ khách hàng tìm kiếm, xem thông tin và đặt mua các sản phẩm nông sản nhanh chóng, tiện lợi.  

Hệ thống hỗ trợ:
- Xem danh sách sản phẩm nông sản
- Tìm kiếm sản phẩm
- Đăng ký / đăng nhập tài khoản
- Thêm sản phẩm vào giỏ hàng
- Đặt hàng online
- Quản lý sản phẩm và đơn hàng cho quản trị viên

Website được xây dựng nhằm phục vụ việc học tập và thực hành môn Phần mềm mã nguồn mở.

---

# 👨‍💻 Danh sách thành viên

| STT | Họ và tên | MSSV |
|-----|------------|------|
| 1 | Tạ Huy Hoàng | 23810310070 |
| 2 | Nguyễn Nghiêm Tiến | 20810310009 |
| 3 | Phạm Hồng Thái | 23810310012 |

---

# 📋 Phân công nhiệm vụ

| Thành viên | Công việc |
|------------|------------|
| Tạ Huy Hoàng | Thiết kế giao diện người dùng (UI/UX), xây dựng trang chủ, trang sản phẩm |
| Nguyễn Nghiêm Tiến | Xây dựng chức năng đăng nhập, đăng ký, quản lý tài khoản người dùng |
| Phạm Hồng Thái | Xử lý backend, quản lý sản phẩm, đơn hàng, cơ sở dữ liệu và deploy hệ thống |

---

# 🛠 Công nghệ sử dụng

## Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap

## Backend
- PHP

## Database
- MySQL

## Công cụ hỗ trợ
- XAMPP
- Visual Studio Code
- Git
- Github

---

# ⚙️ Hướng dẫn cài đặt

## Bước 1: Clone project từ Github

Mở Terminal hoặc CMD và chạy lệnh:

```bash
git clone https://github.com/your-username/nong-san-xanh.git
```

---

## Bước 2: Di chuyển project vào thư mục htdocs

Sau khi clone xong, copy thư mục project vào:

```bash
C:\xampp\htdocs\
```

Ví dụ:

```bash
C:\xampp\htdocs\nong-san-xanh
```

---

## Bước 3: Khởi động XAMPP

Mở XAMPP Control Panel và bật:

- Apache
- MySQL

---

## Bước 4: Tạo database

Truy cập:

```bash
http://localhost/phpmyadmin
```

Tạo database mới với tên:

```bash
nongsan
```

---

## Bước 5: Import database

- Chọn database `nongsan`
- Chọn tab `Import`
- Chọn file:

```bash
nongsan.sql
```

- Nhấn `Go` để import dữ liệu

---

# ▶️ Hướng dẫn chạy project

Sau khi cài đặt hoàn tất, mở trình duyệt và truy cập:

```bash
http://localhost/nong-san-xanh
```

---

# 🔑 Tài khoản demo

## Admin

| Tài khoản | Mật khẩu |
|-----------|-----------|
| admin | 123456 |

## Người dùng

| Tài khoản | Mật khẩu |
|-----------|-----------|
| user | 123456 |

---

# 🖼 Hình ảnh minh họa hệ thống

## 🏠 Trang chủ

![Trang chủ](images/home.png)

---

## 🛒 Trang sản phẩm

![Sản phẩm](images/product.png)

---

## 🧺 Trang giỏ hàng

![Giỏ hàng](images/cart.png)

---

## ⚙️ Trang quản trị Admin

![Admin](images/admin.png)

---

# 🎥 Link video demo

```bash
https://youtu.be/demo-video
```

---

# 🌐 Link deploy online

```bash
https://nongsanxanh-demo.com
```

---

# 📂 Cấu trúc thư mục project

```bash
nong-san-xanh/
│
├── admin/
├── assets/
├── css/
├── js/
├── images/
├── database/
├── includes/
├── index.php
├── login.php
├── register.php
├── cart.php
├── product.php
└── nongsan.sql
```

---

# ✨ Chức năng chính của hệ thống

## Người dùng
- Đăng ký tài khoản
- Đăng nhập hệ thống
- Xem sản phẩm
- Tìm kiếm sản phẩm
- Thêm vào giỏ hàng
- Đặt hàng online

## Quản trị viên
- Quản lý sản phẩm
- Quản lý danh mục
- Quản lý đơn hàng
- Quản lý người dùng

---

# 📌 Yêu cầu hệ thống

- PHP >= 7.4
- MySQL >= 5.7
- XAMPP hoặc Laragon
- Trình duyệt Google Chrome / Microsoft Edge

---

# ⭐ Github Repository

Repository được public theo yêu cầu môn học.

