<!-- Danh sách đơn hàng của bạn -->
<style>
 .custom-container{
    background-color: white;
    margin-bottom: 30px;
    border-radius: 10px;
    padding-top: 20px;
    padding-bottom: 14px;
  }
    h1 {
        font-size: 30px;
        color: #444;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 10px;
        margin-bottom: 20px;
      color:  #CE3C2D;
      font-weight: 700;
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
<div class="container">

  
    <div class="breadcrumbs">
         <ol class="breadcrumb">
           <li><a href="<?php echo base_url('/') ?>">Home</a></li>
           <li class="active"> Theo dõi đơn hàng</li>
         </ol>
       </div>


       <div class="container custom-container">
               <h1>
                   Danh sách đơn hàng của bạn
               </h1>
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

</div>
