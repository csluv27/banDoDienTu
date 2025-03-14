<footer id="footer"><!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="companyinfo">
						<h2><span style="font-size:26px;">LUV</span>SHOP</h2>
						<p>Just five decent fellows sharing our passion for gaming with you!</p>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="/frontend/Footer/1.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
						
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="/frontend/Footer/2.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
						
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="/frontend/Footer/3.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
						
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="/frontend/Footer/4.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
					
							
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="address">
						<!-- <img src="/frontend/images/home/map.png" alt="" />
						<p>241 Điện Biên, Lộc Hoà, Nam Định, Việt Nam</p> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.8551185156552!2d106.16051547666265!3d20.430042481073645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e756dae56d0d%3A0x97cbf14af357037e!2zMjQxIMSQaeG7h24gQmnDqm4sIEzhu5ljIEhvw6AsIE5hbSDEkOG7i25oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1737435356607!5m2!1svi!2s" width="450" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
		.video-gallery .iframe-img {
    width: 100%;
    height: auto;
    overflow: hidden;
}

.video-gallery .iframe-img img {
    width: 100%;
    height: auto;
		max-height: 85px;
    display: block;
    object-fit: cover; /* Đảm bảo ảnh không bị biến dạng */
}
	</style>
	


	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Dịch vụ</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo base_url('contact') ?>">Liên hệ</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100016773610729">Fanpage</a></li>
						</ul>
					</div>
				</div>
			
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Hướng dẫn đặt hàng</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo base_url('huong-dan') ?>">Hướng dẫn</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Chính sách</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo base_url('security') ?>">Chính sách bảo mật</a></li>
							<li><a href="<?php echo base_url('guarantee') ?>">Chính sách bảo hành</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Về NPC SHOP</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo base_url('information') ?>">Thông tin về NPC</a></li>
							<li><a href="<?php echo base_url('contact') ?>">Địa điểm cửa hàng</a></li>
						</ul>
					</div>
				</div>
				

			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2025 NPC Inc.</p>
				<p class="pull-right">Designed by <span><a target="_blank"
							href="https://steamcommunity.com/id/cornspringluv/">cornspringluv</a></span></p>
			</div>
		</div>
	</div>

</footer><!--/Footer-->



<script src="<?php echo base_url('frontend/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('frontend/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('frontend/js/jquery.scrollUp.min.js') ?>"></script>
<script src="<?php echo base_url('frontend/js/price-range.js') ?>"></script>
<script src="<?php echo base_url('frontend/js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?php echo base_url('frontend/js/main.js') ?>"></script>
<script>
	$('.write-comment').click(function () {
		var name_reviewer = $('.name_reviewer').val();
		var email_reviewer = $('.email_reviewer').val();
		var review_reviewer = $('.review_reviewer').val();
		var pro_id = $('.product_id_review').val();
		if (name_reviewer == '' || email_reviewer == '' || review_reviewer == '') {
			alert('Vui nhập đầy đủ thông tin để đánh giá!');
		} else {
			$.ajax({
				method: 'POST',
				url: '/review/send',
				data: { name_reviewer: name_reviewer, email_reviewer: email_reviewer, review_reviewer: review_reviewer,pro_id:pro_id },
				success: function () {
					alert('Thêm đánh giá thành công! Chúng tôi rất vui khi có bạn góp ý.');
				}
			});
		}

	})

</script>
<script>
document.querySelectorAll('.xulydonhang').forEach(selectElement => {
  selectElement.addEventListener('change', function() {
    const orderStatus = document.getElementById('orderStatus');
    const orderCode = this.id;
    const value = this.value;

    fetch('path_to_your_controller/process', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `order_code=${orderCode}&value=${value}`,
    })
    .then(response => response.text())
    .then(data => {
      orderStatus.innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
  });
});
document.addEventListener("DOMContentLoaded", function () {
    const categoryList = document.querySelector(".category-list");
    const toggleButton = document.getElementById("categoryBtn");
    const overlay = document.getElementById("overlay");
    const isHomePage = window.location.pathname === "/trang-chu" || window.location.pathname === "/";

    // Nếu không phải trang chủ, thêm sự kiện click vào nút
    if (!isHomePage) {
        toggleButton.addEventListener("click", function () {
            const isShowing = categoryList.style.display === "block";
            categoryList.style.display = isShowing ? "none" : "block";
            overlay.classList.toggle("show", !isShowing);
        });
    }
});

</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".quantity-selector").forEach(function (selector) {
          let minusBtn = selector.querySelector(".minus");
          let plusBtn = selector.querySelector(".plus");
          let qtyInput = selector.querySelector(".qty-input");

          minusBtn.addEventListener("click", function () {
              let value = parseInt(qtyInput.value);
              if (value > 1) {
                  qtyInput.value = value - 1;
              }
          });

          plusBtn.addEventListener("click", function () {
              let value = parseInt(qtyInput.value);
              qtyInput.value = value + 1;
          });
      });
  });
</script>

</body>

</html>