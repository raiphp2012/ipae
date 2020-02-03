<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipae extends CI_Controller {
public function __construct() {
       parent::__construct();
      
      }


      function listing()
      {
        $this->load->view("product_listing");
      }

      public function subid($cat_slug,$slug)
      {
         $result['title']=$slug;
          $result['cat']=$cat_slug;
         $this->db->where('cat_slug',$cat_slug);
          $catDetails = $this->db->get('ipae_category')->row_array();
          if(!$catDetails['id']){
             redirect('404_override');
            }    
         
         $this->db->where('subcat_slug',$slug);
          $subcatDetails = $this->db->get('ipae_subcategory')->row_array();
           $id= $subcatDetails['id'];
            $pagetitle= $subcatDetails['subcat_name'];
             $result['product'][0]['pagetitle']=$pagetitle;
          if(!$id){
                    redirect('404_override');
          }
        $result['product']=$this->Ipae_model->getDatabyIdseqm($table="ipae_product",$fname="subcat_id",$id); 
        $total=count($result['product']);
        if($total>0)
        {
          $this->load->view('product_listing',$result,$pagetitle); 
        }
        else
        {
          $this->load->view('incomming_product',$result);
        }
        
      }


 function description($c_slug,$scat_slug,$p_slug)
        {

           //echo $p_slug; exit();
          //echo "hi"; exit();
          $result['title']="$p_slug";
         $this->db->where('cat_slug',$c_slug);
          $catDetails = $this->db->get('ipae_category')->row_array();
          if(!$catDetails['id']){
          redirect('404_override');
         }

         $this->db->where('subcat_slug',$scat_slug);
          $subcatDetails = $this->db->get('ipae_subcategory')->row_array();
          if(!$subcatDetails['subid']){
          redirect('404_override');
         }


          $this->db->where('product_slug',$p_slug);
          $productDetail = $this->db->get('ipae_product')->row_array();
          
        
        $id= $productDetail['id']; 

        if(!$id){
          redirect('404_override');
         }

$cat_name = $this->uri->segment(1);

if($cat_name == 'accessories' || $cat_name == 'Accessories'){
   $result['product']=$this->Ipae_model->getDatabyIdProductAcc($table="ipae_product",$fname="id",$id);
}
else{
   $result['product']=$this->Ipae_model->getDatabyIdProduct($table="ipae_product",$fname="id",$id);
}
      
   // echo "<pre>"; print_r($result); exit();
      $subcate_id= $result['product']['0']->subid;
      //echo $subcate_id; exit();
      $result['related_product']=$this->Ipae_model->getDatabyId($table="ipae_product",$fname="subid",$subcate_id);
      //echo "<pre>"; print_r($result); exit();
        $this->load->view('product-detail24',$result);
        }

  public function Bag()
    { 
     
      $total=count($this->cart->contents());
      if($total>0)
      {
     
        $this->load->view("bag");
      }
      else
      {
    
        $this->load->view("emptyCart");
      }
      
    }


public function deleteAddress($id)
    { 

      $this->db->where('id',$id);
      $this->db->delete('ipae_customer_address');
      $this->checkout();
    }












   public function checkoutmain()
    {
      
      if(isset($this->session->userdata['logged_in']))
      {
          $id=$this->session->userdata['logged_in']['id'];
          
          $result['new_user_table']=$this->Ipae_model->getDatabyIdAddres($table="ipae_customer_address",$fname="customer_id",$id);

          $result['country']=$this->db->get('ipae_country')->result();
          $items=count($this->cart->contents());
          if($items>0)
          {
              $this->load->view("checkoutmain",$result);
          }
          else
          {
            $this->session->set_flashdata("succes//s","Please add some data in cart.");
            redirect("ipae/bag");
          }
      }
      elseif(isset($this->session->userdata['guestPhone'])){
        redirect("Login");
         
      }
      else
      {
         
        $this->session->set_flashdata("error","Please login first!");
        redirect("Login");
        
      }
    }
    
   public function checkout()
    {
      
      if(isset($this->session->userdata['logged_in']))
      {
          $id=$this->session->userdata['logged_in']['id'];
          
          $result['new_user_table']=$this->Ipae_model->getDatabyIdAddres($table="ipae_customer_address",$fname="customer_id",$id);

          $result['country']=$this->db->get('ipae_country')->result();
          $items=count($this->cart->contents());
          if($items>0)
          {
              $this->load->view("checkout",$result);
          }
          else
          {
            $this->session->set_flashdata("succes//s","Please add some data in cart.");
            redirect("ipae/bag");
          }
      }
      elseif(isset($this->session->userdata['guestPhone'])){
        redirect("Login");
         
      }
      else
      {
         
        $this->session->set_flashdata("error","Please login first!");
        redirect("Login");
        
      }
    }


public function checkoutLogin(){
     
     if(isset($_POST['continue'])){
    
      $guestPhone = $_POST['guest_phone'];
      $this->session->set_userdata('guestPhone',$guestPhone);
      redirect('guestCheckout');
     }

     $this->load->view('checkoutLogin');
  }

  public function guestCheckout(){
    
     $this->load->view("guestCheckout");
  }


    public function addTocart($id,$price)
        {
        // echo    $id;
         
         //echo "<br>".$price;
         
          $dbfieldstr="price".$price;
           $result=$this->db->query("select * from ipae_product where id=?",array($id))->row();
          
          
          if($price=='0')
          {
          $data = array
          (
              'id'      => $result->id,
              'qty'     => 1,
              'price'   => $result->product_price,
              'name'    => $result->product_name,
              'img' =>$result->product_image1,
              'part_number' =>$result->part_number,
              'upc' =>$result->upc
          );
          }
          else
          {
          $data = array
          (
              'id'      => $result->id,
              'qty'     => 1,
              'price'   => $result->$dbfieldstr,
              'name'    => $result->product_name,
              'img' =>$result->product_image1,
              'part_number' =>$result->part_number,
              'upc' =>$result->upc
          );
          }

 $url=$this->session->userdata("url");
$cart_content = $this->cart->contents();
foreach($cart_content as $cart_item)                            
{

   if(($cart_item['id']==$id))
   {
         $this->session->set_flashdata('success','Product already added to cart');
        unset($cart_item['rowid']);
        $upd=1;
        redirect(base_url('ipae/bag'));
        
        break;
    }                                        
}

          $insert = $this->cart->insert($data);
          redirect("bag");
           
          
        }

     public function update_card()
        {
          //echo "hi"; exit();
          $qty=$this->input->post("qty"); 
          $id= $this->input->post("row_id"); 
          $price= $this->input->post("price"); 
         
          $data = array

              (
                'rowid' => $id,
                'qty'   =>  $qty
              );
              $this->cart->update($data);
              $url=$this->session->userdata("url");

                $grand_total = 0;
                foreach ($this->cart->contents() as $row )
                {
                  
                  $grand_total += $row['subtotal'];
                }

              $updatedSubTotal = $qty*$price; 
              
              $returnData = array();
              $returnData['subtotal'] = $updatedSubTotal;
              $returnData['grand_total'] = $grand_total;
              
              echo json_encode($returnData);
        }



    public function cart_removeall()
      {  
   

      
          $this->cart->destroy();
          // $total=count($this->cart->contents());

         redirect(base_url("ipae/Bag"));
           
    
      }





  
  function order_list()
        { 
          $date= date('Y-m-d H:i:s'); 
          $day=date('Y-m-d');

           $customer_name=($this->session->userdata['logged_in']['name']);
           $nameorder=substr($customer_name,0,3);
           $nameorder = strtoupper($nameorder);
           $this->db->select('id');
           $this->db->from('ipae_customer_order_items');
           $this->db->limit(1);
           $this->db->order_by('id DESC');
           $get_count_id = $this->db->get()->row_array();
           
 
 //select orderid from ipae_subcategory where id=(SELECT subcat_id FROM `ipae_product` where id='27') 
           if(empty($get_count_id)){
           
            $num = "000001";
           }
           else{
            
            $num =  str_pad($get_count_id['id'] + 1, 6, '0', STR_PAD_LEFT);
           }
           
           
           $logic_i=0;
           foreach ($this->cart->contents() as $order_data) {
            if( $logic_i==0){
              $productcode_id=$order_data['id'];
            }
             $logic_i++;
           }
           $this->db->select('product_code');
           $this->db->where('ipae_product.id', $productcode_id);
           $this->db->join('ipae_product', 'ipae_subcategory.cat_id = ipae_product.cat_id', 'left');
          $query = $this->db->get('ipae_subcategory');
           $product_code=$query->row()->product_code;
           $a = $product_code."-".$num."-".$nameorder;
          
          
      
          $monu['o_id']=$a;

          $tx_id = "";
                    
          if(isset($this->session->userdata['logged_in']))
            {
              
              $customer_id=($this->session->userdata['logged_in']['id']);
              $customer_name=($this->session->userdata['logged_in']['name']);
              $email=($this->session->userdata['logged_in']['username']);
              $subtotal=$this->input->post('price');
              $id=$this->input->post('id');
              $total=$this->input->post('price');
              $mobile=$this->input->post('order_contact');
              $payment_method=$this->input->post('payment_method');
			  $firstname=$this->input->post('firstname');
			  $lastname=$this->input->post('lastname');
			  $emirates=$this->input->post('emirates');   			  
			  $area=$this->input->post('area');   
			  $streetname=$this->input->post('streetname');
			  $buildingname=$this->input->post('buildingname');

              $delivery_method='48-hours-delivery';
              
                $shipping_address_id=$this->input->post('shipping_address_id');
				
				//if(isset($shipping_address_id) && $shipping_address_id!=''){
				$this->db->select("id")->from("ipae_customer_address");
				$this->db->where("customer_id",$this->session->userdata['logged_in']['id']);
				$query = $this->db->get();
				$userContactData=getUserInfoByUid($this->session->userdata['logged_in']['id']);
                if($query->num_rows()>0){
				$this->db->where('customer_id',$this->session->userdata['logged_in']['id']);
                $this->db->update('ipae_customer_address',array('firstname'=>$firstname,'lastname'=>$lastname,'emirates'=>$emirates,'area'=>$area,'street'=>$streetname,'building'=>$buildingname,'contact'=>$userContactData['contact']));	
				}else{
				$data=array(
				      'customer_id'    => $this->session->userdata['logged_in']['id'],
					  'email_id'    => $this->session->userdata['logged_in']['username'],
				      'emirates'       => $emirates,
				      'area'           => $area,
				      'firstName'      => $firstname,
				      'lastName'       => $lastname,
				      'building'       => $buildingname,
				      'street'         => $streetname,
					  'contact'         => $userContactData['contact']

                                );

                  $result=$this->Ipae_model->insertData($table="ipae_customer_address",$data);
					
				}
					
			
				
			   
                //$this->db->where('id',$shipping_address_id);
				$this->db->where('customer_id',$this->session->userdata['logged_in']['id']);
                $address_data = $this->db->get('ipae_customer_address')->row_array();
				
				$shipping_address_id=$address_data['id'];				
                $cur_date= date('F j, Y');   
                $shipping = 0;
                $main_total = 0;
              foreach ($this->cart->contents() as $row )
                {
                   $price=$row['price'];
                    $qty=$row['qty'];
                    $subtotal=$qty*$price;
                  
                  if($payment_method == 'cod'){ 
                    $shipping += $qty; 
                  }
                 
                  $main_total += $subtotal;
                  if($payment_method != 'cod'){
                       $data_order = array(
                      'order_number'   =>$a,    
                      'customer_id'    =>$customer_id,
                      'order_date'     =>$date,
                      'order_status'   => 1,
                      'payment_method' => 1,					 
                      'shipping_address_id' => $shipping_address_id,
                      'count_orders' => count($this->cart->contents()),
					   /***** Start               By Divy Singhal 17-09-2017                                   *****************/
					  'emirates'       => $address_data['emirates'],
				      'area'           => $address_data['area'],
				      'firstName'      => $address_data['firstName'],
				      'lastName'       => $address_data['lastName'],
				      'building'       => $address_data['building'],
				      'street'         => $address_data['street']
					  /***** End               By Divy Singhal 17-09-2017                                   *****************/
                        );
                     $cart[]=array(
                     'order_id'=>$a,
                     'customer_id'=>$customer_id,
                     'product_id'=>$row['id'],
                     'product_name'=>$row['name'],
                     'product_quantity'=>$qty,
                     'product_image'=>$row['img'],
                     'price'=>$price,
                     'subtotal'=>$subtotal,
                     'date_time'=>date('Y-m-d H:i:s')
                     );
                      
                  }
                  else{
                      $data_order = array(
                      'order_number'   =>$a,    
                      'customer_id'    =>$customer_id,
                      'order_date'     =>$date,
                      'order_status'   => 1, 
                      'payment_method' => 0,
                      'shipping_address_id' =>$shipping_address_id,
                      'total_amt'=>$row['price'], 
                      'count_orders'   => count($this->cart->contents()),
					  /***** Start  By Divy Singhal 17-09-2017        *****************/
					  'emirates'       => $address_data['emirates'],
				      'area'           => $address_data['area'],
				      'firstName'      => $address_data['firstName'],
				      'lastName'       => $address_data['lastName'],
				      'building'       => $address_data['building'],
				      'street'         => $address_data['street']
					  /***** End By Divy Singhal 17-09-2017   *****************/
                        );
                      $cart[]=array(
                     'order_id'=>$a,
                     'customer_id'=>$customer_id,
                     'product_id'=>$row['id'],
                     'product_name'=>$row['name'],
                     'product_quantity'=>$qty,
                     'product_image'=>$row['img'],
                     'price'=>$price,
                     'subtotal'=>$subtotal,
                     'date_time'=>date('Y-m-d H:i:s')
                     );
                     $payment=array(
                    'order_id'=>$a,
                     'customer_id'=>$customer_id,
                     'transcation_id'=>'',
                     'pay_amount'=>$row['name'],
                     'payment_status'=>$qty,
                     'message'=>$row['img'],
                     'date_time'=>date('Y-m-d H:i:s')
                      ); 
                  }

                 
                } 

               // print_r($data_order); die;
                
                $length=count($data_order);
                $i=0;

                //CHECK IF PAYMENT IS COD OR NOT
                if($payment_method == 'Card'){
                    for($i=0; $i<count($cart);$i++)
                    {
                      $result=$this->db->insert('ipae_cart_product',$cart[$i]);
                      
                    }
                    
                    
                    $this->session->set_userdata('orderDetails', $data_order);

                if($payment_method == 'cod'){
                        $main_total = $main_total + $shipping;
                       
                    $this->db->where('order_number',$a);
                    $this->db->update('ipae_customer_order_items',array('total_amt'=>$main_total));
                      }
                  else if($payment_method == 'Card') {
                    $main_total = $main_total + $shipping;
                       $payment=array(
                      'order_id'=>$a,
                     'customer_id'=>$customer_id,
                     'transcation_id'=>$tx_id,
                     'pay_amount'=>$main_total,
                     'payment_status'=>000,
                     'message'=>' ',
                     'date_time'=>date('Y-m-d H:i:s')
                      );
                     $result=$this->Ipae_model->insert_order_item($data_order);   
                    $this->db->insert('ipae_payment',$payment);

                       $this->db->where('order_number',$a);
                    $this->db->update('ipae_customer_order_items',array('total_amt'=>$main_total));
                 

                  }   
                 
                    
                 $secretHash="8EBEC413A31C660DB322E226DDA6035E";
                    $accessCode='98F5167E';
                    $merchantId='300305';   

                    $data = array(
                        "vpc_AccessCode" => $accessCode,
                        "vpc_Amount" => $main_total*100,
                        "vpc_Command" => 'pay',
                        "vpc_Locale" => 'en',
                        "vpc_MerchTxnRef" =>$a,
                        "vpc_Merchant" => $merchantId,
                        "vpc_OrderInfo" => "Order_N_".time(),
                        "vpc_ReturnURL" => base_url()."ipae/payment_response",
                        "vpc_Version" => '1',
                        'vpc_SecureHashType' => 'SHA256'    
                    );

                    ksort($data);
                    $hash = null;
                    foreach ($data as $k => $v) {
                        if (in_array($k, array('vpc_SecureHash', 'vpc_SecureHashType'))) {
                            continue;
                        }
                        if ((strlen($v) > 0) && ((substr($k, 0, 4)=="vpc_") || (substr($k, 0, 5) =="user_"))) {
                            $hash .= $k . "=" . $v . "&";
                        }
                    }
                    $hash = rtrim($hash, "&");

                    $secureHash = strtoupper(hash_hmac('SHA256', $hash, pack('H*', $secretHash)));
                    $paraFinale = array_merge($data, array('vpc_SecureHash' => $secureHash));
                    $actionurl = 'https://migs.mastercard.com.au/vpcpay?'.http_build_query($paraFinale);
                    redirect('https://migs.mastercard.com.au/vpcpay?'.http_build_query($paraFinale));
                   
                }
                else{
                 
                  for($i=0; $i<count($cart);$i++)
                  {
                    $result=$this->db->insert('ipae_cart_product',$cart[$i]);
                    
                  }
                  $result=$this->Ipae_model->insert_order_item($data_order);

                }
                if($result)
                  {

                    //update stock of product
                    foreach ($this->cart->contents() as $row )
                    {
                      $pid = $row['id'];
                      $qty = $row['qty'];
                      $updateProduct = $this->Ipae_model->updateProductStock($pid,$qty,'minus');
                      
                    }

                 $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.ip-ae.com';
        $config['smtp_port']    = '587';
        $config['smtp_user']    = 'customers@ip-ae.com';
        $config['smtp_pass']    = 'customers@123';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
$config['crlf'] = '\r\n';       
$config['newline'] = '\r\n';    

                   

        if($payment_method == 'cod'){
          $main_total = $main_total + $shipping;
        }
        $this->db->where('order_number',$a);
        $this->db->update('ipae_customer_order_items',array('total_amt'=>$main_total));

$dummy_msg ='
 <div style="width:690px; margin:auto; border:1px solid #ccc;  padding:5px;">
  
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td height="45" style="background-color:black"> <table width="100%"><tr><td><img src="http://www.ip-ae.com/assests/img/logo1.png" alt="iP-AE" style="max-width:150px" /></td><td align="right"><span style="color:#fff;font-family: Verdana; font-size: 12px; margin:5px">customer@ip-ae.com</span></td></tr></table></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td height="25"> </td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Hello '.ucfirst($address_data[firstName]).' '.ucfirst($address_data[lastName]).',

</td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> <br><br></td>
</tr>
<tr>
<td align="center"><br><br><strong  style="font-family: Verdana; font-size: 14px; color: #4d4d4d;">THANK YOU FOR SHOPPING WITH US! PLEASE SEE ORDER DETAILS BELOW.</strong></td>
</tr>
<tr>
<td height="15"  style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> <br><br></td>
</tr>
<tr>
<td>
 
</td>
</tr>
 
<tr>
<td>
<table   border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td  valign="top">
<table><tr><td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br><br>


<strong>Shipping Address</strong><br><br></td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">'.ucfirst($address_data[firstName]).' ' .ucfirst($address_data[lastName]).'</td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;" colspan="2">'.$address_data[building].'<br> Street : '.$address_data[street].' <br> 
Email : '.$address_data[email_id].'</td>
</tr>
</table>
 </td>
 <td width="100"></td>
 <td>
<table><tr><td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br><br>


<strong>Order Information </strong><br><br></td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Order No. : <b>#'.$a.'</b></td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Payment Mode : <b>';

                    if($payment_method == "cod"){
                      $dummy_msg .= "COD";
                    }
                    else{
                      $dummy_msg .= "Card/Online";
                    }

                $dummy_msg .='</b></td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Order Date : <b>'.$cur_date.'</b></td>
</tr>

</table>
 </td>
 </tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="25"><br><br> </td>
</tr>
<tr>
<td>
<table style="border-bottom-width: 0px; border-bottom-style: solid; border-bottom-color: #000000; width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-family: Verdana; font-size: 13px; color: #4d4d4d;" colspan="2"><strong>Order Summary</strong><br><br></td>
</tr>
 
<tr>
<td style="font-family: Verdana; font-size: 11px; color: #4d4d4d;" colspan="2">

<table width="100%" border="0" cellspacing="0" cellpadding="5" style="mar0; padding:0;border-collapse: collapse;">
   <tr style="text-align:center">
    <td width="10%" style="background:#eeeeee;  font-size: 12px;padding:5px;">S. No  </td>
    <td width="27%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Product Name  </td>
    <td width="27%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Product Image </td>
    <td width="8%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Quantity</td>
    <td width="17%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Unit Price  </td>
     <td width="17%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Total</td>
  </tr>';
  
      $counter = 1;
      $grand_total = 0;
      $ship = 0;
      $subtotal_total = 0;
        foreach ($this->cart->contents() as $row )
        {
              $price = $row['price'];
              $qty = $row['qty'];
              $subtotal = $qty*$price;
              $ship += $qty;
              $dummy_msg .= '<tr style="text-align:center" class="productlist">
                    <td  style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$counter.'</td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">'.$row[name].'</td>
                       <td   style="align:center;background:#fff;  font-size: 11px;padding:5px;"><img src=http://www.ip-ae.com'.$row[img].' style="width:50px; height:50px"></td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">'.$qty.'</td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;"> AED '.$price .'</td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">AED '.$subtotal.' </td>
            </tr>';
              $counter++;
              $grand_total += $subtotal; 
              $subtotal_total += $subtotal;
        } 
     
      
  
  
  
  
  
  


 
      
      $dummy_msg .= '<tr>
    <td colspan="6">&nbsp;</td>
  </tr>';
      if($payment_method == 'cod'){
          $dummy_msg .= '<tr>
      <td colspan="5" align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;"> Cash on Delivery Charge</td>
     <td colspan="1"style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '. $ship.'</td>
   </tr>
<tr>
      <td colspan="5" align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;"> Shipping Charge</td>
     <td colspan="1" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED 0</td>
   </tr>';
      }
           if($payment_method == 'cod'){
              $grand_total = $grand_total + $shipping;
            }
            

                               
      $dummy_msg .= '
      <tr>
      <td colspan="5" style="align:center;background:#fff;  font-size: 11px;padding:5px;" align="right">Sub Total</td>
     <td colspan="1" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '. $subtotal_total.'</td>
   </tr>
    <tr>
      <td colspan="5" align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">VAT</td>
     <td colspan="1" style="align:right;background:#fff;  font-size: 13px;padding:5px;">AED 0</td>
   </tr>
  
  <tr>
    <td colspan="5" align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">Grand Total</td>
    <td colspan="1" style="align:right;background:#fff;  font-size: 13px;padding:5px;">AED '.$grand_total. '</td>
  </tr>  
</table></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> </td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"> </td>
</tr>
<tr>
<td height="15"> </td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"> </td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> </td>
</tr>
<tr>
<td align="center" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br><br><strong>Office No. 303, Ali Rashid Alabbar Al Marar, Deira, P.O. Box: 1272,
Dubai-United Arab Emirates<br>
Email: info@ip-ae.com <br>
Contact: (+971)-5-6545 5670<br>www.ip-ae.com</strong></td>
</tr>
<tr>
<td height="15"> </td>
</tr>
<tr>
<td  align="center" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br /></td>
</tr>
<tr>
<td align="center" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><a href="http://www.ip-ae.com/"><img src="http://www.ip-ae.com/assests/img/btn.jpg" width="228" height="64"></a></td>
</tr>
<tr>
<td height="15"><table width="100%" height="300" border="0" cellpadding="0" cellspacing="0">
  <tbody><tr style="background:url(http://www.ip-ae.com/assests/img/footer.jpg) no-repeat 0;">
    <td height="300">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
      <td height="55" colspan="2" align="center" valign="top" style="font-family: Verdana; font-size: 18px; color: #4d4d4d;">
        Nothing unofficial about it</td>
         </tr>
      <tr>
      
        <td width="47%" height="102" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"></td>
        <td width="53%" align="center" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"> </td>
        </tr>
      <tr>
        <td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="100" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"></td>
        <td align="center" valign="bottom"><a href="http://www.ip-ae.com/"><img src="http://www.ip-ae.com/assests/img/logo1.png"></a></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table></td>
</tr>
</tbody>
</table>
 </div>
 ';
 


                     $subject = "Order #".$a." has been placed." ;
                     $this->load->library('email', $config);
                     $this->email->set_newline("\r\n");
                     $this->email->from("customers@ip-ae.com", "iP-AE");
                     $this->email->to($email);
                     $this->email->subject($subject);
                     $this->email->message($dummy_msg);
                     $this->email->send();

$CountryCode=getUserCountryIdByUid($address_data['customer_id']);
$mobile_number="$CountryCode".$address_data['contact'];    
$sms="Hello ".ucfirst($address_data['firstName'])." ".ucfirst($address_data['lastName']).",  your order #".$a." has been placed. We will send you shipping information soon. ";
$res=sendSms($mobile_number,$sms,$CountryCode);
            
			$sms_log_array=array();
            $sms_log_array['customer_id']=$this->session->userdata['logged_in']['id'];
			$sms_log_array['message']=$sms;
			$sms_log_array['mobile_number']=$mobile_number;
			$sms_log_array['customer_name']=ucfirst(strtolower($address_data['firstName']))." ".ucfirst(strtolower($address_data['last_name']));
			$sms_log_array['origin']='Order Placed';
			
			$this->Ipae_model->insertData('ipae_sms_logs',$sms_log_array);
  
 
                     $this->cart->destroy();
                     $this->session->set_flashdata('success','Your order has been placed successfully');
                     redirect(base_url("welcome/thanku"));
                    

                  }
                else{
                
                    $this->session->set_flashdata('error','Your order has not been placed successfully');
                     redirect(base_url("welcome/thanku"));
                 }

        }
       
      }






  public function update()
    {
      $rowid=$this->input->post('rowid');
    /*  echo $this->input->post('quantity'); exit();*/
        $data=array(
            'rowid'=>$rowid,
            'qty'=> $this->input->post('quantity')
        );
        //echo '<pre>'; print_r($data); exit();
        $this->cart->update($data);  
        redirect('Product/cart');
    }


   public function cart_remove($rowid)
      {
        //$rowid=$this->input->get('id');
        //echo $rowid; exit();
        if ($rowid==="all")
        {
        // Destroy data which store in session.
       $this->cart->destroy(); 
        //$this->comprice();
         $this->cart();
        }else{
            // Destroy selected rowid in session.
          $data = array(
          'rowid' => $rowid,
          'qty' => 0
          );
        //print_r($data); exit();
          //$this->cart->destroy();exit();
          $this->cart->update($data);
           //print_r($this->cart->contents());
          $row=count($this->cart->contents());
                  if(!$row)
                  {
                       //$url=$this->session->userdata("url");
                       redirect(base_url("ipae/Bag"));
                  }
                  else
                  {
                    //echo " following item is selected";
                       //$url=$this->session->userdata("url");
                        redirect(base_url("ipae/Bag"));
                  }

          /*$this->cart(); // update table 
        }*/
       }
                           }

 public function get_subcategory_product1()
              {
                $id=$_POST['id'];
                //echo $id; exit();
                       // $subcat=$this->Satwari_modal->getDataById($table='sub_category',$fname='category_id',$id);
                        $subcat = $this->db->get_where('ipae_zone' , array(
                          'country_id' => $id
                      ))->result_array();
                       //print_r($subcat); exit();
                        foreach ($subcat as $row) {
                            echo '<option value="' . $row['zone_id'] . '">' . $row['state_name'] . '</option>';
                           
                        }
            }


            function Checkout_Address()
                {
                  //echo "hi"; die;
                  $data=array(
                                'customer_id'=>$this->input->post('user_id'),
                                'email_id'=>$this->input->post('email'),
                                'full_address'=>$this->input->post('address'),
                                'city'=>$this->input->post('city'),
                              /*  'pin_code'=>$this->input->post('pin_number'),*/
                               
                                'zone_id'=>$this->input->post('stateid'),
                                'firstName'=>$this->input->post('firstname'),
                                'lastName'=>$this->input->post('lastname'),
                                'contact'=>$this->input->post('phone'),
                                 'suit'=>$this->input->post('suite')

                                );

                  //echo "<pre>"; print_r($data); exit();
                  $result=$this->Ipae_model->insertData($table="ipae_customer_address",$data);
                  if($result)
                  {
                    //echo "data is stored on database.";
                    $this->session->set_flashdata("success","Your data is successfuly saved on database.");
                    redirect("ipae/checkout");
                  }
                  else
                  {
                    //echo "data is not stored on database.";
                    $this->session->set_flashdata("error","Your data is not successfuly saved on database.");
                    redirect("ipae/checkout");
                  }
                  
              $this->load->view('checkout');
                }

                function update_address()
                {
                  ///echo "hi"; exit()
                   $id=$this->input->post('adrs_id');
                    $data=array(
                               
                                'email_id'=>$this->input->post('email'),
                                'full_address'=>$this->input->post('address'),
                                'city'=>$this->input->post('city'),
                               /* 'pin_code'=>$this->input->post('pin_number'),*/
                               
                                'zone_id'=>$this->input->post('stateid'),
                                'firstName'=>$this->input->post('firstName'),
                                'lastName'=>$this->input->post('lastName'),
                                'contact'=>$this->input->post('phone'),
                                 'suit'=>$this->input->post('suit')

                                );
                        //echo "<pre>"; print_r($data); exit();
                    $result=$this->Ipae_model->updateData($table="ipae_customer_address",$fname="id",$id,$data);
                    if($result)
                    {
                      $this->session->set_flashdata("success","Data is updated successfully.");
                      redirect("ipae/checkout");

                    }
                    else
                    {
                       $this->session->set_flashdata("error","Data is not updated successfully.");
                      redirect("ipae/checkout");

                    }
                }



                 public function add_address()
                {
                  ///echo "hi"; exit()
                   $id=$this->input->post('user_id');
                    $data=array(
                                'id'=>$id,
                                'email_id'=>$this->input->post('email'),
                                'full_address'=>$this->input->post('address'),
                                'city'=>$this->input->post('city'),
                               /* 'pin_code'=>$this->input->post('pin_number'),*/
                                
                                'zone_id'=>$this->input->post('stateid'),
                                'firstName'=>$this->input->post('firstName'),
                                'lastName'=>$this->input->post('lastName'),
                                'contact'=>$this->input->post('phone'),
                                 'suit'=>$this->input->post('suit')

                                );
 //echo "<pre>"; print_r($data); exit();
                    $result=$this->Ipae_model->insertData($table="ipae_customer_address",$data);
                    if($result)
                    {
                      $this->session->set_flashdata("success","Data is addedd successfully.");
                      redirect("ipae/checkout");

                    }
                    else
                    {
                       $this->session->set_flashdata("error","Data is not added successfully.");
                      redirect("ipae/checkout");

                    }
                }




    public function payment_response()
    {   
      

        $cur_date= date('F j, Y');  
        $email=$this->session->userdata['logged_in']['username'];
        $message = $_GET['vpc_Message']; 
        $payment_status = $_GET['vpc_TxnResponseCode']; 
        $order_id = $_GET['vpc_MerchTxnRef'];
        $this->session->set_userdata('order_id',$order_id);
        $this->db->where("order_id",$order_id);
        $result=$this->db->get("ipae_payment");
        $address_data=$result->row_array();
//print_r($address_data); die;
         if($payment_status == 0)
         {
            $order_status = 1;
         }
         else
         {
            $order_status = 3; 
         }
      
        $update_data = array(
                      'transcation_id'=>$this->input->get('vpc_TransactionNo'),
                      'message' => $message,
                      'payment_status' => $payment_status
                 );

        $this->db->where('order_id',$order_id);
        $res = $this->db->update('ipae_payment',$update_data);
        $this->db->where('order_number',$order_id);
        $res = $this->db->update('ipae_customer_order_items',array(
                      'order_status' => $order_status));

        if($res)
        {

           if($message == 'Approved')
           { 
              
              //update stock of product
              foreach ($this->cart->contents() as $row )
              {
                $pid = $row['id'];
                $qty = $row['qty'];
                $updateProduct = $this->Ipae_model->updateProductStock($pid,$qty,'minus');
                
              }
              $this->session->flashdata('success','Order successfully');


                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                $config['smtp_port']    = '465';
                $config['smtp_user']    = 'info.ipaecom@gmail.com';
                $config['smtp_pass']    = 'ipaecom2017';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $config['crlf'] = '\r\n';       
                $config['newline'] = '\r\n';    
                $main_total = 0;
                $shipping = 0;
             foreach ($this->cart->contents() as $row )
        {
              $price = $row['price'];
              $qty = $row['qty'];
              $subtotal = $qty*$price;
              $shipping += $qty;
         }             
   if($address_data['payment_method'] == 'cod'){
              $main_total = $main_total + $shipping;
            }
     /*       elseif($address_data['payment_method'] == 'cod' && $address_data['delivery_method'] == '48-hours-delivery'){
              $main_total = $main_total + $shipping;
            }
            elseif($address_data['payment_method'] == 'Card' && $address_data['delivery_method'] == '48-hours-delivery'){
              $main_total = $main_total;
            }
            else{
              $main_total = $main_total + 50;
            }*/

$dummy_msg = "
<html>

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  
  <title>ip-ae Invoice</title>
  <style type='text/css'>

* { margin: 0; padding: 0; }
#clears{
  clear:both;
}
.ship_to{
  margin-left: 225px;text-align: center;margin-bottom: 17px;
}
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 800px; margin: 0 auto; }

textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
table { border-collapse: collapse; }
table td, table th { border: 1px solid black; padding: 5px; }

#header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

#address { width: 250px; height: 38px; float: left; }
#customer { overflow: hidden; }

#logo { text-align: right; float: left; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 100px; overflow: hidden; }
#logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
#logoctr { display: none; }
#logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
#logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
#logohelp input { margin-bottom: 5px; }
.edit #logohelp { display: block; }
.edit #save-logo, .edit #cancel-logo { display: inline; }
.edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
#customer-title { font-size: 20px; font-weight: bold; float: right; }

#meta { margin-top: 1px; width: 300px; float: left; }
#meta td { text-align: left;  }
#meta td.meta-head { text-align: left; background: #eee; }
#meta td textarea { width: 100%; height: 20px; text-align: right; }

#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background: #eee; }
#items textarea { width: 80px; height: 50px; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 100%; }
#items td.total-line { border-right: 0; text-align: left; }
#items td.total-value { border-left: 0; padding: 10px; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }

#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
#terms textarea { width: 100%; text-align: center;}



.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }
#meta td{
  border: none;
  }</style>
  

