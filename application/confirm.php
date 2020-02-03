<?php 

ob_start();
require_once("include/class.login.inc.php");
$login = new Login('users');
if($login->isUserLoggedIn() != true) 
{    
header('location:index.php?not');
}


require_once("include/class.order.php");
 
    $tm = $_POST['status'];

  $id = $_POST['pdo'];

  $track = $_POST['trackcode'];
  $trackmember = $_POST['trackmember'];




$tablename ="customer_order_items";
$obj_user = new Orders($tablename);
$chk_class= $obj_user->call_to_class();

$row_edit = $obj_user->getrecordtoedit($id, $tablename);


//print_r($row_edit);
@extract($row_edit);
 $row_user = $obj_user->UserDetails($customer_id);
 $row_user_address = $obj_user->UserDetailsAddess($shipping_address_id);
//print_r($row_user_address);

 
$ord_Item=$obj_user->OrderItem($order_number);
 $ord_Pay=$obj_user->PaymentDetails($order_number);
$cup=$obj_user->CouponCode($ord_discount_code);


for($po1=0;$po1<count($ord_Item);$po1++)
{
$obj_user->TrackingAdd($tm,$ord_Item[$po1]['order_id'],$track);
}

$amt= 'AED '.$ord_Pay[0]['total_amt']; 
$cr='AED'; 

for($po=0;$po<count($ord_Item);$po++)
{
$prd=$obj_user->ProductDetails($ord_Item[$po]['product_id']);


 

$live_price='AED '. $prd[0]['product_price'];

$iinnr=$prd[0]['product_price']; 
 
$sale_price='AED '.$iinnr;
$subt=$iinnr*$ord_Item[$po]['product_quantity'];
$subtotal=$subtotal+$subt;
$cp_code=$subtotal*$cup[0]['coupen_discount']/100;
 
 
$subtt=  'AED '.$subt; 

$poo=$po+1;
$pd.='<tr style="text-align:center">
    <td   style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$poo.'</td>
    <td   style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.ucfirst($prd[0]['product_name']).'</td>
    <td   style="align:center;background:#fff;  font-size: 11px;padding:5px;"><img src=http://www.ip-ae.com'.ucfirst($prd[0]['product_image1']).' style="width:50px; height:50px"></td>
    <td  style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$ord_Item[$po]['product_quantity'].'</td>
    <td  style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$live_price.'</td>
     <td  style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$subtt.'</td>    
  </tr>';
}
$pd=$pd;
$sc=$subtotal-$cp_code; 
 
$scc= 'AED '.$sc; 
$cp_codee='AED '.$cp_code;


if($cup[0]['coupen_discount']!='')
{
$rowspan='3';
}
else
{
$rowspan='2';
}



   
   
$pd3='<tr>
    <td colspan="2"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">'.$cup[0]['coupen_discount'].' % discount using Coupon Code : '.$cup[0]['coupen_code'].'</td>
    <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">'.$cp_codee.'</td>
  </tr>';
  
  $shipcharge="0";
  $codcharges=$total_amt-$subtotal;
   if($payment_method=='1')
 {
 $paymeth="Card/Online";
 
 
   $pd2=' 
<tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;"> Shipping Charge</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '.$shipcharge.'</td>
   </tr>
  
  <tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">Sub Total</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '.$subtotal.'</td>
   </tr>
    <tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">VAT</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED 0</td>
   </tr>';
   
   
 }
 else
 {
 $paymeth="COD";
 
 
   $pd2=' <tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;"> Cash on Delivery Charge</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '.$codcharges.'</td>
   </tr>
<tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;"> Shipping Charge</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '.$shipcharge.'</td>
   </tr>
  
  <tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">Sub Total</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED '.$subtotal.'</td>
   </tr>
    <tr>
      <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">VAT</td>
     <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">AED 0</td>
   </tr>';
 
 }
 

   
   
   
$pd4='<tr>
    <td colspan="4"  align="right" style="align:center;background:#fff;  font-size: 11px;padding:5px;">Grand Total</td>
    <td colspan="1"  align="right" style="align:center;background:#fff;  font-size: 13px;padding:5px;">'.$total_amt.'</td>
  </tr>';


if($cup[0]['coupen_discount']!='')
{
$pd3=$pd3;	
}
else
{
$pd3='';	
}


$tbl = '<table width="100%" border="0" cellspacing="0" cellpadding="5" style="mar0; padding:0;border-collapse: collapse;">
   <tr style="text-align:center">
    <td width="12%" style="background:#eeeeee;  font-size: 12px;padding:5px;">S.No	</td>
    <td width="27%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Product Name	</td>
    <td width="27%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Product Image	</td>
    <td width="10%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Quantity</td>
    <td width="17%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Unit Price	</td>
     <td width="15%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Total</td>
  </tr>  
  '.$pd.' 
   <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  
  '.$pd2.'
  '.$pd3.'
  '.$pd4.'  
</table>';

