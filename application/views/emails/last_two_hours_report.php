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
<td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">Dear Admin,</td>
</tr>
<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> <br><br></td>
</tr>
<tr>
<td height="15"  style="border-bottom-width: 1px; vertical-align: center; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;">Total No of Order:<?=$total_no_order;?> <br><br></td>
</tr>


<tr>
<td height="25"><br><br> </td>
</tr>
<tr>
<td> </td>
</tr>
 
<tr>
<td ALIGN="CENTER" style="font-family: Verdana; font-size: 12px; color: #4d4d4d;">


<TABLE>
<TR><TD>COD</TD><TD> :</TD><TD><?php echo $cod;?></TD></TR>
 <TR><TD>Card </TD><TD>:</TD><TD><?php echo $card;?></TD></TR>
 <TR><TD>No of Place Order</TD><TD> :</TD><TD><?php echo $placed;?></TD></TR>
 <TR><TD>No of Cancelled Order by Customer </TD><TD>:</TD><TD><?php echo $cancelled_customer;?></TD></TR>
 <TR><TD>No of Cancelled Order by iP-AE</TD><TD> :</TD><TD><?php echo $cancelled_ipae;?></TD></TR>
 <TR><TD>No Of Shipped Order </TD><TD>:</TD><TD><?=$shipped;?></TD></TR>
 <TR><TD>No Of Completed Order </TD><TD>:</TD><TD><?=$delivered;?></TD></TR>
 <br><br>
 <?php 
      if(!empty($product_detail)){
  for($i=0;$i<count($product_detail);$i++)
        {
          if($product_detail[$i]->product_name!=""){
          ?>
          <TR><TD><?=$product_detail[$i]->product_name;?> </TD><TD>:</TD>
          <TD><?=$product_detail[$i]->total_number;?></TD></TR>

<?php

        }
      }
    }
 ?>

</TABLE>
</td>
</tr>
<tr>
<td height="15"> </td>
</tr>

<tr>
<td height="15" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f1f1f1; width: 100%;"> </td>
</tr>

<TR><td style="font-family: Verdana; font-size: 12px; color: #4d4d4d;"><br><br> </td>
</TR>
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
 