<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function __construct() 
      {
       parent::__construct();
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
        header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		 

       $this->load->model("Ipae_model");
       $this->load->library("session");
        $this->load->library('upload');
        $this->load->library('facebook');
        $this->load->library('cart');
        $this->load->library('email');
        $this->load->helper("string");
        $this->load->helper("general_helper");

      }
     function b2b()
         {
      	$this->load->view("b2b_user");
         }

    function ios()
         {
      	   $this->load->view("ios");
         }

    function event()
        {
      	   $this->load->view("event");
        }

    function Legal()
         {
      	$this->load->view("legal");
         }
	
	public function index()
	{

		$result['slider']=$this->Ipae_model->getDataByPriority($table="ipae_slider",$clmname="priority");
		$this->load->view('index',$result);
	}


	function Contact_Us()
	{      
        $result['subject']=$this->Ipae_model->getData($table="ipae_subject");
		$this->load->view('contact-us',$result);
	}

	function About_Us()
	{
		$this->load->view('about-us');
	}

	

	function Term_Condition()
	{
		$this->load->view('terms-condition');
	}

		function emailverification()
	{
		$this->load->view('emailverification');
	}


	function Iphone()
	{
		$this->load->view('iphone');
	}

	function PageNotFound()
	{
		$this->load->view('404');
	}

	function accesseries()
	{
		$this->load->view("accesseries");
	}

	public function subcate_page($slug)
	{

		 $this->db->where('cat_slug',$slug);
         $categoryDetail = $this->db->get('ipae_category')->row_array();
         $id = $categoryDetail['id'];
         $title = $categoryDetail['category_name'];
         $result['Banner']=$categoryDetail['cat_icon_img'];
          $result['title']=$title;
         if(!$id){
         	redirect('404_override');
         }
		$result['subcat']=$this->Ipae_model->getDatabyIdseq($table="ipae_subcategory",$fname="cat_id",$id);
		//echo $this->db->last_query();
		$this->load->view("iphone",$result);
	}
	public function Contact_Us_Mailer()
	{
	
 		$name=$this->input->post("name");
		$email=$this->input->post("email"); 
		$contact=$this->input->post("mobile"); 
		$subject=$this->input->post("subject");
 		$message=$this->input->post("message");
 		
 		
 		
 			 
				
				
 		if(!empty($_FILES['resume']['name']))
 		{
                $config['upload_path'] = 'Ipae_image/careers/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|doc|txt';
                $config['file_name'] = $_FILES['resume']['name'];
                //$config['max_size'] = '1000';       
					$this->upload->initialize($config);
					// Upload file 1
					if ($this->upload->do_upload('resume'))
					{
					$data = $this->upload->data();
					$one=$data['file_name'];
					$path='Ipae_image/careers/';
					$path_one= $path.''.$one;
					$resume=$one;
					    
					}
					else
					{
					 $dataerror= $this->upload->display_errors();
			      	$this->session->set_flashdata("error",$dataerror);
			      	redirect("contact-us");
					}
					
 		}
 		
					
				 



 		$data=array(
 					'name'=>$name,
 					'email'=>$email,
 					'contact'=>$contact,
 					'subject'=>$subject,
 					'message'=>$message
 					
 					);

        if(!empty($_FILES['resume']['name']))
 		{
 		$data['attachment']= base_url().'Ipae_image/careers/'.$resume;
 		$result=$this->Ipae_model->insertData($table="ipae_contact_us",$data);	
 		}
 		else{
 		$result=$this->Ipae_model->insertData($table="ipae_contact_us",$data);	
 		}
 		if($result)
 		{
			 /* for send mail*/

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

        $data['login_url']=base_url()."Login";
        
       $message=$this->load->view('emails/contact-us',$data,TRUE); 
       $this->email->initialize($config);
        $this->email->from($email);
       $this->email->to('info@ip-ae.com');
       $this->email->subject($subject);
       $this->email->message($message);
       if($this->email->send())
       {
          $data = 'Thanks for your request. Our Concern department will contact you soon.';
         
       	$this->session->set_flashdata("success",$data);
       	redirect("contact-us");

       }
       else
       {

         $data = 'Oops something not going good. Please try again. ';
          //echo $data;
       	$this->session->set_flashdata("error",$data);
       	redirect("contact-us");
       }
   }
   else
   {

 		$data = 'Oops something not going good. Please try again.';
       	$this->session->set_flashdata("error",$data);
       	redirect("contact-us");

   }


   

	}


	public function Registration()
			{
					//echo "hi";  exit();

				$Contact=$this->input->post("Contact");
				$country=$this->input->post("country");
				$username=$this->input->post("username");


				$result=$this->Ipae_model->Check($username);
				
				

				//echo $result; exit();

                                $veri_code = random_string("alnum",10);

				if($result)
				{

					$data = 'Email Id already exist. Try to new Email Id. ';
			          //echo $data;
			       	$this->session->set_flashdata("error",$data);
			       	redirect(base_url("Login"));


				}
			else
				{
$otp=rand(1000,9999);

				$data=(object)array(

								"name"=>ucfirst(strtolower($this->input->post("name"))),
								"mid_name"=>ucfirst(strtolower($this->input->post("m_name"))),
								"last_name"=>ucfirst(strtolower($this->input->post("l_name"))),
								"Contact"=>$this->input->post("Contact"),
								"username"=>$this->input->post("username"),
									"country"=>$this->input->post("country"),	"otp"=>$otp,
								"password"=>md5($this->input->post("password")),
                                "verification_code"=>$veri_code
							);
				$username=$this->input->post("username");
				$result=$this->Ipae_model->insertData($table="ipae_customers",$data);
				

				if($result)
				{
				$result=$this->Ipae_model->CheckUserName($username);

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

				    $subject="Account Verification mail!!";
				    $emaildata['username']=ucfirst(strtolower($this->input->post("name")))." ".ucfirst(strtolower($this->input->post("m_name")))." " .ucfirst(strtolower($this->input->post("l_name")));
				      $emaildata['url_veri_code']=base_url()."welcome/checkVerification/".$veri_code;
				      $message=$this->load->view('emails/sign_up',$emaildata,TRUE);	
				       $this->email->initialize($config);
				       $this->email->set_newline("\r\n");
				       $this->email->from('customers@ip-ae.com','Ip-AE');
				       $this->email->to($username);
				       $this->email->subject($subject);
				       $this->email->message($message);
				       $this->email->send();
     

					$data = 'Thank you for signing up. To complete your registration  please click on the verification link sent on your registered email id.';
			         
			         
			         
			         
			         
			        if($country=="91")
			        {
			         
			         $mobile_number="91".$Contact;  
			        }
			        else
			        
			        {
			         $mobile_number="971".$Contact;  
			        }
			        
$m="Hello ".ucfirst(strtolower($result['name'])) ." ".ucfirst(strtolower($result['mid_name']))." ".ucfirst(strtolower($result['last_name'])).",  your mobile verification code is : ".$otp;
$m=urlencode($m);                                                        
$sender="iP ae com";
$sender=urlencode($sender); 
$url="http://api.rmlconnect.net/bulksms/bulksms?username=Ipaeuaecom&password=q1w2e3r4&type=0&dlr=1&destination=".$mobile_number."&source=".$sender."&message=".$m;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
/*********************************************START    By Divy Singhal 16-09-2017 **********/
            $sms_log_array=array();
            $sms_log_array['customer_id']=$result['id'];
			$sms_log_array['message']=$m;
			$sms_log_array['mobile_number']=$mobile_number;
			$sms_log_array['customer_name']=ucfirst(strtolower($result['name'])) ." ".ucfirst(strtolower($result['mid_name']))." ".ucfirst(strtolower($result['last_name']));
			$sms_log_array['origin']='Registration';
			
			$this->Ipae_model->insertData('ipae_sms_logs',$sms_log_array);
/*********************************************End    By Divy Singhal 16-09-2017 **********/
			       	$this->session->set_flashdata("success",$data);
			      	redirect(base_url("Login"));
				}
			}



			}


 public function checkotp($value)
{
    $sess = $this->session->userdata("verified");
   		  	$otp=$this->input->post("otp");

   if($otp)
	{
	       $result=$this->Ipae_model->varificationotp($otp,$sess);
 	      	if($result!="0")
		{
		     
		    $this->db->where("verification_code",$sess);
		    $this->db->where("otp",$otp);

			$this->db->update("ipae_customers",array("otp"=>'','status'=>1,'otp_counter'=>0));
		//	echo $this->db->last_query();
			$session_data=array(
									'id'=>$result['id'],
									'name'=>ucfirst(strtolower($result['name'])) ." ".ucfirst(strtolower($result['mid_name']))." ".ucfirst(strtolower($result['last_name'])) ,
									'username'=>$result['username'],
									'contact'=>$result['contact'],
									'login'=>TRUE
									);
							 	$this->session->set_userdata("logged_in",$session_data);
			
			redirect('welcome/User_Profile');

		}
		else
		
		{
		$data['error'] = 'OTP not match. Please try again. ';
 		$this->session->set_flashdata("error",$data);
 		$this->load->view('emailverification',$data);

		}
	}else
		
		{
		$data['error'] = 'Please fill OTP.';
 		$this->session->set_flashdata("error",$data);
 		$this->load->view('emailverification',$data);

		}
	
}







     public function checkVerification($value)
{
    
$this->session->set_userdata("verified", $value);


if($value)
	{
		$result=$this->Ipae_model->varificationString($value);
		
		if($result)
		{
		    
		    
		 //   echo "<pre>";
		   // print_r($result);
		    
		    
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

      $subject="Welcome  to IP-AE.com";
      $emaildata['username']=$result['username'];
      $emaildata['name']=$result['name'];
      $emaildata['login_url']=base_url()."Login";
      $message=$this->load->view('emails/welcome_emails',$emaildata,TRUE);	       
        
       $this->email->initialize($config);
				       $this->email->set_newline("\r\n");
				       $this->email->from('customers@ip-ae.com','Ip-AE');
				       $this->email->to($username);
				       $this->email->subject($subject);
				       $this->email->message($message);
				       $this->email->send();
       
       
       
		  //bth not active  
		if($result['email_active']=='0' && $result['otp']!='')
		{  
		$this->db->where("verification_code",$value);
		$this->db->update("ipae_customers",array("email_active"=>'1','status'=>0));
			
			
		
       
       	$this->load->view('emailverification');

			
	 	$this->session->set_userdata("logged_in",$session_data);
			$this->session->set_flashdata("success","Email verified successfully! Please verify your mobile.");

		}
		
		 //email active but otp not verified
		 if($result['email_active']=='1' && $result['otp']!='')
		 {
		  $this->load->view('emailverification');

			
	 	    $this->session->set_userdata("logged_in",$session_data);
			$this->session->set_flashdata("success","Please verify your mobile.");   
		 }

	if($result['email_active']=='1' && $result['otp']=='')
		 {
				redirect("Login");


			
	 	    $this->session->set_userdata("logged_in",$session_data);
			$this->session->set_flashdata("success","Your account is verified. Please login.");   
		 }
 		
		}
		 
	 
	}
	
}







	function login_Registration()
	{
		$this->load->view('login');
	}




