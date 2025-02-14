<div class="container">
  <div class="card">
    <div class="card-header">
      Chi tiết đơn đặt hàng
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="width: 50px;">STT</th>
            <th scope="col" style="width: 50px;">Mã đơn đặt</th>
            <th scope="col" style="width: 120px; text-align: center;">Hình ảnh sản phẩm</th>
            <th scope="col" style="width: 270px;">Tên sản phẩm</th>
            <th scope="col" style="width: 100px;">Giá sản phẩm</th>
            <th scope="col" style="width: 100px;">Số lượng</th>
            <th scope="col" style="width: 150px;">Tổng giá trị</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($order_details as $key => $od) {
            ?>
            <tr>
              <th scope="row" style="width: 50px;"><?php echo $key + 1 ?></th>
              <td style="width: 150px;"><?php echo $od->order_code ?></td>
              <td style="width: 120px; text-align: center;"> <img src="<?php echo base_url('uploads/product/') . $od->image ?>" width="80" height="80"></td>
              <td style="width: 150px;"><?php echo $od->title ?></td>
              <td style="width: 100px;"><?php echo number_format($od->price, 0, ',', '.'); ?></td>
              <td style="width: 100px;"><?php echo $od->qty ?></td>
              <td style="width: 150px;"><?php echo number_format($od->qty * $od->price, 0, ',', '.'); ?></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container">
  <div class="form-group">
    <label for="orderStatus">Trạng thái đơn hàng</label>
    <select class="xulydonhang form-control" id="orderStatus">
      <?php if($od->trangthai == 1){ ?>
        <option selected id="<?php echo $od->order_code ?>" value="0">Đang xử lý đơn hàng</option>
        <option id="<?php echo $od->order_code ?>" value="2">Đã giao hàng</option>
        <option id="<?php echo $od->order_code ?>" value="3">Hủy đơn</option>
      <?php } elseif($od->trangthai == 2){ ?>
        <option id="<?php echo $od->order_code ?>" value="0">Đang xử lý đơn hàng</option>
        <option selected id="<?php echo $od->order_code ?>" value="2">Đã giao hàng</option>
        <option id="<?php echo $od->order_code ?>" value="3">Hủy đơn</option>
      <?php } else { ?>
        <option id="<?php echo $od->order_code ?>" value="0">Đang xử lý đơn hàng</option>
        <option id="<?php echo $od->order_code ?>" value="2">Đã giao hàng</option>
        <option selected id="<?php echo $od->order_code ?>" value="3">Hủy đơn</option>
      <?php } ?>
    </select>
  </div>
</div>

<style>
  .card-header {
    font-size: 30px; /* Tăng cỡ chữ */
    font-weight: bold; /* Làm đậm chữ */
    text-align: center;
  }

  .container {
    max-width: 1650px;
    width: 100%;
  }

  .table th, .table td {
    vertical-align: top;
    word-wrap: break-word;
    white-space: normal; /* Cho phép chữ xuống dòng nếu quá dài */
  }

  .form-group {
    margin-top: 20px;
  }
</style>
