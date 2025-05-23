<section class="content" id="cart_items">
  <div class="container">
    <div class="breadcrumbs">
       <ol class="breadcrumb">
         <li><a href="<?php echo base_url('/') ?>">Home</a></li>
         <li class="active"> Hướng dẫn đặt hàng</li>
       </ol>
     </div>
    <div class="container custom-container">
      <div class="">
        <h1 class="title">5 bước đặt hàng dễ dàng tại NPC Gaming</h1>
        <!-- Bước 1 -->
        <div class="step">
          <h2>Bước 1: Đăng ký và đăng nhập tài khoản</h2>
          <img src="frontend/images/shop/step1.png" alt="Đăng ký tài khoản">
          <p style="font-size:16px;">Sau khi điền đầy đủ thông tin đăng ký và nhấn đăng ký, bạn sẽ nhận được thông báo qua email mà bạn đã đăng ký.</p>
          <p style="font-size:16px;">Vui lòng nhấn vào đường link trong email để kích hoạt tài khoản của bạn.</p>
          <p style="font-size:16px;">Sau khi đăng ký thành công, đăng nhập tài khoản để mua hàng.</p>
        </div>
    
        <!-- Bước 2 -->
        <div class="step">
          <h2>Bước 2: Trải nghiệm trang chủ</h2>
          <img src="frontend/images/shop/step2.png" alt="Đăng nhập và mua hàng">
          <p style="font-size:16px;">Sau khi đăng nhập thành công, bạn sẽ được chuyển đến trang chủ để mua hàng.</p>
          <p style="font-size:16px;">Ở đây bạn có thể ấn thêm vào giỏ hàng ở chính sản phẩm đó để thêm nó vào giỏ.</p>
        </div>
        <!-- Bước 3 -->
        <div class="step">
          <h2>Bước 3: Tìm kiếm sản phẩm theo tên</h2>
          <img src="frontend/images/shop/step3.png" alt="Đăng nhập và mua hàng">
          <p style="font-size:16px;">Ở phần trang chủ bạn có thể chọn vào thanh tìm kiếm ở phía trên và nhập từ khóa cần tìm.</p>
          <p style="font-size:16px;">Sau khi nhập từ khóa muốn tìm và ấn tìm kiếm các sản phẩm có cùng tên tìm sẽ hiển thị ở trang mới.</p>
        </div>
        <div class="step">
          <h2>Bước 4: Xem thông tin chi tiết của sản phẩm</h2>
          <img src="frontend/images/shop/step4.png" alt="Đăng nhập và mua hàng">
          <p style="font-size:16px;">Bạn có thể ấn vào sản phẩm bạn có nhu cầu để xem chi tiết sản phẩm.</p>
          <p style="font-size:16px;">Trong trang chi tiết sản phẩm sẽ có đầy đủ tên, số lượng cũng như các nhận xét của các khách hàng khác về sản phẩm đó.</p>
        </div>
    
        <!-- Bước 4 -->
        <div class="step">
          <h2>Bước 5: Thêm sản phẩm vào giỏ hàng và điền thông tin giao hàng</h2>
          <img src="frontend/images/shop/step5.png" alt="Chọn sản phẩm">
          <p style="font-size:16px;">Sau khi thêm sản phẩm vào giỏ bạn có thể điều chỉnh số lượng hoặc tiến hành điền thông tin và ấn xác nhận mua.</p>
        </div>
    
        <!-- Bước 5 -->
        <div class="step">
          <h2>Bước 6: Hoàn thành đơn hàng!</h2>
          <img src="frontend/images/shop/step6.png" alt="Xác nhận đặt hàng">
          <p style="font-size:16px;">Chúc mừng bạn đã đặt hàng thành công, nếu muốn mua thêm sản phẩm khác thì hãy lặp lại các bước trên.</p>
        </div>
    
        <!-- Cảm ơn -->
        <div class="thank-you">
          <h2>Cảm ơn bạn đã xem hướng dẫn</h2>
          <p style="font-size:16px;">Cảm ơn bạn vì đã tin tưởng và mua sản phẩm tại NPC Gaming!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
.custom-container{
    background-color: white;
    margin-bottom: 30px;
    border-radius: 10px;
    padding-top: 20px;
    padding-bottom: 14px;
  }
.banner, .underBanner {
  display: none;
}

.title {
  font-size: 30px; /* Tăng thêm 2px */
  color: #CE3C2D;
  font-weight: 700;
  position: relative;
 padding-bottom: 10px;
 margin-bottom: 20px;
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
  font-size: 24px; /* Tăng thêm 2px */
  color: #444;
 
}



.step img {
  width: 70%; 
  height: auto; 
  display: block; 
  margin: 16px auto; /* Gap added below image */
}

.thank-you {
  text-align: center;
  margin-top: 50px;
}

.thank-you h2 {
  font-size: 24px; /* Tăng thêm 2px */
  color: #CE3C2D;
}


</style>