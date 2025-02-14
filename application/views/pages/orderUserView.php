<!-- Chi tiết đơn hàng của bạn -->
<style>
    .content {
        max-width: 1450px;
        margin: 20px auto;
        padding: 30px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        font-size: 32px;
        color: #444;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }
    .table thead {
        background-color: #444;
        color: #fff;
    }
    .table tbody tr {
        border-bottom: 1px solid #e0e0e0;
    }
    .table tbody tr:hover {
        background-color: #f5f5f5;
    }
    .total-price {
        font-size: 18px;
        font-weight: bold;
        color: #007BFF;
        text-align: right;
    }
    td, th {
        font-size: 18px;
        padding: 10px 0; /* Thêm padding ở trên và dưới */
    }
    .status-processing {
        color: green;
    }
    .status-shipped {
        color: orange;
    }
    .status-canceled {
        color: red;
    }
</style>

<div class="content">
    <div class="card">
        <div class="card-header">
            Chi tiết đơn hàng của bạn
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã đơn đặt</th>
                        <th scope="col">Hình ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($order_details)) {
                        $total_price = 0;
                        foreach ($order_details as $key => $od) { 
                            $item_total = $od->qty * $od->price;
                            $total_price += $item_total; ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1; ?></th>
                                <td><?php echo $od->order_code; ?></td>
                                <td><img src="<?php echo base_url('uploads/product/') . $od->image; ?>" width="80" height="80"></td>
                                <td><?php echo $od->title; ?></td>
                                <td><?php echo number_format($od->price, 0, ',', '.'); ?></td>
                                <td><?php echo $od->qty; ?></td>
                                <td><?php echo number_format($item_total, 0, ',', '.'); ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="7" class="total-price" style="color:#FE980F">Tổng tiền đơn hàng: <?php echo number_format($total_price, 0, ',', '.'); ?> vnd</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="orderStatus" style="font-size: 18px;">Trạng thái đơn hàng</label>
            <div style="display: flex; justify-content: space-between;">
                <span id="orderStatus" class="<?php echo !empty($order_details) ? ($order_details[0]->trangthai == 1 ? 'status-processing' : ($order_details[0]->trangthai == 2 ? 'status-shipped' : 'status-canceled')) : ''; ?>" style="font-size: 18px;">
                    <?php echo !empty($order_details) ? ($order_details[0]->trangthai == 1 ? 'Đang xử lý đơn hàng' : ($order_details[0]->trangthai == 2 ? 'Đã giao hàng' : 'Hủy đơn')) : 'Không có dữ liệu'; ?>
                </span>
            </div>
        </div>
    </div>
</div>
