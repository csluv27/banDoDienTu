<footer id="footer"><!--Footer-->
	<div class="footer-top">
		<div class="leftS">
			<p style="font-size:28px;margin:0;font-weight:600"> Tại sao nên mua <br> hàng tại NPCSHOP</p>
			<div class="benefit-item">
				<div class="icon"><i class="fa-solid fa-computer"></i></div>
				<p>Đa dạng<br> cấu hình</p>
			</div>
			<div class="benefit-item">
				<div class="icon"><i class="fa-solid fa-truck-fast"></i></div>
				<p>Giao hàng<br> nhanh chóng</p>
			</div>
			<div class="benefit-item">
				<div class="icon"><i class="fa-brands fa-facebook-messenger"></i></div>
				<p>Hỗ trợ <br>24/7</p>
			</div>
			<div class="benefit-item">
				<div class="icon"><i class="fa-solid fa-certificate"></i></div>
				<p>Đổi trả<br> 7 ngày</p>
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
			object-fit: cover;
			/* Đảm bảo ảnh không bị biến dạng */
		}

		.leftS {
			background-color: rgb(0, 157, 222);
			color: white;
			display: flex;
			flex-direction: row;
			padding: 20px;
			gap: 120px;
			justify-content: center;
			font-size: 18px;
			font-weight: 500;
			text-align: center;
		}

		.benefit-item {
			display: flex;
			flex-direction: row;
			align-items: center;
			max-width: 200px;
			gap: 10px;
			justify-content: center;
		}

		.icon {
			width: 70px;
			height: 70px;
			border-radius: 50%;
			background-color: rgb(43, 138, 179);

			display: flex;
			justify-content: center;
			align-items: center;


		}

		.icon i {
			font-size: 28px;
			color: white;
		}
	</style>



	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">

					<div class="companyinfo">
						<h2><span style="font-size:26px;">NPC</span>SHOP</h2>
						<p>Just five decent fellows sharing our passion for gaming with you!</p>
					</div>
					<img src="<?php echo base_url('frontend/images/1.png'); ?>" alt="" style="margin-bottom:15px">
					<div class="social-icons">
						<ul class="nav navbar-nav">
							<li><a href="/"><i class="fa-brands fa-facebook"
										style="color: black;margin-right:6px; font-size: 18px; ;border:1px solid rgb(210, 210, 210)"></i></i></a>
							</li>
							<li><a href="/"><i class="fa-brands fa-google"
										style="color: black;margin-right:6px; font-size: 18px; ;border:1px solid rgb(210, 210, 210)"></i></a>
							</li>
							<li><a href="/"><i class="fa-brands fa-twitter"
										style="color: black;margin-right:6px; font-size: 18px; ;border:1px solid rgb(210, 210, 210)"></i></a>
							</li>
							<li><a href="/"><i class="fa-brands fa-instagram"
										style="color: black;margin-right:6px; font-size: 18px; ;border:1px solid rgb(210, 210, 210)"></i></a>
							</li>
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
							<li><a href="<?php echo base_url('information') ?>">Thông tin về NPC Shop</a></li>
							<li><a href="<?php echo base_url('contact') ?>">Địa điểm cửa hàng</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>CÁC THƯƠNG HIỆU</h2>
						<ul class="nav nav-pills nav-stacked">
							<?php if (isset($brand) && is_array($brand)) { ?>
								<ul class="nav nav-pills nav-stacked">
									<?php foreach ($brand as $key => $b) { ?>
										<li><a href="<?php echo base_url('thuong-hieu/' . $b->id) ?>"><?php echo $b->title ?></a></li>
									<?php } ?>
								</ul>
							<?php } else { ?>
								<p class="text-muted">Không có thương hiệu nào</p>
							<?php } ?>

						</ul>
					</div>
				</div>


			</div>
		</div>
	</div>
	<div class="underline" style="border-bottom: 1px solid #e0e0e0;"></div>
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
				data: { name_reviewer: name_reviewer, email_reviewer: email_reviewer, review_reviewer: review_reviewer, pro_id: pro_id },
				success: function () {
					alert('Thêm đánh giá thành công! Chúng tôi rất vui khi có bạn góp ý.');
				}
			});
		}

	})

</script>
<script>
	document.querySelectorAll('.xulydonhang').forEach(selectElement => {
		selectElement.addEventListener('change', function () {
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