<!-- Danh sách đơn hàng của bạn -->
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
        padding: 10px 0;
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
            Danh sách đơn hàng của bạn
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">STT</th>
                        <th scope="col">Mã đơn đặt</th>
                        <th scope="col">Tổng giá trị</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order_list as $key => $order) { ?>
                    <tr>
                    <th scope="row"><?php echo $key + 1?></th>
                        <td><?php echo $order->order_code; ?></td>
                        <td><?php echo number_format($order->total_amount, 0, ',', '.'); ?></td>
                        <td class="<?php echo $order->status == 1 ? 'status-processing' : ($order->status == 2 ? 'status-shipped' : 'status-canceled'); ?>">
                            <?php echo $order->status == 1 ? 'Đang xử lý' : ($order->status == 2 ? 'Đã giao hàng' : 'Hủy đơn'); ?>
                        </td>
                        <td><a href="<?php echo base_url('user/order/view/') . $order->order_code; ?>">Xem chi tiết</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
