<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Giỏ hàng</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<?php
			if ($this->cart->contents()) {
				?>
				<?php if ($this->session->flashdata('error_message')): ?>
								<div class="alert alert-danger"> <?php echo $this->session->flashdata('error_message'); ?> </div>
							<?php endif; ?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" width="150"></td>
							<td class="title">Tên sản phẩm</td>
							<td class="price">Giá thành</td>
							<td class="quantity" width="100">Số lượng</td>
							<td class="in_stock" width="110">Số lượng còn</td>
							<td class="total" width="150">Tổng tiền</td>
							<td class="util"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$subtotal = 0;
						$total = 0;

						foreach ($this->cart->contents() as $items) {
							$subtotal = $items['qty'] * $items['price'];
							$total += $subtotal;
							?>
							<tr>
								<td class="cart_product">
									<a href=""><img width="120px" height="120px"
											src="<?php echo base_url('uploads/product/' . $items['options']['image']) ?>"
											alt="<?php echo $items['name'] ?>"></a>
								</td>
								<td class="cart_description" style="margin-left:10px;">
									<h4 style="margin-left:10px; margin:0;"><a href=""><?php echo $items['name'] ?></a></h4>

								</td>
								<td class="cart_price">
									<p class="cart_total_price" style="font-size: 18px; margin:0;">
										<?php echo number_format($items['price'], 0, ',', '.') ?> vnd
									</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<form action="<?php echo base_url('update-cart-item') ?>" method="POST">

											<input type="hidden" value="<?php echo $items['rowid'] ?>" name="rowid">
											<?php
											if($items['qty'] > $items['options']['in_stock']){
												?>
												<input type="number" min="1" class="cart_quantity_input" name="quantity" value="<?php echo $items['options']['in_stock'] ?>" autocomplete="off" size="2" style="width: 81.3px; border-radius:4px;">
												<?php
											}else{
												?>
												<input type="number" min="1" class="cart_quantity_input" name="quantity" value="<?php echo $items['qty'] ?>" autocomplete="off" size="2" style="width: 81.3px; border-radius:4px;">
												<?php
											}
												?>
												
											<input type="submit" name="capNhat" class="btn btn-info" value="Cập nhật"></input>

										</form>
									</div>
								</td>
								<td class="cart_description" style="margin-top:0;">
									<span style="font-size:18px"
											><?php echo $items['options']['in_stock'] ?></span>
									
								</td>


								<td class="cart_total">
									<p class="cart_total_price" style="font-size: 18px; margin:0;"><?php echo number_format($subtotal, 0, ',', '.') ?>
										vnd
									</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="<?php echo base_url('delete-item/' . $items['rowid']) ?>"><i
											class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php
						}
						?>
						<tr>
							<td colspan="5" style="text-align:right;">
								<p class="cart_total_price">Tổng tiền hàng trong giỏ:</p>
								<p class="cart_total_price" style="font-size: 20px; font-weight: bold;">
									<?php echo number_format($total, 0, ',', '.') ?> vnd
								</p>
							</td>
							<td colspan="2" style="text-align:right;">
								<a href="<?php echo base_url('delete-all-cart') ?>" class="btn btn-danger" style="margin-right:10px;">Xóa
									tất cả</a>
								<a href="<?php echo base_url('checkout') ?>" class="btn btn-success">Đặt hàng</a>
							</td>
						</tr>
					</tbody>
				</table>
				<?php
			} else {
				echo '<span class="text text-danger">Vui lòng thêm sản phẩm vào giỏ</span>';
			}
			?>
		</div>
	</div>
</section>
<style>
    .cart_info .table td, .cart_info .table th {
        text-align: center; /* Căn giữa theo chiều ngang */
        vertical-align: middle; /* Căn giữa theo chiều dọc */
    }
    .cart_info .cart_quantity_button form, .cart_info .cart_quantity_button {
        display: flex;
        flex-direction: column;
        align-items: center; /* Căn giữa theo chiều dọc */
    }
    .cart_info .cart_quantity_input {
        width: 95%; /* Adjust as needed */
        margin: auto; /* Căn giữa theo chiều ngang */
    }
    .cart_info .cart_delete {
        text-align: center; /* Căn giữa theo chiều ngang */
    }
    .cart_info h4, .cart_info p, .cart_info a {
        text-align: center; /* Căn giữa văn bản trong các cột */
    }
</style>

