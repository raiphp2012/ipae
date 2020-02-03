<?php
class Ipae_model extends CI_Model{
    function __construct() {
         parent::__construct();

    }
function check_admin_login($data)
      {
  
        $username=$data->username;
        $password=$data->password;
        $this->db->select('*');
        $this->db->from('ipae_customers');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) 
        {
            
          return true;
        } 
        else 
        {
          return false;
        }
    }



    function admin_info($username)
    {
      //echo "hi";exit();
      $this->db->select('*');
      $this->db->from('ipae_customers');
      $this->db->where('username', $username);
      $this->db->where('status', 1);
      $query = $this->db->get();
      $result = $query->result();
      return ($result);
    }
   


   function CheckEmailId($email)
   {
    $this->db->select("*")->from("ipae_customers")->where("username",$email);
     $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) 
        {   
          return $query->row();
        } 
        else 

        {
       
            return false;
        }


   }

   function Check($username)
       {

        $this->db->select("*")->from("ipae_customers");
        $this->db->where("username",$username);
        $query = $this->db->get();
       return $query->result();


       }


       function checkopldpassword($old)
         {
            //echo $old; exit();
          $this->db->select("*")->from("ipae_customers");
          $this->db->where("password",$old);
          $query=$this->db->get();
        $result=$query->result();
        return $result;

         }

      function updateDataPassword($table,$fname,$id,$new)
         {
          $where=array('password'=>$new);
        $this->db->where($fname, $id);
        $this->db->update($table, $where);
        return true;

         }


function insertData($table,$data)
    {
      $this->db->insert($table,$data);
      return true;
    }
    function updateData($table,$fname,$id,$data)
    {
      $this->db->where($fname, $id);
      $this->db->update($table, $data);
      return true;
    }
    function deleteData($table,$fname,$id)
    {
      $this->db->where($fname, $id);
       $this->db->delete($table);
    return true;
    }
    function getData($table)
    {
      $query= $this->db->get($table);
      $result=$query->result();
      return ($result); 
    }
    function getDatabyId($table,$fname,$id)
    {
      $this->db->select('*')->from($table);
      $this->db->where($fname,$id);
      $query=$this->db->get();
      $result=$query->result();
      return $result;
    }

function getDatabyIdseq($table,$fname,$id)
{

      $this->db->select('*')->from($table);
      $this->db->where($fname,$id);
      $this->db->order_by("sequence","ASC");
      $query=$this->db->get();
      $result=$query->result();
      return $result;
}

function getDatabyIdseqm($table,$fname,$id)
{

    $this->db->select('*')->from($table);
    $this->db->where($fname,$id);
    $this->db->order_by("product_sequence","ASC");
      $query=$this->db->get();
      $result=$query->result();
      return $result;
}
 function get_delete($table,$clmname,$pro_id){
              $this->db->where($clmname,$pro_id);
              $this->db->delete($table);
              return true;
}


  function getDataByStatus($table)
      {
        $this->db->select('*')->from($table);
        $this->db->where('status','2');
         $this->db->where('user_type','saller');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
      }
      // function getDataByJoin($id)
      // {
      //   //echo "hi"; exit();
      //   $this->db->select('*')->from('ipae_product as p');
      //   $this->db->join("brand as b","b.brand_id=p.brand_id");
      //   $this->db->join("reminder_subcategory as rs","rs.subcategory_id=p.subid");
      //   $this->db->join("reminder_category as rc","rc.category_id=p.id");
      //   ///$this->db->where('id',$id);
      //   //$this->db->where('user_type','saller');
      //   $query=$this->db->get();
      //   $result=$query->result();
      //   //echo '<pre>'; print_r($result);exit();
      //   return $result;
      // }
      // function getDataJoinAll($seller_id)
      //       {

      //   $this->db->select('*');
      //   $this->db->from('ipae_product p');
      //   $this->db->join('brand b','b.brand_id = p.brand_id');
      //   $this->db->join('reminder_subcategory rs','rs.subcategory_id = p.subcategory_id');
      //   $this->db->join('reminder_category rc','rc.category_id   = p.category_id ');
      //   $this->db->where('user_type','saller');
      //    $this->db->where('seller_id',$seller_id);
      //   //$this->db->order_by('item_id','DESC');
      //   $query=$this->db->get();
      //   $result=$query->result();
      //   //echo '<pre>';print_r($result); echo '</pre>';exit();
      //   return($result);

      //       }


function getDatabyIdipae_product($table="ipae_product",$fname="id",$id)
    {

        $this->db->select('*')->from("ipae_product as p");
        $this->db->where($fname,$id);
        $this->db->join("ipae_color as c","c.id=p.id");
        $this->db->join("ipae_capacity as cc","cc.id=p.id");
        $this->db->join("ipae_subcategory as sb","sb.subid=p.subid");
        $this->db->join("ipae_category as ct","ct.id=p.id");
        $query=$this->db->get();
        $result=$query->result();
        return $result;

    }


