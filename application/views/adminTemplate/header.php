<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang dang nhap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  
  <style>
    .navbar {
      background: linear-gradient(90deg, #0d0d0d, #2c3e50, #4f4f4f); /* Chuyển màu từ đen đến xám đậm */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Tạo bóng đậm hơn cho navbar */
    }

    .navbar-brand {
      font-size: 1.8rem; /* Tăng cỡ chữ của thương hiệu */
      font-weight: bold; /* Làm đậm chữ thương hiệu */
      color: #ff4757; /* Màu chữ nổi bật */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Tạo hiệu ứng bóng cho chữ */
    }

    .nav-link {
      color: #ffffff !important; /* Màu chữ của các liên kết */
      font-size: 1.2rem; /* Tăng cỡ chữ của các liên kết */
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6); /* Tạo hiệu ứng bóng cho chữ */
    }

    .nav-link:hover {
      color: #ff4757 !important; /* Màu chữ khi hover */
      transition: color 0.3s; /* Hiệu ứng chuyển màu mượt mà */
    }

    .dropdown-menu {
      background-color: rgba(52, 58, 64, 0.9); /* Màu nền của menu thả xuống */
      border: 1px solid #ff4757; /* Đường viền màu đỏ nổi bật */
    }

    .dropdown-item {
      color: #ffffff; /* Màu chữ của các mục trong menu thả xuống */
    }

    .dropdown-item:hover {
      background-color: #ff4757; /* Màu nền khi hover trên mục */
      color: #000000; /* Màu chữ khi hover */
    }

    body {
      background-color: #1c1c1c; /* Nền tối màu */
      color: #ffffff; /* Màu chữ trắng */
      font-family: 'Arial', sans-serif; /* Font chữ */
    }

    .card-header {
      background-color: white ; /* Màu nền xám xanh đậm */
      color: black; /* Màu chữ đỏ nổi bật */
      font-size: 30px; /* Tăng cỡ chữ */
      font-weight: bold; /* Làm đậm chữ */
      text-align: center;
      padding: 10px; /* Tạo khoảng cách cho chữ */
      border-radius: 5px; /* Bo tròn góc cho phần tiêu đề */
    }
  </style>


</head>

<body>