function login()
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
			
			$result=$this->Ipae_model->admin_info($username);
            if($result){
                $session_data=array(
									'id'=>$result[0]->id,
									'name'=>$result[0]->name,
									'midName'=>$result[0]->mid_name,
									'lastName'=>$result[0]->last_name,
									'contact'=>$result[0]->contact,
									'username'=>$result[0]->username,
									'login'=>TRUE
									);

				//echo "<pre>"; print_r($session_data); exit();
				$this->session->set_userdata("logged_in",$session_data);
				$url=$this->session->userdata("url");
                  redirect($url);
				
				
            }
            else{
                $data = 'Your account is not verified. please verify it by clickin the link in your email';
			          //echo $data;
			       	$this->session->set_flashdata("error",$data);
			       	redirect("Login");
            }

		}
		else
		{
					$data = 'Username or Password is wrong. Please try again.';
			          //echo $data;
			       	$this->session->set_flashdata("error",$data);
			       	redirect("Login");

		}
	}








	function logout()
	{
		if(isset($this->session->userdata['logged_in']))
		{
		$session_data=array(
									'id'=>'',
									'name'=>'',
									'username'=>'',
									'login'=>FALSE
									);

		$this->session->sess_destroy();
		//$this->session->unset_userdata("logged_in",$session_data);
		redirect("Login");

		}
	}





