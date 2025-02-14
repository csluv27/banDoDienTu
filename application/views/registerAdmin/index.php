
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url('productPic/1.jpg') no-repeat;
      background-size: cover;
      background-position: center;
    }

    .wrapper {
      width: 420px;
      background-color: transparent;
      border: 2px solid rgba(225, 225, 225, .2);
      backdrop-filter: blur(20px);
      box-shadow: 0 0 10px rgba(0, 0, 0, .2);
      color: #fff;
      border-radius: 20px;
      padding: 30px 40px;
    }

    .wrapper h1 {
      font-size: 36px;
      text-align: center;
    }

    .wrapper .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      margin: 30px 0;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: white;
      padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder {
      color: white;
    }

    .input-box i {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
    }

    .wrapper .tex {
      display: flex;
      justify-content: center;
      font-size: 16px;
      margin: -15px 0 15px;
      font-style: italic;
    }

    .wrapper .btn {
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
      margin-bottom: 20px;
      text-align: center;
      /* Added to center the text */
    }

    .wrapper .register-link {
      font-size: 16px;
      text-align: center;
      margin-top: 20px;
    }

    a {
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
      margin-bottom: 20px;
      text-align: center;
      /* Added to center the text */
    }
  </style>


  <div class="wrapper">
    <h1>Đăng ký tài khoản Admin NPC</h1>
    <form action="<?php echo base_url('register-insert') ?>" method="POST">
      <div class="input-box">
        <i class='bx bx-user-circle'></i>
        <input type="text" name="username" placeholder="Họ và tên" required>
      </div>
      <div class="input-box">
        <i class='bx bxs-user'></i>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-box">
        <i class='bx bxs-lock-alt'></i>
        <input type="password" name="password" placeholder="Mật khẩu" required>
      </div>
      <button class="btn" type="submit">Đăng ký</button>
      <a class="btn" class="back" href="<?php echo base_url('/login') ?>">Quay lại</a>
    </form>
  </div>