</head>

<body>

  <div id='page-wrap'>

    <textarea id='header'>INVOICE</textarea>
    
    <div id='identity'>
    
            
           
            <p id='address'><img src='http://www.ip-ae.com/assests/img/logo1.png'></p>

    
    </div>
    
    <div id='clears'></div>
    <table><tr><h2 class='ship_to'>Ship to</h2></tr></table>
    
    <div id='customer'>

          
          

            <table id='meta'>
                <tr>
                    <td style='font-weight: bold;'>Order#</td>
                    <td style='font-weight: bold;'>".$address_data['order_number']."</td>
                </tr>
                <tr>

                    <td style='font-weight: bold;'>Order date</td>
                    <td style='font-weight: bold;'>$cur_date</td>
                </tr>
                <tr>
                    <td style='font-weight: bold;'>Order Total</td>
                    <td style='font-weight: bold;'>AED $main_total</td>
                </tr>
                 <tr>
                    <td>Payment Method</td>";
                    if($address_data['payment_method'] == "cod"){
                      $dummy_msg .= "<td>Cash on Delivery</td>";
                    }
                    else{
                      $dummy_msg .= "<td>Online(By Card)</td>";
                    }
                $dummy_msg .= "</tr>
                 
                
            </table>
  
            <table id='meta' style='float: right;width: 320px;'>
  
                <tr>
                    <td style='width: 75px;'>Name</td>
                    <td >".$address_data['shipping_firstname']." ".$address_data['shipping_lastname']."</td>
                </tr>
                <tr>

                    <td >Address</td>
                    <td>".$address_data['shipping_address']." ".$address_data['shipping_city']." - ".$address_data['shipping_state'].", UAE</td>
                </tr>
                <tr>
                    <td >Mobile</td>
                    <td >+971 ".$address_data['shipping_phone']."</td>
                </tr>
                <tr>
                    <td>Delivery Method</td>
             
                   <td>".$address_data['delivery_method']."</td>
                   
                </tr>
            </table>
    
    </div>
    
    <table id='items'>
    
      <tr>
          <th>S.no.</th>
          <th>Product Name</th>
          <th>Unit Cost</th>
          <th>Quantity</th>
          <th>Price</th>
      </tr>";
      $counter = 1;
      $grand_total = 0;
      $ship = 0;
      $subtotal_total = 0;
        foreach ($this->cart->contents() as $row )
        {
              $price = $row['price'];
              $qty = $row['qty'];
              $subtotal = $qty*$price;
              $ship += $qty;
              $dummy_msg .= "<tr class='item-row'>
                   <td>$counter</td>
                   <td class='item-name'>".$row['name']."</td>
                   <td>$price AED</td>
                   <td>$qty</td>
                   ";
                  
                   $dummy_msg .= "<td><span class='price'>$subtotal AED</span></td>
                   
              </tr>";
              $counter++;
              $grand_total += $subtotal; 
              $subtotal_total += $subtotal;
        } 
     
      
      $dummy_msg .= "<tr id='hiderow'>
        <td colspan='5'></td>
      </tr>
      
      <tr>
          <td colspan='2' class='blank'> </td>
          <td colspan='2' class='total-line'>Subtotal</td>
          <td class='total-value'><div id='subtotal'>$subtotal_total AED</div></td>
      </tr>";
      if($address_data['payment_method'] == 'cod'){
          $dummy_msg .= "<tr>

          <td colspan='2' class='blank'> </td>
          <td colspan='2' class='total-line'>Shipping Fess</td>
          <td class='total-value'><div id='total'>$ship AED</div></td>
          </tr>";
      }
           if($address_data['payment_method'] == 'cod'){
              $grand_total = $grand_total + $shipping;
            }
  
                               
      $dummy_msg .= "
      <tr>
          <td colspan='2' class='blank'> </td>
          <td colspan='2' class='total-line balance'>Grand total</td>
          <td class='total-value balance'><div class='due'>$grand_total AED</div></td>
      </tr>
    
    </table>
    
    <!-- <div id='terms'>
      <h5>Terms</h5>
      <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
    </div>
   -->
  </div>
  