public function forget_password()
{ 
        //echo "hi"; exit();
	$this->load->view('Forget-Password');
}


public function ForgetPassword()
{
	$email=$this->input->post("email");
	$result=$this->Ipae_model->CheckEmailId($email);
	if($result)
	{
		
		$password=random_string('numeric',7);
		$md5password=md5($password);
		$data=array('password'=>$md5password);
		$this->Ipae_model->updateData($table="ipae_customers",$fname="username",$id="$email",$data);
		$this->load->library('email');
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


        /* for send mail*/
      $emaildata['name']=$result->name;
      $emaildata['username']=$email;
      $emaildata['password']=$password;
      $emaildata['login_url']=base_url()."Login";
      $subject="Reset Password";
      
      
       $message=$this->load->view('emails/forgot_password',$emaildata,TRUE);
       $this->email->initialize($config);
       $this->email->set_newline("\r\n");
       $this->email->from('customers@ip-ae.com','iP-AE');
       $this->email->to($email);
       $this->email->subject($subject);
       $this->email->message($message);

        $this->load->library('encrypt');
       if($this->email->send())
       {
          $data = 'New Password has been sent to your email id.';
           	$this->session->set_flashdata("success",$data);
			redirect(base_url("forget-password"));

       }
       else
       {
        $data = "Mail Not sent.";
        $this->session->set_flashdata("error",$data);
        redirect(base_url("forget-password"));

       }

        
	}
	else
	{

					$data = 'Given email id is not registered, Please signup.';
			        
			       	$this->session->set_flashdata("error",$data);
			       	redirect(base_url("forget-password"));



	}

}