$trackmember;
$sql=mysql_query("select * from  ". _DB_PREFIX."users  where id='".$trackmember."'");
$r=mysql_fetch_array($sql);
$shipmembername=$r['name'];

 
if($tm=='2')
{
$val='5';
$log="Order #".$order_number." has been confirmed by ".$_SESSION['user_name'].". Customer notified on ".$username;
$sql=mysql_query("update ". _DB_PREFIX."customer_order_items set order_status='2' where order_number='".$order_number."'");
			
$sql=mysql_query("insert into  ". _DB_PREFIX."customer_order_log(id,loginid,orderid,status,message,deleveryuserid,ipaddress,orderprevious,datetime) values
                                                                ('','".$_SESSION[ib_uid]."','$order_number','2','$log','',".$_SERVER[REMOTE_ADDR]."','',NOW())");
 				
}
else if($tm=='5')
{
$val='6';	


$log="Order #".$order_number." has been shipped by ".$_SESSION['user_name'].". Shipping ID : ".$track." and Shipment send by ".$shipmembername.". Customer notified on ".$username;
$sql=mysql_query("update ". _DB_PREFIX."customer_order_items set order_status='5',shipmentid='$track',shipby='$trackmember' where order_number='".$order_number."'");
			
$sql=mysql_query("insert into  ". _DB_PREFIX."customer_order_log(id,loginid,orderid,status,message,deleveryuserid,ipaddress,orderprevious,datetime) values
                                                                ('','".$_SESSION[ib_uid]."','$order_number','5','$log','',".$_SERVER[REMOTE_ADDR]."','',NOW())");
 
 
 
}
else if($tm=='6')
{
$val='13';	



$log="Order #".$order_number." has been deliverd successfully. updated  by ".$_SESSION['user_name'].". Shipping ID : ".$track." and Shipment send by ".$shipmembername.". Customer notified on ".$username;
$sql=mysql_query("update ". _DB_PREFIX."customer_order_items set order_status='6'  where order_number='".$order_number."'");
			
$sql=mysql_query("insert into  ". _DB_PREFIX."customer_order_log(id,loginid,orderid,status,message,deleveryuserid,ipaddress,orderprevious,datetime) values   ('','".$_SESSION[ib_uid]."','$order_number','6','$log','$trackmember',".$_SERVER[REMOTE_ADDR]."','',NOW())");
 
 
 
 
}
else if($tm=='4')
{
$val='8';	




$log="Order #".$order_number." has been cancelled  by ".$_SESSION['user_name'].". Customer notified on ".$username;
$sql=mysql_query("update ". _DB_PREFIX."customer_order_items set order_status='4' where order_number='".$order_number."'");
			
$sql=mysql_query("insert into  ". _DB_PREFIX."customer_order_log(id,loginid,orderid,status,message,deleveryuserid,ipaddress,orderprevious,datetime) values('','".$_SESSION[ib_uid]."','$order_number','4','$username','$log','".$_SERVER[REMOTE_ADDR]."','',NOW())");
 
 
 
 
}

$BillAddress=$row_user[0]['billadd1'].', '.$row_user[0]['billadd2'].', '.$row_user[0]['billcity'].', '.$row_user[0]['billstate'].', '.$row_user[0]['billcountry'].', Zip Code - '.$row_user[0]['billzip'].' <br> Phone : '.$row_user[0]['phone'].' <br> Email : '.$row_user[0]['email'];

$ShipAddress =$row_user_address[0]['full_address'].', '.$row_user_address[0]['city'].', '.$row_user_address[0]['suit'].', '.$row_user[0]['zone_id'].' <br> Phone : '.$row_user_address[0]['contact'].' <br> Email : '.$row_user_address[0]['email_id'];

 $message = $obj_user->Template($val);
  $subject=$message[0]['email_temp_name'] ." #".$order_number;
 $order_date=datetime_convert($order_date);


 
 $message = html_entity_decode($message[0]['email_format']);
$message = str_replace('##{ship_track_code_type}##',stripslashes('Store Recognized by the carrier'),$message);
$message = str_replace('##{tracking_num}##',stripslashes($track),$message);
$message = str_replace('##{user_f_name}##',stripslashes($row_user[0]['name']),$message);
$message = str_replace('##{user_l_name}##',stripslashes($row_user[0]['last_name']),$message); 
$message = str_replace('##{bill_f_name}##',$row_user_address[0]['firstName'],$message);
$message = str_replace('##{bill_l_name}##',$row_user_address[0]['lastName'],$message);
$message = str_replace('##{bill_address}##',$BillAddress,$message);
$message = str_replace('##{ship_f_name}##',$row_user[0]['name'],$message);
$message = str_replace('##{ship_l_name}##',$row_user[0]['last_name'],$message);
$message = str_replace('##{ship_address}##',$ShipAddress,$message);
$message = str_replace('##{order_details}##',$tbl,$message);
$message = str_replace('##{order_number}##',$order_number,$message);
$message = str_replace('##{order_method}##',$paymeth,$message);
$message = str_replace('##{datetime}##',$order_date,$message);

   $message;

  $mail=$row_user[0]['username'];
$from='customers@ip-ae.com';
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header.='From: www.ip-ae.com <'.$from.'>' . "\r\n"; 

 mail($mail,$subject,$message,$header);


 echo  $msg="This information has been sent to registered email id.";

?>