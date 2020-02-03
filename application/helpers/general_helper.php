<?php
if(!function_exists('getproductstock')){
    function getproductstock($id){
     $CI =& get_instance();
     $CI->db->select('stock');
     $CI->db->where('id',$id);
     $result = $CI->db->get('ipae_product');
     return $result->row_array();
    }
}


if(!function_exists('getAddressDetailsById')){
    function getAddressDetailsById($id){

     $CI =& get_instance();
     
     $CI->db->where('id',$id);
     $result = $CI->db->get('ipae_customer_address');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}
//start  the block send the sms when the place order.
if(!function_exists('sendSms')){
    
     function sendSms($mobile_number,$msg,$country){
		$sender=array();
		$sender['971']="iP ae com";
		$sender['91']="TESTSM";
      //  $url="http://api.rmlconnect.net/bulksms/bulksms?username=Ipaeuaecom&password=q1w2e3r4&type=0&dlr=1&destination=$mobile_number&source=".$sender."&message=".urlencode($msg);
        
           
       // $sms_status=file_get_contents($url);
        
        
$m=urlencode($msg);                                                        

$senderID=urlencode($sender[$country]); 
$url="http://api.rmlconnect.net/bulksms/bulksms?username=Ipaeuaecom&password=q1w2e3r4&type=0&dlr=1&destination=".$mobile_number."&source=".$senderID."&message=".$m;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

        
           $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Attempt: ".$url.PHP_EOL.
            "Result: ".$server_output.PHP_EOL.
             "-------------------------".PHP_EOL;
    //-
    file_put_contents('../log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);

        
        
        
        
        return $sms_status;
    }
}

//end the block send the sms when the place order.



if(!function_exists('getCountryById')){
    function getCountryById($id){

     $CI =& get_instance();
     
     $CI->db->where('country_id',$id);
     $result = $CI->db->get('ipae_country');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}

if(!function_exists('getCityById')){
    function getCityById($id){

     $CI =& get_instance();
     
     $CI->db->where('zone_id',$id);
     $result = $CI->db->get('ipae_zone');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}

if(!function_exists('modifyString')){
 
function modifyString($string){
    $arr = array(' ','$','&',',',')','(','}','{');
 $modified = str_replace($arr,'-',$string);

 return $modified;
}

}


if(!function_exists('getCatNameFromCatId')){
    function getCatNameFromCatId($id){

     $CI =& get_instance();
     
     $CI->db->where('id',$id);
     $result = $CI->db->get('ipae_category');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}

if(!function_exists('gesubCatNameFromCatId')){
    function gesubCatNameFromCatId($id){

     $CI =& get_instance();
     
     $CI->db->where('id',$id);
     $result = $CI->db->get('ipae_subcategory');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}



if(!function_exists('getDetailByTranId')){
    function getDetailByTranId($tid){

     $CI =& get_instance();
     
     $CI->db->where('transaction_id',$tid);
     $result = $CI->db->get('ipae_customer_order_items');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}


if(!function_exists('getProductReviews')){
    function getProductReviews($pid){

     $CI =& get_instance();
     
     $CI->db->where('p_id',$pid);

     $result = $CI->db->get('ipae_rate_review');
    // echo "dd".$CI->db->last_query(); die;
     return $result->result_array();
    }
}


if(!function_exists('getProductRating')){
    function getProductRating($pid){

    $CI =& get_instance();

    $query = $CI->db->query("SELECT avg(rating) as avg from ipae_rate_review where p_id=$pid");

    $result = $query->row_array();

    return $result;
    
    }
}



if(!function_exists('getUserInfoByUid')){
    function getUserInfoByUid($uid){

     $CI =& get_instance();
     
     $CI->db->where('id',$uid);
     $result = $CI->db->get('ipae_customers');
    // echo "dd".$CI->db->last_query(); die;
     return $result->row_array();
    }
}

if(!function_exists('getStockMessage')){
    function getStockMessage($stock){
if($stock<0)
{
    $stock="0";
}
     $CI =& get_instance();
     $CI->db->select('message');

     $CI->db->where('stock',$stock);
     
     $result = $CI->db->get('ipae_product_stock_message');
   
     if($result->num_rows()){
        return $result->row_array();
     }
     else{
         $CI->db->select('max(stock) as s1');
        
         $result2 = $CI->db->get('ipae_product_stock_message')->row_array();
         
         $CI->db->select('message');
         $CI->db->where('stock',$result2['s1']);
         $result3 = $CI->db->get('ipae_product_stock_message');
         return $result3->row_array();
     }

     
    }
}
	if(!function_exists('getUserCountryIdByUid')){
    function getUserCountryIdByUid($uid){

     $CI =& get_instance();
     $CI->db->select('country');
     $CI->db->where('id',$uid);
     $result = $CI->db->get('ipae_customers');
     $row=$result->row_array();
     return $row['country'];
    }
	
	if(!function_exists('getproductdetail')){
    function getproductdetail($id){
     $CI =& get_instance();
     $CI->db->select('launchdate');
     $CI->db->where('id',$id);
     $result = $CI->db->get('ipae_product');
     return $result->row_array();
    }
   }
}
