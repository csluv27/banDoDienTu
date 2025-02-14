<?php
class productModel extends CI_Model
{
  public function insertProduct($data)
  {
    return $this->db->insert('products', $data);
  }
  public function selectAllProduct()
  {

    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->get();

    return $query->result();
  }
  public function selectProductById($id)
  {
    $query = $this->db->get_where('products', ['id' => $id]);
    return $query->row();

  }
  public function updateProduct($id, $data)
  {
    return $this->db->update('products', $data, ['id' => $id]);

  }
  public function deleteProduct($id)
  {
    return $this->db->delete('products', ['id' => $id]);

  }
  public function countAllProducts()
  {
    return $this->db->count_all('products');
  }

  public function getAllProductsPaginated($limit, $offset)
  {
      $query = $this->db->select('products.*, categories.title as tendanhmuc, brands.title as tenthuonghieu')
                        ->from('products')
                        ->join('categories', 'categories.id = products.category_id')
                        ->join('brands', 'brands.id = products.brand_id')
                        ->limit($limit, $offset)
                        ->get();
  
      return $query->result();
  }
  


 

    public function get_top_products($limit) {
        $this->db->select('products.*, SUM(order_details.quantity) as quantity_sold');
        $this->db->from('products');
        $this->db->join('order_details', 'products.id = order_details.product_id', 'left');
        $this->db->group_by('products.id');
        $this->db->order_by('quantity_sold', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        $result = $query->result();

      

        return $result;
    }
}






?>