</body>

</html>";
   


                    $subject = "Order Placed";
                    
                     $this->load->library('email', $config);
                     $this->email->set_newline("\r\n");
                     $this->email->from('customers@ip-ae.com');
                     $this->email->to($email);
                     $this->email->subject($subject);
                     $this->email->message($dummy_msg);
                     $this->email->send();

                     $this->cart->destroy();
                    // $this->session->set_flashdata('success','Your order has been placed successfully');
                     $this->session->set_userdata('order_response','Your order has been placed successfully');

                
           }
           else{
              //$this->session->set_flashdata('error','Order cancelled');
                 $this->session->set_userdata('order_response','Order cancelled');
           }
           redirect('ipae/response');
         }
  
     


}

            function response()
             {
               //echo "success"; exit();
              
                   $this->load->view("payment-response");
             }


//checkout login

public function checkoutRegistration(){

          $Contact=$this->input->post("Contact");
          $username=$this->input->post("username");
          $result=$this->Ipae_model->Check($username);
          //echo $result; exit();
          $veri_code = random_string("alnum",10);

          if($result)
          {

          $data = 'Username allready exist. Try to new username !!. ';
          //echo $data;
          $this->session->set_flashdata("error",$data);
          redirect(base_url("ipae/checkoutLogin"));


          }
          else
          {

          $data=(object)array(

          "name"=>$this->input->post("name"),
          "mid_name"=>$this->input->post("m_name"),
          "last_name"=>$this->input->post("l_name"),
          "Contact"=>$this->input->post("Contact"),
          "username"=>$this->input->post("username"),
          "password"=>md5($this->input->post("password")),
          "verification_code"=>$veri_code
          );
          $result=$this->Ipae_model->insertData($table="ipae_customers",$data);
          if($result)
          {
          /*email start-------------------------------------------*/ 
           $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'info.ipaecom@gmail.com',// your mail name
            'smtp_pass' => 'ipaecom2017',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1',
            'wordwrap' => TRUE
            );  

       
        $config['crlf'] = '\r\n';       
        $config['newline'] = '\r\n';    
          $subject="Account Verification mail!!";
          $message="<p>Dear User,</p><p>Please click on click here!  to verify your Email Address</p>
          <p><a href='".base_url()."ipae/checkVerification/".$veri_code."'>click here!!</a></p>";
          $this->email->initialize($config);
          $this->email->set_newline("\r\n");
          $this->email->from('customers@ip-ae.com','iP-AE');
          $this->email->to($username);
          $this->email->subject($subject);
          $this->email->message($message);
          $this->email->send();
          /*email end-------------------------------------------*/ 
          $data = 'Thanks for Connecting us. We have sent a verification code to your email. Please click it to verify your account';
          //echo $data;
          $this->session->set_flashdata("success",$data);
          redirect(base_url("ipae/checkoutLogin"));
          }
          }



      }
