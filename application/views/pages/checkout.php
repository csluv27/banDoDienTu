<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div>
			<div class="shopper-informations">
				<div class="row">
		
					<div class="col-sm-10 col-sm-offset-0" style="padding-bottom: 50px;">
						<div class="login-form">
							<p>Giao tới</p>							
								<form action="<?php echo base_url('confirm-checkout') ?>" method="POST" onsubmit="return confirm('Xác nhận đặt hàng?')">
									<input type="text" name="email" placeholder="Email">
									<input type="text" name="name" placeholder="Họ tên">
									<input type="text" name="location" placeholder="Địa chỉ">
									<input type="text" name="phone" placeholder="Số điện thoại">
									<label for="">Hình thức thanh toán</label>
									<select name="shipping_method">
											<option value="cod">COD</option>
											<option value="vnpay" disabled>VNPAY (Đang bảo trì..)</option>
									</select>

									<button type="submit" class="btn btn-default">Xác nhận thanh toán</button>
								</form>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section> 