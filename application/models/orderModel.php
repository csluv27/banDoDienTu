<?php
class orderModel extends CI_Model
{

  public function selectOrder()
  {

    $query = $this->db->select('orders.*,shipping.*')
    ->from('orders')
    ->join('shipping', 'orders.ship_id=shipping.id')
    ->get();
    
    return $query->result();
  }
  public function selectOrderDetails($order_code)
  {
    $query = $this->db->select('orders.order_code,orders.status as trangthai, order_details.quantity as qty,order_details.order_code,order_details.product_id,products.*')
    ->from('order_details')
    ->join('products', 'order_details.product_id = products.id')
    ->join('orders', 'orders.order_code = order_details.order_code')
    ->where('order_details.order_code',$order_code)
    ->get();
    return $query->result();
  }
  public function deleteOrder($order_code){
   
    return $this->db->delete('orders',['order_code'=>$order_code]);
    
  }
  public function deleteOrderDetails($order_code) {
    return $this->db->delete('order_details',['order_code'=>$order_code]);
    
  }
  public function updateOrder($data,$order_code) {
    return $this->db->update('orders',$data,['order_code'=>$order_code]);

  }
  public function countAllOrders() {
    return $this->db->count_all('orders');
}

public function getAllOrderPaginated($limit, $offset) {
    $query = $this->db->select('orders.*,shipping.*')
                      ->from('orders')
                      ->join('shipping', 'orders.ship_id=shipping.id')
                      ->limit($limit, $offset)
                      ->get();
                    
                      
    return $query->result();
}
public function getUserOrders($user_email) {
  $query = $this->db->select('orders.*, shipping.*, SUM(order_details.quantity * products.price) as total_amount')
                    ->from('orders')
                    ->join('shipping', 'orders.ship_id=shipping.id')
                    ->join('customers', 'shipping.email=customers.email')
                    ->join('order_details', 'orders.order_code=order_details.order_code')
                    ->join('products', 'order_details.product_id=products.id')
                    ->where('customers.email', $user_email)
                    ->group_by('orders.order_code')
                    ->get();
  return $query->result();
}







  // Hàm lấy sản phẩm bán chạy nhất
  public function getTopSellingProducts() {
      $query = $this->db->select('products.title as name, products.id as product_id, products.image,products.title,products.price, SUM(order_details.quantity) as quantity')
                        ->from('order_details')
                        ->join('products', 'order_details.product_id = products.id')
                        ->group_by('products.id')
                        ->order_by('quantity', 'DESC')
                        ->limit(5)
                        ->get();
      return $query->result();
  }




  // Sửa lại hàm getTotalRevenue
  public function getTotalRevenue() {
      $query = $this->db->select('SUM(order_details.quantity * products.price) as total_revenue')
                        ->from('order_details')
                        ->join('products', 'order_details.product_id = products.id')
                        ->get();
      return $query->row()->total_revenue;
  }


}




?>