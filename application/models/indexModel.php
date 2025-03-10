<?php
class indexModel extends CI_Model
{
  public function getListComment($product_id) {
    $this->db->where('product_id', $product_id);
    $this->db->where('status', 1);
    $query = $this->db->get('review');
    return $query->result();
}


  public function getCategoryHome()
  {
    $query = $this->db->get_where('categories', ['status' => 1]);
    $data = $query->result();
    return $data;
  }
  public function getSliderHome()
  {
    $query = $this->db->get_where('sliders', ['status' => 1]);
    $data = $query->result();
    return $data;
  }
  public function getBrandHome()
  {

    $query = $this->db->get_where('brands', ['status' => 1]);
    $data = $query->result();
    return $data;
  }
  public function getCustomerToken($email)
  {
    $query = $this->db->get_where('customers', ['email' => $email]);
    return $query->result();
  }
  public function activeCustomerToken($email, $data_customer)
  {
    $this->db->where('email', $email);
    return $this->db->update('customers', $data_customer);
  }

  public function countAllProduct()
  {
    $query = $this->db->get('products');
    return $query->num_rows();
  }

  public function countAllProductByCategory($id)
  {
    $this->db->where('category_id', $id);
    $this->db->from('products');
    return $this->db->count_all_results();
  }
  public function countAllProductByKeyword($keyword)
  {
    $this->db->like('products.title', $keyword);
    $this->db->from('products');
    return $this->db->count_all_results();
  }
  public function countAllProductByBrand($id)
  {
    $this->db->where('brand_id', $id);
    $this->db->from('products');
    return $this->db->count_all_results();
  }
  public function getIndexPagination($limit, $start)
  {
    $this->db->limit($limit, $start);
    $query = $this->db->get_where('products', ['status' => 1]);
    return $query->result();
  }


  public function getAllProduct()
  {

    $query = $this->db->get_where('products', ['status' => 1]);
    $data = $query->result();
    return $data;
  }
  public function getProductDetails($id)
  {

    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->where('products.id', $id)
      ->get();

    return $query->result();
  }
  public function getProductRelated($id, $category_id) {
    $query = $this->db->select('categories.title as tendanhmuc, products.*, brands.title as tenthuonghieu')
        ->from('categories')
        ->join('products', 'products.category_id = categories.id')
        ->join('brands', 'brands.id = products.brand_id')
        ->where('products.category_id', $category_id)
        ->where_not_in('products.id', $id)
        ->limit(8) 
        ->get();
    return $query->result();
}
  public function getCategoryProduct($id)
  {

    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->where('products.category_id', $id)
      ->get();

    return $query->result();
  }
  public function getCatePagination($id, $limit, $start)
  {
    $this->db->limit($limit, $start);
    $query = $this->db->select('categories.title as tendanhmuc, products.*, brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->where('products.category_id', $id)
      ->where('products.status', 1) // Add this line to ensure only active products are fetched
      ->get();

    return $query->result();
  }

  public function getBrandProduct($id)
  {

    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->where('products.brand_id', $id)
      ->get();

    return $query->result();
  }
  public function getBrandPagination($id, $limit, $start)
  {
    $this->db->limit($limit, $start);
    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->where('products.brand_id', $id)
      ->where('products.status', 1) // Add this line to ensure only active products are fetched
      ->get();

    return $query->result();
  }
  public function getCategoryTitle($id)
  {

    $this->db->select('categories.*');
    $this->db->from('categories');
    $this->db->limit(1);
    $this->db->where('categories.id', $id);
    $query = $this->db->get();
    $result = $query->row();
    return $title = $result->title;
  }
  public function getBrandTitle($id)
  {

    $this->db->select('brands.*');
    $this->db->from('brands');
    $this->db->limit(1);
    $this->db->where('brands.id', $id);
    $query = $this->db->get();
    $result = $query->row();
    return $title = $result->title;
  }
  public function getProductByKeyword($keyword)
  {
    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->like('products.title', $keyword)
      ->get();

    return $query->result();
  }
  public function getKeywordSearchPagination($keyword, $limit, $start)
  {
    $this->db->limit($limit, $start);
    $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
      ->from('categories')
      ->join('products', 'products.category_id=categories.id')
      ->join('brands', 'brands.id=products.brand_id')
      ->like('products.title', $keyword)
      ->get();

    return $query->result();
  }
 
  public function updateProductQuantity($product_id, $new_quantity) {
    $data = array('quantity' => $new_quantity);
    $this->db->where('id', $product_id);
    $this->db->update('products', $data);
}



  

  public function insertContact($data){
    return $this->db->insert('contact',$data);
  }
  public function insertReview($data){
    return $this->db->insert('review',$data);
  }
  public function selectReview(){
      
    $query = $this->db->get('review');
    $data = $query->result();
    return $data;
  }
  public function countAllReviews() {
    return $this->db->count_all('review');
}

public function getAllReviewsPaginated($limit, $offset) {
    $query = $this->db->select('*')
                      ->from('review')
                      ->limit($limit, $offset)
                      ->get();
    return $query->result();
}

  public function selectComment(){
      
    $query = $this->db->get('contact');
    $data = $query->result();
    return $data;
  }
  public function countAllComments() {
    return $this->db->count_all('contact');
}
public function getAllCommentsPaginated($limit, $offset) {
    $query = $this->db->select('contact.*')
                      ->from('contact')
                      ->limit($limit, $offset)
                      ->get();
    return $query->result();
}



  public function selectReviewById($id){
    $query = $this->db->get_where('review',['id'=>$id]);
    return $query->row();
     
  }
  public function updateReview($id,$data){
    return $this->db->update('review',$data,['id'=>$id]);
     
  }
  
 
}
?>