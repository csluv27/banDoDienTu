<section class="content" id="cart_items">
  <div class="custom-container">
    <h1 class="title">5 bước đặt hàng dễ dàng tại NPC Gaming</h1>
    <!-- Bước 1 -->
    <div class="step">
      <h2>Bước 1: Đăng ký và đăng nhập tài khoản</h2>
      <img src="frontend/images/shop/1.jpg" alt="Đăng ký tài khoản">
      <p>Sau khi điền đầy đủ thông tin đăng ký và nhấn đăng ký, bạn sẽ nhận được thông báo qua email mà bạn đã đăng ký.</p>
      <p>Vui lòng nhấn vào đường link trong email để kích hoạt tài khoản của bạn.</p>
      <p>Sau khi đăng ký thành công, đăng nhập tài khoản để mua hàng.</p>
    </div>

    <!-- Bước 2 -->
    <div class="step">
      <h2>Bước 2: Thêm sản phẩm đó vào giỏ</h2>
      <img src="frontend/images/shop/2.jpg" alt="Đăng nhập và mua hàng">
      <p>Sau khi đăng nhập thành công, bạn sẽ được chuyển đến trang chủ để mua hàng.</p>
      <p>Ở đây bạn có thể ấn thêm vào giỏ hàng ở chính sản phẩm đó để thêm nó vào giỏ.</p>
    </div>

    <!-- Bước 3 -->
    <div class="step">
      <h2>Bước 3: Kiểm tra giỏ hàng và tiến hành thanh toán</h2>
      <img src="frontend/images/shop/4.png" alt="Chọn sản phẩm">
      <p>Kiểm tra lại số lượng muốn mua cũng như cân nhắc chọn thêm sản phẩm.</p>
    </div>

    <!-- Bước 4 -->
    <div class="step">
      <h2>Bước 4: Thanh toán</h2>
      <img src="frontend/images/shop/4.jpg" alt="Thanh toán">
      <p>Điền đầy đủ thông tin vào form thanh toán và nhấn xác nhận.</p>
    </div>

    <!-- Bước 5 -->
    <div class="step">
      <h2>Bước 5: Hoàn thành đơn hàng!</h2>
      <img src="frontend/images/shop/5.jpg" alt="Xác nhận đặt hàng">
      <p>Chúc mừng bạn đã đặt hàng thành công, nếu muốn mua thêm sản phẩm khác thì hãy lặp lại các bước trên.</p>
    </div>

    <!-- Cảm ơn -->
    <div class="thank-you">
      <h2>Cảm ơn bạn đã xem hướng dẫn</h2>
      <p>Cảm ơn bạn vì đã tin tưởng và mua sản phẩm tại NPC Gaming!</p>
    </div>
  </div>
</section>
<style>
 .content, .custom-container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background: #fff;
  border-radius: 8px;

}
.banner, .underBanner {
  display: none;
}

.title {
  font-size: 30px; /* Tăng thêm 2px */
  color: #444;
  margin-bottom: 30px; /* Khoảng cách xuống dưới một chút */
  position: relative;
  padding-bottom: 25px; /* Thêm khoảng cách cho line mờ */
}

h1::after {
  content: '';
  display: block;
  width: 100%;
  height: 1px;
  background: #ccc;
  position: absolute;
  bottom: 0;
}

h2 {
  font-size: 26px; /* Tăng thêm 2px */
  color: #444;
  margin-bottom: 32px; /* Khoảng cách thêm một chút */
}

p, span {
  font-size: 16px; /* Tăng thêm 2px */
/* Khoảng cách thêm một chút */
}

.step img {
  width: 85%; 
  height: auto; 
  display: block; 
  margin: 0 auto 32px; /* Gap added below image */
}

.thank-you {
  text-align: center;
  margin-top: 50px;
}

.thank-you h2 {
  font-size: 20px; /* Tăng thêm 2px */
  color: #007BFF;
}


</style>