public function cancelOrder($o_id){
    $orderDetail = $this->Ipae_model->getOrderDetailsByorderId($o_id);
    
    $this->db->where('order_id',$orderDetail['order_number']);
    $cart_product = $this->db->get('ipae_cart_product');
    $products=$cart_product->result_array();
    $status['order_status'] = 3;
    for($i=0;$i<count($products);$i++){
    		 $quantity=$products[$i]['product_quantity'];
    	 	$product_id=$products[$i]['product_id'];
  	   		$this->db->query("update ipae_product set stock =stock+$quantity where id='$product_id'");
  	   		$inventory_data=array(
  	   			'product_id' =>$product_id,
  	   			'quantity'=>$quantity,
  	   			'mode'=>1,
  	   			'mode_details'=>4,
  	   			'datetime'=>date('Y-m-d h:i:s')
  	   		 );
  	   		$this->db->insert('ipae_inventory',$inventory_data);
  	   		 
  	   }
  	  
  	   
  	   $emaildata['products']= $products;
  	   $emaildata['total_amt']= $orderDetail['total_amt'];
  	   $emaildata['order_id']= $orderDetail['order_number'];
  	   $emaildata['payment_method']= $orderDetail['payment_method'];
  	   
  	   $emaildata['username']= $this->session->userdata('logged_in')['name'].' '.$this->session->userdata('logged_in')['lastName'];
  	   

  	   $message=$this->load->view('emails/order_cancel',$emaildata,TRUE);


    $changeOrder = $this->Ipae_model->changeOrderStatus($o_id,$status);

    if($changeOrder){
  	   


      // $this->db->where('id',$pid);
       //$result = $this->db->get('ipae_product');
       // $pid = $orderDetail['id'];
    	//$qty = $orderDetail['order_quantity'];

    	//$updateProduct = $this->Ipae_model->updateProductStock($products,'plus');

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
		   
    	 //$message = "Your Order of ".$orderDetail['product_name']. " has been cancelled.";

    		$message=$this->load->view('emails/order_cancel',$emaildata,TRUE);
    	           $subject = "Order Cancellation #".$orderDetail['order_number'];
                   $email = $this->session->userdata['logged_in']['username'];
                    $this->email->initialize($config);
                    $this->email->set_newline("\r\n");
                     
                     $this->email->from('customers@ip-ae.com','iP-AE');
                     $this->email->to($email);
                     $this->email->subject($subject);
                     $this->email->message($message);
                     $this->email->send();
               $this->session->set_flashdata('success','Order has been cancelled successfully.');
    }
    redirect('welcome/User_Profile');
}

 public function User_Profile()
		{

			if($this->session->userdata("logged_in"))
			{
				$id=$this->session->userdata['logged_in']['id'];
				$result['userdata']=$this->Ipae_model->getDatabyId($table='ipae_customers',$fname='id',$id);
				$orderDetails = $this->Ipae_model->getOrderDetailsBycustomerId($id);
				$result['orderDetails'] = $orderDetails;
				$this->load->view('user-profile',$result);
			}
			//$this->load->view("user-profile");
		}

		public function userUpdate()
		{
			$id=$this->session->userdata['logged_in']['id'];

		 		 if (!empty($_FILES['img']['name']))
				{
					$config['upload_path'] = 'Ipae_image/userProfilePic/';
					$config['allowed_types'] = 'gif|jpg|png';
					//$config['max_size'] = '1000';       
					$this->upload->initialize($config);
					// Upload file 1
					if ($this->upload->do_upload('img'))
					{
					$data = $this->upload->data();
					$one=$data['file_name'];
					$path='Ipae_image/userProfilePic/';
					$path_one= $path.''.$one;
					}
					else
					{
					  echo $this->upload->display_errors();
					    
					}
				}
				else
				{
				  $one=$this->input->post("pic_name");
				  $path_one=$this->input->post("pic_path");
				}


			$data=array(

						'name'=>$this->input->post("name"),
						'mid_name'=>$this->input->post("mid_name"),
						'last_name'=>$this->input->post("last_name"),
						'username'=>$this->input->post("email"),
						'contact'=>$this->input->post("mobile"),
						'address'=>$this->input->post("address"),
						'dob'=>$this->input->post("dob"),
						'gender'=>$this->input->post("gender"),
						'pic_name'=> $one,
						'pic_path'=>$path_one

						);
				//echo "<pre>"; print_r($data); exit();
			$result=$this->Ipae_model->updateData($table="ipae_customers",$fname='id',$id,$data);
			if($result)
			{
				//$this->User_Profile();
				$this->session->set_flashdata("msg","You have successfully updated your profile!");
				redirect("welcome/User_Profile");
			}
			else
			{	$this->session->set_flashdata("msg","Plz try again!");
				redirect("welcome/User_Profile");
			}
		}


		function changePassword()
		{
			//echo "yes"; exit();
			if($this->session->userdata("logged_in"))
			{
				$id=$this->session->userdata["logged_in"]['id'];
			}

			$old=md5($this->input->post("oldpassword"));
			$new=md5($this->input->post("newpassword"));
			$result=$this->Ipae_model->checkopldpassword($old);
			if($result==TRUE)
			{	
				//echo "hi"; exit();

			/* $data=array('password',$new);*/

				$result=$this->Ipae_model->updateDataPassword($table="ipae_customers",$fname='id',$id,$new);
				if($result==TRUE)
				{
					$this->session->set_flashdata("msg","Your password is successfully updated!");
					redirect("welcome/User_Profile");
				}
				else
				{
					$this->session->set_flashdata("msg1","Your password is  not  updated! Please try again !");
					redirect("welcome/User_Profile");
				}
			}
			else
			{
					$this->session->set_flashdata("msg1","Your Old password does not match. please enter the correct old!");
					redirect("welcome/User_Profile");
			}
		}

