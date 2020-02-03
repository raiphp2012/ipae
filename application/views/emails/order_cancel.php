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
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Hello <?php echo $username; ?>,</td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> <br><br></td>
</tr>
<tr>
<td align="center"><br><br><strong  style="font-family: Verdana; font-size: 14px; color: #4d4d4d;">Thank you for placing an order with us. Unfortunately, we are unable to fulfill your order at this time. Refunds are issued in the original method of payment and will appear on your statement within 3 to 5 business days.</strong></td>
</tr>
<tr>
<td height="15"  style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> <br><br></td>
</tr>
<tr>
<td>
</td>
</tr> 
<tr>
<td align="center">
<strong  style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">We look forward to seeing you again soon. Hopefully, we'll make it up to you the next time!</strong>
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
<td style="font-family: Verdana; font-size: 13px; color: #4d4d4d;" colspan="2"><strong>The following item(s) has been processed for a refund:</strong><br><br></td>
</tr>
 
<tr>
<td style="font-family: Verdana; font-size: 11px; color: #4d4d4d;" colspan="2">
	<table width="100%" cellspacing="0" cellpadding="5" border="0">
   <tbody><tr style="text-align:center">
    <td style="background:#eeeeee;font-size:12px;padding:5px" width="10%">S.No	</td>
    <td style="background:#eeeeee;font-size:12px;padding:5px" width="27%">Product Name	</td>
    <td style="background:#eeeeee;font-size:12px;padding:5px" width="27%">Product Image	</td>
    <td style="background:#eeeeee;font-size:12px;padding:5px" width="10%">Quantity</td>
    <td style="background:#eeeeee;font-size:12px;padding:5px" width="17%">Unit Price</td>
     <td style="background:#eeeeee;font-size:12px;padding:5px" width="17%">Total</td>
  </tr>
  <?php 
  	for($i=0;$i<count($products);$i++){
  		$path=$products[$i]['product_image'];
  ?>  
  <tr style="text-align:center">
    <td style="background:#fff;font-size:11px;padding:5px"><?php echo $i+1;?></td>
    <td style="background:#fff;font-size:11px;padding:5px"><?php echo $products[$i]['product_name'];?>
	
	
	<br><i></i></td>
    <td style="background:#fff;font-size:11px;padding:5px"><img src="<?php echo base_url().$path;?>" style="width:50px;height:50px" class="CToWUd"></td>
    <td style="background:#fff;font-size:11px;padding:5px"><?php echo $products[$i]['product_quantity']; ?></td>
    <td style="background:#fff;font-size:11px;padding:5px">AED <?php echo $products[$i]['price']; ?></td>
     <td style="background:#fff;font-size:11px;padding:5px">AED <?php echo $products[$i]['subtotal']; ?></td>    
  </tr> 
   <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <?php } ?>
	<?php if($payment_method==0){?>  
   <tr>
      <td colspan="4" style="background:#fff;font-size:11px;padding:5px" align="right"> Cash on Delivery Charge</td>
     <td colspan="1" style="background:#fff;font-size:13px;padding:5px" align="right">AED 1</td>
   </tr>
   <?php } ?>
<tr>
      <td colspan="4" style="background:#fff;font-size:11px;padding:5px" align="right"> Shipping Charge</td>
     <td colspan="1" style="background:#fff;font-size:13px;padding:5px" align="right">AED 0</td>
   </tr>
    <tr>
      <td colspan="4" style="background:#fff;font-size:11px;padding:5px" align="right">VAT</td>
     <td colspan="1" style="background:#fff;font-size:13px;padding:5px" align="right">AED 0</td>
   </tr>
  
  <tr>
    <td colspan="4" style="background:#fff;font-size:11px;padding:5px" align="right">Grand Total</td>
    <td colspan="1" style="background:#fff;font-size:13px;padding:5px" align="right"><?php echo $total_amt;?></td>
  </tr>
   
</tbody>
</table>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> </td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"> 
 </td>
</tr>
<tr>
<td height="15"> </td>
</tr>
<tr>
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">We'll forward you tracking information once your order has been shipped.</td>
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
 