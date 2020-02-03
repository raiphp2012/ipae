<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
 function __construct() 
	{
	parent::__construct();
	$this->load->model('Ip_model');
	$this->load->library('upload');
	$this->load->library('session');
	$this->load->library('form_validation');
	
	/*if (!isset($this->session->userdata['logged_in']))
	{
	redirect(base_url());
	}*/

	}

	public function index()
	{
	 $this->load->view('login');
	}

	public function registration()
	{
	 $this->load->view('form');
	}

	public function dashboard()
	{

	if (isset($this->session->userdata['logged_in']))
	{

	$data['slider']=$this->ip_model->getData($table='slider');
		$admin=count($this->Ip_model->count($table="admin"));
		$data['admin']=$admin;

		$customer=count($this->Ip_model->count($table="users"));
		$data['customer']=$customer;

		$category=count($this->Ip_model->count($table="category"));
		$data['category']=$category;

		$subcategory=count($this->Ip_model->count($table="subcategory"));
		$data['subcategory']=$subcategory;

		$Inquery=count($this->Ip_model->count($table="contact_us"));
		$data['Inquery']=$Inquery;

		$order=count($this->Ip_model->count($table="customer_order_items"));
		$data['order']=$order;
		//echo $admin; exit();
	$this->load->view('dashboard',$data);
	}
	else
	{
	 redirect(base_url());
	}
	}


	function login()
	{ 
	 //echo "raj"; exit();
		$pass=md5($this->input->post('password'));
		//$pass2=$This->md5($pass);
	$data= (object)array(
	'name'=>$this->input->post('name'),
	'password'=>$pass,
	
	);
	//print_r($data); exit();
	$result=$this->ip_model->check_admin_login($data);
	//print_r($result);exit();
	if($result==true)
	{ 
	$name=$this->input->post('name');
	$result=$this->ip_model->admin_info($name);
	if($result)
	{
	$session_data = array(
	'admin_id'=>$result[0]->id,
	'name' => $result[0]->name,
	'email' => $result[0]->email,           
	'login' => true
	);
	//print_r($session_data); exit();
	$this->session->set_userdata('logged_in',$session_data);
	redirect(base_url().'welcome/dashboard');
	//echo $email ;
	//echo $name ;
	echo 1;
	exit(); 
	}

	}
	else
	{
		$this->session->set_flashdata('msg', 'user name or Password invalid');
        redirect(base_url());
	//echo 0; 
	exit();
	}
	}


	function logout()
	{
	if(isset($this->session->userdata['logged_in']) )
	{
	$session_data = array(
	'name' => '',
	'email' => '',
	'login' => false
	);
	session_destroy();
	$this->session->unset_userdata('logged_in',$session_data);
	//$data['message_display']='Successfully Logout';
	redirect(base_url());
	}
	}


	public function AddAdmin()
	{
	//echo 'welcome to registration '; exit();

	$name=$this->input->post('name');
	$phone=$this->input->post('mbl');
	$email=$this->input->post('email');
	$password=md5($this->input->post('password'));
	$result=$this->ip_model->check_data($email);
	if($result)
	{
	$this->session->set_flashdata('msg', 'User allready exit');
	redirect('welcome/registration');
	}
	else
	{

	$data= array(
	'name'=>$name,
	'mobile_number'=>$phone,
	'email'=>$email,
	'password'=>$password
	);
	//echo '<pre>';print_r($data);echo '</pre>'; exit();
	$result=$this->ip_model->insertData($table='admin',$data);
	if($result)
	{

	$this->session->set_flashdata('msg', 'User Register Sucessfully');
	redirect('welcome/registration');
	//redirect(base_url('welcome/login/'));
	}
	else{
	//echo 0;
	//exit();
	$this->session->set_flashdata('msg', 'Registation has been not successfully ');
	redirect('welcome/registration');
	//echo 'Registation has been not successfully  please Enter Correct User Name And Password.';
	}

	}
	}

	  public function admin_list()
	  {
	  $result['admin_list']=$this->ip_model->getData($table='admin'); 
	  //print_r($result);exit(); 
	  $this->load->view('tables',$result);      
	  }




}