function Details()
		{
			$this->load->view("product-detail24");
		}

	function thanku()
	{
		$this->load->view('thanku');
	}





    function Shorting()
	    {
	    	
	    	$id=$this->input->post('id'); 
	        $subcatId=$this->input->post('subcatId'); 
	    	$result['product']=$this->Ipae_model->getDataASC($table="product",$ascCol="product_price",$id,$subcatId);
	    	json_encode($this->load->view("short-product",$result));
	    	
	    }

 function search_list()
	    {
	    	//echo "hi"; exit();
	    	$search_keyword=$this->input->post("search_keyword");
	    	$this->db->like("peoduct_name",$search_keyword,"both");
	    	$data['product']=$this->db->get("product")->result();
            json_encode($this->load->view("short-product",$data));
	    }
	    
	    
	    

function tech_speces($tech)
 {
 	//echo $tech; exit();

 	if($tech === 'iphone-7')
 	{
       $this->load->view('TechSpecs');
 	}

 	if($tech === 'iphone-7-plus')
 	{
      $this->load->view('TechSpecs');
 	}

 	if($tech === 'iphone-6s')
 	{
       $this->load->view('techspecs6s');
 	}

 	if($tech === 'iphone-se')
 	{
       $this->load->view('TechSpecsSe');
 	}
 	
 	if($tech === 'iphone-6')
 	{
       $this->load->view('techspecs6s');
 	}
if($tech === 'iphone-x')
 	{
       $this->load->view('techspecesx');
 	}

 	if($tech === 'iphone-8')
 	{
       $this->load->view('techspeces8');
 	}
 	
 	if($tech === 'iphone-8-plus')
 	{
       $this->load->view('techspeces8');
 	}
 }

 public function refund_policy()
 {
 	$this->load->view('Refund-policy');
 }

 public function cancel_policy()
 {
 	$this->load->view('cancellationpolicy');
 }
 public function privacy_policy()
 {
 	$this->load->view('privacy-policy');
 }
 public function faqs()
 {
 	$this->load->view('faqs');
 }