public function checkVerification($value)
{
  if($value){
    $result=$this->Ipae_model->varificationString($value);
    if($result)
    {
      $this->db->where("verification_code",$value);
      $this->db->update("ipae_customers",array("verification_code"=>'','status'=>1));
      $session_data=array(
                  'id'=>$result['id'],
                  'name'=>$result['name'],
                  'username'=>$result['username'],
                  'login'=>TRUE
                  );

      //echo "<pre>"; print_r($session_data); exit();
      $this->session->set_userdata("logged_in",$session_data);
      $this->session->set_flashdata("success","Your account is verified successfully.");
      redirect('welcome/User_Profile');
    }
    else{
      redirect(base_url());
    }
  }
  
}

public function checkoutlogin2()
  {

    $username=$this->input->post("username");
    $data=(object)array(

                "username"=>$this->input->post("username"),
                "password"=>md5($this->input->post("password"))


              );
    //print_r($data); exit();
    $result=$this->Ipae_model->check_admin_login($data);
    if($result==true)
    {
      //echo "hi"; exit();

      $result=$this->Ipae_model->admin_info($username);
            
            if($result){
                $session_data=array(
                  'id'=>$result[0]->id,
                  'name'=>$result[0]->name,
                  'username'=>$result[0]->username,
                  'login'=>TRUE
                  );

        //echo "<pre>"; print_r($session_data); exit();
        $this->session->set_userdata("logged_in",$session_data);
        $url=$this->session->userdata("url");
        //echo $url; exit();
        redirect($url);
            }
            else{
                $data = 'Your account is not verified. please verify it by clickin the link in your email';
                //echo $data;
              $this->session->set_flashdata("error",$data);
              redirect("ipae/checkoutLogin");
            }

    }
    else
    {
          $data = 'Wrong entry!!!!. ';
                //echo $data;
              $this->session->set_flashdata("error",$data);
              redirect("ipae/checkoutLogin");

    }
  }


