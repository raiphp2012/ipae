<?php
  class Ip_model extends CI_Model{
  function __construct() {
  parent::__construct();
}
  function check_admin_login($data)
  {

  $name=$data->name;
  $password=$data->password;
  $this->db->select('*');
  $this->db->from('admin');
  $this->db->where('name', $name);
  $this->db->where('password', $password);
  $this->db->limit(1);
  $query = $this->db->get();
  if ($query->num_rows() == 1) 
  {
  //return $query->result();
  //echo "user data find"; exit();
  return true;
  } 
  else 
  {
  //echo "invalid user"; exit();
  return false;
  }

  }

  function admin_info($name)
  {
  $this->db->select('*');
  $this->db->from('admin');
  $this->db->where('name', $name);
  $query = $this->db->get();
  $result = $query->result();
  //print_r($result); exit();
  return ($result);
  }


  function getData($table)  
  {

  $query= $this->db->get($table); 
  $result=$query->result(); 
  //echo '<pre>';print_r($result); echo '</pre>';exit();
  return ($result); 
  }

function getordersData($table)  
  {
$this->db->order_by('id desc');
$this->db->group_by("order_number");

  $query= $this->db->get($table); 
  $result=$query->result(); 
  //echo '<pre>';print_r($result); echo '</pre>';exit();
  return ($result); 
  }

  public function getDataByEditID($table,$fname,$id)  
  {
  $this->db->select('*');
  $this->db->from($table);
  $this->db->where($fname,$id);
  $query=$this->db->get();
  $result=$query->result();
  //echo '<pre>'; print_r($result);  echo '</pre>';exit();
  return ($result); 
  }

  function update_slider_data_varify($table,$clmname,$id,$data)
  {
  $value=array('status'=>$data);
  $this->db->where($clmname,$id);
  $this->db->update($table,$value);
  return true;    
  }       


  function updateData($table,$fname,$id,$data)
  {
  //echo $data;exit();   
  $this->db->where($fname, $id);
  $this->db->update($table, $data); 
  return true;     
  }

  public function getDataDisplayjoing()
  {  

  $this->db->select('*');
  $this->db->from('product'); 
  $this->db->join("color","color.id=product.id");
  //$this->db->join('capacity','product.id = capacity.id');
  $this->db->join("category","category.id=product.id");
  $this->db->join('subcategory','product.subid = subcategory.subid');
  //$this->db->where('id',$id);
  // $this->db->where('remin_date', $date);
  //  $this->db->where('remin_status', $st);
  // $this->db->order_by('remin_time','ASC');
  $query = $this->db->get();
  $result= $query->result();
  //echo '<pre>';print_r($result); '</pre>'; exit(); 
  return ($result);        

  }

  function insertData($table,$data)
  {
    //echo"<pre>";print_r($data); echo"<pre>"; exit();
  $this->db->insert($table,$data);
  return true;
  }


  function check_data($data)
  {
  // $email=$data->email;
  // $password=$data->password;
  $this->db->select('*');
  $this->db->from('admin');
  $this->db->where('email',$data);
  //$this->db->where('password', $password);
  $this->db->limit(1);
  $query = $this->db->get();
  if ($query->num_rows() == 1)
  {
  //return $query->result();
  // echo "user data find"; exit();
  return true;
  }
  else
  {
  //redirect('welcome/login');
  return false;
  }

  }

  function deleteList($table,$fname,$id) 
  {
  $this->db->where($fname, $id);
  $this->db->delete($table);
  return true; 
  }


function getDataDisplayjoing_monu($id)
{

  $this->db->select('*');
  $this->db->from('product as p'); 
  $this->db->join("color as c","c.id=p.id");
  //$this->db->join('capacity as cc','cc.id = p.id');
  $this->db->join("category as ccc","ccc.id=p.id");
  $this->db->join('subcategory as s','s.subid = p.subid');
  $this->db->where('id',$id);
  // $this->db->where('remin_date', $date);
  //  $this->db->where('remin_status', $st);
  // $this->db->order_by('remin_time','ASC');
  $query = $this->db->get();
  $result= $query->result();
  //echo '<pre>';print_r($result); '</pre>'; exit(); 
  return ($result);   

}


function getDataDisplayjoing_sub($id)
{

  $this->db->select('*');
  $this->db->from('subcategory as sb'); 
  $this->db->join("category as ccc","ccc.id=sb.id");
  $this->db->where('subid',$id);
  // $this->db->where('remin_date', $date);
  //  $this->db->where('remin_status', $st);
  // $this->db->order_by('remin_time','ASC');
  $query = $this->db->get();
  $result= $query->result();
  //echo '<pre>';print_r($result); '</pre>'; exit(); 
  return ($result);   

}


function checkCategoryName($table,$fname,$slug)
        {
          $this->db->select('*')->from($table);
          $this->db->where($fname,$slug);
          $query=$this->db->get();
          //$result=$query->row_array();
          //echo print_r($result); exit();
          if($query->num_rows() == 1){
            return false;
          }
          else{
            return true;
          }

        }


function update_order_status($table,$clmname,$id,$data)
  {
  $value=array('order_status'=>$data);
  $this->db->where($clmname,$id);
  $this->db->update($table,$value);
  return true;    
  }

 public function count($table)
  {
     $query=$this->db->get($table);
  //$query = $this->db->get();
  $result= $query->result();
  //echo '<pre>';print_r($result); '</pre>'; exit(); 
  return ($result);   


  }

  

}