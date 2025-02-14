<?php
class loginModel extends CI_Model
{
  public function checkLogin($email, $password)
  {
    $query = $this->db->where('email', $email)->where('password', $password)->get('user');
    return $query->result();
  }
  public function checkLoginCustomer($email, $password)
  {
    $query = $this->db->where('email', $email)->where('password', $password)->where('status', 1)->get('customers');
    return $query->result();
  }
  public function newCustomer($data)
  {
    $query = $this->db->insert('customers', $data);
    return $query;
  }
  public function newShipping($data)
  {
    $this->db->insert('shipping', $data);
    return $ship_id = $this->db->insert_id();
  }
  public function insert_order($data_order)
  {
    $query = $this->db->insert('orders', $data_order);
    return $query;
  }
  public function insert_order_details($data_order_details)
  {
    $query = $this->db->insert('order_details', $data_order_details);
    return $query;
  }
  public function get_all_admins()
  {
    $query = $this->db->get('user');
    return $query->result();
  }
  public function get_admin_by_id($id)
  {
    $query = $this->db->where('id', $id)->get('user');
    
    return $query->row();
  }
  public function update_admin($id, $data)
  {
      $this->db->where('id', $id);
      $this->db->update('user', $data);
      $error = $this->db->error();
      if (isset($error['code']) && $error['code'] > 0) {
          log_message('error', 'DB error: ' . print_r($error, true));
          return false;
      }
      return true;
  }
  
  
  
  public function delete_admin($id)
  {
    $this->db->where('id', $id)->delete('user');
  }
  public function registerAdmin($data)
  {
    return $this->db->insert('user', $data);
  }
}
?>