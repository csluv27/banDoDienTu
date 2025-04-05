<section id="cart_items">
	<div class="container">

		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>">Home</a></li>
				<li class="active">Cảm ơn quý khách</li>
			</ol>
		</div>
			<div class="container custom-container">
				<div style="text-align: center; display: flex; flex-direction: column; align-items: center; margin:0">
			<p style="font-size: 5em; margin-bottom: 1em; font-weight:700;">THANK YOU!</p>
			<i class="fa fa-check" aria-hidden="true" style="color:green; font-size: 7em;margin-bottom:0.5em "></i>
			<p style="font-size: 1.5em; margin-bottom: 0.5em;">Đơn hàng của bạn đã được đặt thành công</p>
			<p style="font-size: 1.5em;margin-bottom: 5em;">Chúng tôi sẽ cố gắng gửi đơn hàng tới bạn vào thời gian ngắn nhất!</p>
	</div>
			</div>
	</div>
	</section> <!--/#cart_items-->
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