public function checkout_order_list()
        { 
          $date= date('Y-m-d H:i:s'); 
          $day=date('Y-m-d');
       
          $firstName2 = $this->input->post('firstName2');
          $lastName2 = $this->input->post('lastName2');
          $address2 = $this->input->post('address2');
          $city2 = $this->input->post('city2');
          $stateid2 = $this->input->post('stateid2');
          $phone2 = $this->input->post('phone2');
          $email2 = $this->input->post('email2');
          $suite2 = $this->input->post('suite2');

          $subtotal=$this->input->post('price');
          $id=$this->input->post('id');
          $total=$this->input->post('price');
          $mobile=$this->input->post('order_contact');

          $payment_method=$this->input->post('payment_method');
          $delivery_method=$this->input->post('delivery_method');

           
          $nameorder=substr($firstName2,0,4);
          $nameorder = strtoupper($nameorder);
           
           $this->db->select('count_orders');
           $this->db->from('ipae_customer_order_items');
           $this->db->limit(1);
           $this->db->order_by('id DESC');
           $get_count_id = $this->db->get()->row_array();

           if(empty($get_count_id)){
           
            $num = "000001";
           }
           else{
            
            $num =  str_pad($get_count_id['count_orders'] + 1, 6, '0', STR_PAD_LEFT);
           }
         
           $a = $num.$nameorder;
          $monu['o_id']=$a;

          $tx_id = "TX-".random_string('alnum',10);    
               $shipping = 0;
               $main_total = 0;              
              foreach ($this->cart->contents() as $row )
                {
                    $price=$row['price'];
                    $qty=$row['qty'];
                    $subtotal=($qty*$price);
                  
                   if($payment_method == 'cod'){

                    $shipping += $qty; 
                  }
                  
                  $main_total += $subtotal;
                  if($payment_method != 'cod'){
                       $data_order[] = array(
                      'order_number'   =>$a,    
                      'customer_id'    => 0,
                      'customer_name'  => $firstName2." ".$lastName2,
                      'order_date'     =>$date,
                       'order_day'     =>$day,
                      'order_status'   => 1,
                      'transaction_id'   => $tx_id,
                      'id'     =>$row['id'],
                      'product_name'   =>$row['name'],
                      'order_quantity' =>$qty,
                      /* 'product_size'  =>$row['size'],*/
                      'product_image'  =>$row['img'],
                      'price'          =>$price,
                      'subtotal'       =>$subtotal,
                      'payment_method' => $payment_method,
                      'delivery_method' =>$delivery_method,
                      'shipping_address_id' => 0,
                      'shipping_firstname' =>  $firstName2,
                      'shipping_lastname' => $lastName2,
                      'shipping_address' => $address2,
                      'shipping_email' => $email2,
                      'shipping_phone' => $phone2,
                      'shipping_country' => 'UAE',
                      'shipping_city' => $city2,
                      'shipping_state' => $stateid2,
                      'shipping_pincode' => '',
                      'total'          =>$row['price'],
                      'count_orders'   => $num,
                      'shipping_suite'   => $suite2
                        );
                  }
                  else{
                      $data_order[] = array(
                      'order_number'   =>$a,    
                      'customer_id'    => 0,
                      'customer_name'  => $firstName2." ".$lastName2,
                      'order_date'     =>$date,
                       'order_day'     =>$day,
                       'order_status'   => 1,
                      'message'   => "Order successfully",
                      'id'     =>$row['id'],
                      'product_name'   =>$row['name'],
                      'order_quantity' =>$qty,
                      /* 'product_size'  =>$row['size'],*/
                      'product_image'  =>$row['img'],
                      'price'          =>$price,
                      'subtotal'       =>$subtotal,
                      'payment_method' => $payment_method,
                      'delivery_method' =>$delivery_method,
                      'shipping_address_id' => 0,
                      'shipping_firstname' =>  $firstName2,
                      'shipping_lastname' => $lastName2,
                      'shipping_address' => $address2,
                      'shipping_email' => $email2,
                      'shipping_phone' => $phone2,
                      'shipping_country' => 'UAE',
                      'shipping_city' => $city2,
                      'shipping_pincode' => '',
                      'shipping_state' => $stateid2,
                      'total'          =>$row['price'],
                      'count_orders'   => $num,
                      'shipping_suite'   => $suite2
                        );
                  }

                 
                } 

               // print_r($data_order); die;
                
                $length=count($data_order);
                //echo $length; die;
                $i=0;
                if($payment_method == 'Card'){
                    for($i=0; $i<$length;$i++)
                    {
                      $result=$this->Ipae_model->insert_order_item($data_order[$i]);
                    }
                    $this->session->set_userdata('orderDetails', $data_order);
                   $secretHash="8EBEC413A31C660DB322E226DDA6035E";
                    $accessCode='98F5167E';
                   $merchantId='300305';  
                  if($delivery_method == '1-day-delivery'){
                    $main_total = $main_total + 50;
                  }
                  else{
                    $main_total = $main_total;
                  }
                 //echo $main_total; die;


                    $data = array(
                        "vpc_AccessCode" => $accessCode,
                        "vpc_Amount" => $main_total*100,
                        "vpc_Command" => 'pay',
                        "vpc_Locale" => 'en',
                        "vpc_MerchTxnRef" =>  $tx_id,
                        "vpc_Merchant" => $merchantId,
                        "vpc_OrderInfo" => "Order_N_".time(),
                        "vpc_ReturnURL" => base_url()."ipae/payment_response",
                        "vpc_Version" => '1',
                        'vpc_SecureHashType' => 'SHA256'    
                    );

                    ksort($data);
                    $hash = null;
                    foreach ($data as $k => $v) {
                        if (in_array($k, array('vpc_SecureHash', 'vpc_SecureHashType'))) {
                            continue;
                        }
                        if ((strlen($v) > 0) && ((substr($k, 0, 4)=="vpc_") || (substr($k, 0, 5) =="user_"))) {
                            $hash .= $k . "=" . $v . "&";
                        }
                    }
                    $hash = rtrim($hash, "&");

                    $secureHash = strtoupper(hash_hmac('SHA256', $hash, pack('H*', $secretHash)));
                    $paraFinale = array_merge($data, array('vpc_SecureHash' => $secureHash));
                    $actionurl = 'https://migs.mastercard.com.au/vpcpay?'.http_build_query($paraFinale);
                    //echo $actionurl; die;
                    //print_r($actionurl);
                    redirect('https://migs.mastercard.com.au/vpcpay?'.http_build_query($paraFinale));
                   // header("Location:".$actionurl);
                    /*exit();*/
                    //$this->payment_success();
                }
                else{
                 
                  for($i=0; $i<$length;$i++)
                  {
                    $result=$this->Ipae_model->insert_order_item($data_order[$i]);
                  }

                }
                // print_r($this->session->userdata('orderDetails')); die;
                if($result)
                  {

                    //update stock of product
                    foreach ($this->cart->contents() as $row )
                    {
                      $pid = $row['id'];
                      $qty = $row['qty'];
                      $updateProduct = $this->Ipae_model->updateProductStock($pid,$qty,'minus');
                      
                    }
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';

                      /*  $config = Array(
                         //'useragent'=>'codeigniter'
                        'protocol' =>'smtp',
                        'smtp_host' =>'ssl://smtp.googlemail.com',
                        'smtp_port' =>465,
                        'smtp_user' =>'fibsotest@gmail.com',
                        'smtp_pass' =>'babita363',
                        'mailtype' =>'html',
                        'charset' =>'iso-8859-1',
                        'wordwrap' => TRUE
                       );
*/
                   




             $message = "<html>
                           <head>
                            <style>

                            .tum {
                                    
                                    border:2px solid black;

                                }

                                .topheader
                                {
                                  height:50px;
                                  width:100%;
                                  background-color:black;
                                  color:white;
                                }
                                table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
                           </head>
                               <body class='tum'>
                               <div class='topheader' ><img src='http://www.ip-ae.com/assests/img/logo1.png' style='
    margin: 15px 0px 0px 15px;
' width='100'>Contact number:9717943955</div>
                               <div class='invoice-box'>
 <h2 style='text-align:center'>Invoice</h2>
 <h4 style='text-align:center'>Order Id: $a</h4>

                           
                            <p><b>Shipping Address:</b> </p>
                            <span>".$firstName2." ".$lastName2."</span><br/>
                            <span>".$address2."</span><br/>
                            <span>".$city2."- ".$stateid2.", UAE</span><br/>
                            <br/>
                        <h3>Order Details</h3>
                      
                              <table style='border:1px solid black;' cellpadding='0' cellspacing='0' >
                              
                                  <tr class='top'>
                                     <th>S.no</th>
                                     <th>Product Name</th>
                                     <th>Quantity</th>
                                     <th>Unit Price(AED)</th>";
                                     
                                     
                                     $message .= "
                                     <th>Sub Total(AED)</th>
                                     <th>Payment Method</th> 
                                  </tr>
                              
                               ";
                               $counter = 1;
                               $grand_total = 0;
                               $ship = 0;
                              foreach ($this->cart->contents() as $row )
                              {
                                    $price = $row['price'];
                                    $qty = $row['qty'];
                                    $subtotal = $qty*$price;
                                    $ship += $qty;
                                    $message .= "<tr class='information'>
                                         <td>$counter</td>
                                         <td>".$row['name']."</td>
                                         <td>$qty</td>
                                         <td>$price</td>";
                                       
                                         $message .= "<td>$subtotal</td>
                                         <td>$payment_method</td>
                                    </tr>";
                                    $counter++;
                                    $grand_total += $subtotal; 
                              } 

                              if($payment_method == 'cod' && $delivery_method == '1-day-delivery'){
                                $grand_total = $grand_total + $shipping + 50;
                              }
                              elseif($payment_method == 'cod' && $delivery_method == '48-hours-delivery'){
                                $grand_total = $grand_total + $shipping;
                              }
                              elseif($payment_method == 'Card' && $delivery_method == '48-hours-delivery'){
                                $grand_total = $grand_total;
                              }
                              else{
                                $grand_total = $grand_total + 50;
                              }
                                        
                               $message .= "</table>
                               <br/>
                               <p>Delivery Method : ".$delivery_method."</p>";
                                if($payment_method == 'cod'){
                                $message .= "<p>Total Shipping Rate: AED ".$ship."</p>";
                              }
                              if($delivery_method == '1-day-delivery'){
                                $message .= "<p>Delivery Rate: AED 50.00</p>";
                              }

                              $message .= "<b style='text-align:right'> Grand Total: AED $grand_total</b>
                       
                        </div>   

                         <div style='
    text-align: center;
    background-color: #000000;
    color: white;
    padding-top: 21px;
    margin-bottom: 2px;
'>
                         
                          Office No.303,Ali Rashid Alabbar Al Marar, Deire,P.O Box:1272,Dubai-U.A.E Email:namangeneraltradingllc@gmail.com Contact:+971544629333
                          <br>
                       


                         </div>  

                               </body>
                           </head>
                    </html>"; 

                   

            //  echo $message; exit();      


                    $subject = "Order Placed";
                  
                     $this->load->library('email', $config);
                     $this->email->set_newline("\r\n");
                     $this->email->from('customers@ip-ae.com');
                     $this->email->to($email2);
                     $this->email->subject($subject);
                     $this->email->message($message);
                     $this->email->send();

                     $this->cart->destroy();
                     $this->session->set_flashdata('success','Your order has been placed successfully');
                     redirect(base_url("welcome/thanku"));
                     //$this->load->view("thanku",$monu);


                  }
                else{
                
                      $this->session->set_flashdata('error','Your order has not been placed successfully');
                     redirect(base_url("welcome/thanku"));
                 }

        
       
      }
public function sendOTP()
{
      $address_id=$this->input->post('address_id');
      $this->db->select('contact');
      $this->db->where('id',$address_id);
      $query=$this->db->get('ipae_customer_address');
      $customer_contact="971".$query->row()->contact;
      $otp=$this->genratorOtp();
      $this->session->set_userdata('otp',$otp);
      $msg="Your iP-AE one time password is $otp";
      $res=sendSms($customer_contact,$msg);
      echo  'success';
}

public function verifiedOtp()
{
    $address_id=$this->input->post('address_id');
    $otp=$this->input->post('otp');

    if($otp== $this->session->userdata('otp'))
    {
      $data=array(
        'otp_status'=>1);
    $this->db->where('id',$address_id);
    $this->db->update('ipae_customer_address',$data);
    echo "success";
    }
    else{
      echo "Failed  to verified contact number.";
    }
}



  public function genratorOtp()
  {
     
     $otp = rand(1000,9999);
     return $otp;

  }    


}