function getDatabyIdProductAcc($table="ipae_product",$fname="id",$id){

        $this->db->select('*')->from("ipae_product as p");
        $this->db->where($fname,$id);
        $this->db->join("ipae_color as c","c.id=p.id");
       // $this->db->join("capacity as cc","cc.id=p.id");
        $this->db->join("ipae_subcategory as sb","sb.subid=p.subid");
        $this->db->join("ipae_category as ct","ct.id=p.id");
        $query=$this->db->get();
        $result=$query->result();
        return $result;

    }
function getDatabyIdAddres($table="ipae_customer_address",$fname="customer_id",$id){
        $this->db->select('*')->from("ipae_customer_address as p");
        $this->db->where($fname,$id);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
  }
/* for Insert customer  order itms details */
public function insert_order_item($data_order){
        $this->db->insert('ipae_customer_order_items', $data_order);
        return true;
}
 
public function getOrderDetailsBycustomerId($id){
        
        $this->db->where('customer_id',$id);
        $this->db->order_by('id desc');
        $result = $this->db->get('ipae_customer_order_items');
        return $result->result_array();
     }
public function getOrderDetailsByorderId($id){
        $this->db->where('id',$id);
        $result = $this->db->get('ipae_customer_order_items');
        return $result->row_array();
     }
public function changeOrderStatus($o_id,$status){
        $this->db->where('id',$o_id);
        $result = $this->db->update('ipae_customer_order_items',$status);
        return true;
}
public function updateProductStock($pid,$qty,$operator){    
  $this->db->where('id',$pid);
  $result = $this->db->get('ipae_product');
  if($result){
  $productDetails = $result->row_array();
  if($operator == 'minus'){
     $updated_stock = $productDetails['stock'] - $qty;
  }
  else{
     $updated_stock = $productDetails['stock'] + $qty;
  }
  $data = array('stock' => $updated_stock);

  $this->db->where('id',$pid);
  $this->db->update('ipae_product',$data);
  //echo $this->db->last_query(); die;
  return true;
  }
}
function getDataByPriority($table,$clmname){
	 $this->db->select("*")->from($table);
	 $this->db->order_by($clmname,"ASC");
	 $query=$this->db->get();
	 $result=$query->result();
	 return $result;
}
function varificationString($value){
         $this->db->select("*")->from("ipae_customers");
         $this->db->where("verification_code",$value);
         $query=$this->db->get();
         if($query->num_rows() == 1)
         {
          return $query->row_array();
         }
         else
         {
          return $query->row_array();
         }
}



function varificationotp($otp,$sess){
         $this->db->select("*")->from("ipae_customers");
         $this->db->where("otp",$otp);
         $this->db->where("verification_code",$sess);
         $query=$this->db->get();
           $this->db->last_query();
         if($query->num_rows() == 1)
         {
          return $query->row_array();
         }
         else
         {
          return "0";
         }
}


function getDatabyIdByProduct($table="ipae_product",$fname="subid",$id){
      $this->db->select('*')->from($table);
      $this->db->where($fname,$id);
      $this->db->order_by("product_sequence","ASC");
      $query=$this->db->get();
      $result=$query->result();
      return $result;
}
function getDataASC($table,$ascCol,$id,$subcatId){
  if($id == "1"){
      $this->db->select("*")->from("ipae_product");
      $this->db->where("subid",$subcatId);
      $this->db->order_by($ascCol,"desc");
      $query=$this->db->get();
      $result=$query->result();
      return $result;
      }
      else{

          $this->db->select("*")->from("ipae_product");
          $this->db->where("subid",$subcatId);
          $this->db->order_by($ascCol,"ASC");
          $query=$this->db->get();
          $result=$query->result();
          return $result;
      }
}



 
function varificationresendotp($sess){
         $this->db->select("*")->from("ipae_customers");
         $this->db->where("verification_code",$sess);
         $query=$this->db->get();
         //echo  $this->db->last_query();exit;
         if($query->num_rows() == 1)
         {
          return $query->row_array();
         }
         else
         {
          return "0";
         }
}
public function getOrderDetailsByOrderNumber($order){
        
        $query = $this->db->query("SELECT * from ipae_customer_order_view where`order_number`='$order'");
		
        return $query->result();
     }
     
     
     
     
     public function CheckUserName($username)
       {

        $this->db->select("*")->from("ipae_customers");
        $this->db->where("username",$username);
        $query = $this->db->get();
       
          if($query->num_rows() == 1)
         {
          return $query->row_array();
         }
         else
         {
          return "0";
         }

       }
	public function getcancelpaymentstatus($order_id){
         $this->db->select("*")->from("ipae_payment");
         $this->db->where("payment_status",'0');
		 $this->db->where("message",'Cancelled');
		 $this->db->where("order_id",$order_id);
         $query=$this->db->get();
         //echo  $this->db->last_query()."<br>";
         if($query->num_rows() == 1)
         {
          return "1";
         }
         else
         {
          return "0";
         }
    }
	
	  //emirates
	public   function getAllemiratesC()
		{
		 	$query = $this->db->query('SELECT * FROM `ipae_zone`  WHERE `country_id` = 221');
			 return $query->result();
 			 
 		}
		 //emirates
	   
	public   function getAllcity($id)
		{
			$query = $this->db->query('SELECT * FROM `ipae_zone_city` WHERE `stateid` = '.$id.'');
 			return    $query->result();
		}       
 }


