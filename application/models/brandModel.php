<?php
  class brandModel extends CI_Model{
    public function insertBrand($data) {
      return $this->db->insert('brands',$data);
    }
    public function selectBrand(){
      
      $query = $this->db->get('brands');
      $data = $query->result();
      return $data;
    }
    public function selectBrandById($id){
      $query = $this->db->get_where('brands',['id'=>$id]);
      return $query->row();
       
    }
    public function updateBrand($id,$data){
      return $this->db->update('brands',$data,['id'=>$id]);
       
    }
    public function deleteBrand($id){
      return $this->db->delete('brands',['id'=>$id]);
       
    }
    public function getAllBrands() {
      $query = $this->db->get('brands'); // Giả sử bảng lưu thương hiệu tên là 'brands'
      return $query->result();
  }
  
  }
?>