public function doa(){
	$this->load->view('doa');
}
 public function warranty()
{
	$this->load->view('warranty');
}
public function sale_support()
{
	$this->load->view('aftersalessupport');
}
public function submit_support_form(){

		 $this->load->helper(array('form', 'url'));
		 $this->load->library('form_validation');
		$data['imei']=$this->input->post('imei');
		$data['serial_number']=$this->input->post('serial_number');
		$data['model_number']=$this->input->post('model_number');
		$data['order_id']=$this->input->post('order_id');
		$data['name']=$this->input->post('name');
		$data['contact_number']=$this->input->post('country').$this->input->post('contact_number');
		$data['email_id']=$this->input->post('email_id');
		$data['issue_per_unit']=$this->input->post('issue_per_unit');
		$data['status']=1;
		$data['datetime']=date('Y-m-d h:i:s');

		 $this->form_validation->set_rules('imei', 'IMEI', 'required|numeric|trim');
		 $this->form_validation->set_rules('serial_number', 'Serial Number', 'required|alpha_numeric' );
		 $this->form_validation->set_rules('model_number', 'Model Number', 'required|alpha_numeric');
		 $this->form_validation->set_rules('order_id', 'Invoice No', 'required|alpha_numeric');
		 $this->form_validation->set_rules('name', 'Name', 'required|alpha');
		 $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|numeric');
		 $this->form_validation->set_rules('email_id', 'Email Id', 'required');
		 $this->form_validation->set_rules('issue_per_unit', 'issue_per_unit', 'required');
		         if ($this->form_validation->run() == FALSE){
                        $this->load->view('aftersalessupport');
                }
                else
                {
                        
				if($this->db->insert('ipae_support',$data))
				{
				$this->session->set_flashdata('message', 'Your Query has been save successfully.');
				}
				else{
				$this->session->set_flashdata('message', 'Your Query could not save.Please try some time');
				}
				redirect(base_url('welcome/sale_support'));
                }







}



//resend otp process
 public function resendotp($value)
{
    $sess = $this->session->userdata("verified");
   	$otp=rand(1000,9999);
    //echo $otp;exit;
   $sms_log_array=array();
   if($otp!='' && $sess!='')
	{       $result=$this->Ipae_model->varificationresendotp($sess);
            
	        $this->db->where("verification_code",$sess);
			$this->db->where("otp_counter <=",3);
			$this->db->set("otp_counter",$result['otp_counter']+1);
			$this->db->set("status",0);
			$this->db->set("otp",$otp);
			$this->db->update("ipae_customers");
			

			//echo $this->db->last_query();exit;
		
			if($result['otp_counter']<=3){
			if($country=="91")
			        {
			         
			         $mobile_number="91".$result['contact'];  
			        }
			        else
			        
			        {
			         $mobile_number="971".$result['contact']; 
			        }
			        
$m="Hello ".ucfirst(strtolower($result['name'])) ." ".ucfirst(strtolower($result['mid_name']))." ".ucfirst(strtolower($result['last_name'])).",  your mobile verification code is : ".$otp;
$m=urlencode($m);                                                        
$sender="iP ae com";
$sender=urlencode($sender); 
$url="http://api.rmlconnect.net/bulksms/bulksms?username=Ipaeuaecom&password=q1w2e3r4&type=0&dlr=1&destination=".$mobile_number."&source=".$sender."&message=".$m;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
            $sms_log_array['customer_id']=$result['id'];
			$sms_log_array['message']=$m;
			$sms_log_array['mobile_number']=$mobile_number;
			$sms_log_array['customer_name']=ucfirst(strtolower($result['name'])) ." ".ucfirst(strtolower($result['mid_name']))." ".ucfirst(strtolower($result['last_name']));
			$sms_log_array['origin']='Resend OTP';
			
			$this->Ipae_model->insertData('ipae_sms_logs',$sms_log_array);
			
			redirect("welcome/checkVerification/".$sess);	
			}else{
				$this->session->set_flashdata("error","Only 3 attempt are allowed for OTP!");	
		  redirect("welcome/checkVerification/".$sess);	
			}
			 

	}else{
		$this->session->set_flashdata("error","You are not a verified user.!");
		$this->load->view('emailverification');
	}
	
}

public function orderdetails($order_id)
 {  
    $result['content']=$this->Ipae_model->getOrderDetailsByOrderNumber($order_id);
	
 	$this->load->view('orderview',$result);
 }
 
  //emirates
 
  
public function getcity($id)
 {  
     $result=$this->Ipae_model->getAllcity($id);
	 foreach($result as $each){ ?>
        <option value="<?php echo $each->id; ?>"><?php echo $each->cityname; ?></option> 
    <?php }  
    }


}

