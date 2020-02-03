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
<table border="0" cellspacing="0" cellpadding="0">
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
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;" colspan="2">'.$address_data[full_address].'<br> Phone : '.$address_data[contact].' <br> 
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
    <td width="27%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Product Image	</td>
    <td width="8%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Quantity</td>
    <td width="17%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Unit Price  </td>
     <td width="17%" style="background:#eeeeee;  font-size: 12px;padding:5px;">Total</td>
  </tr>'. 
  
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
              ?>
              <tr style="text-align:center" class="productlist">
                    <td  style="align:center;background:#fff;  font-size: 11px;padding:5px;"><?php echo $counter; ?></td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">'.$row[name].'</td>
                       <td   style="align:center;background:#fff;  font-size: 11px;padding:5px;"><img src=http://www.ip-ae.com'.$row[img].' style="width:50px; height:50px"></td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">'.$qty.'</td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;"> AED '.$price .'</td>
                   <td style="background:#fff;  font-size: 11px;padding:5px;">AED '.$subtotal.' </td>
            </tr>
            <?php
              $counter++;
              $grand_total += $subtotal; 
              $subtotal_total += $subtotal;
        } 
        ?>
     <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
      if($payment_method == 'cod'){
         <tr>
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
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br><br>We at iP-ae.com are professionals with experience in Smart Phone and e-commerce industries, more importantly we are aware consumers like you who have gathered all the good and bad experiences in procuring iPhones for six straight years. This is our attempt to distill all the good experiences and bring a smile to your face when you buy one. </td>
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
</tbody>
</table>
 </div>