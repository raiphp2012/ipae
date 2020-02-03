<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ip_admin extends CI_Controller {
 function __construct() 
	{
	parent::__construct();
	$this->load->model('Ip_model');
	$this->load->library('upload');
	$this->load->library('session');
	$this->load->library('form_validation');
  $this->load->helper("url");
	if (!isset($this->session->userdata['logged_in']))
	{
	redirect(base_url());
	}

   }

   public function slider()
	{
	 $this->load->view('add_slider');
	}

	public function Category()
	{
	 $this->load->view('Add-Category');
	}

	public function Sub_Category()
	
	{
	$result['subcat']=$this->ip_model->getData($table='category');
	//print_r($result); exit();
	$this->load->view('Add-SubCategory',$result);
	}

	public function Product()
	{
    $result['color']=$this->ip_model->getData($table='color');
    $result['storage']=$this->ip_model->getData($table='capacity');
    $result['cat']=$this->ip_model->getData($table='category');
    $result['sucat']=$this->ip_model->getData($table='subcategory');
	 $this->load->view('Add-Product',$result);
	}

    public function Add_Slider()   
    {
   // echo 'add slider';exit();  
   if (!empty($_FILES['img']['name']))
               {
	$config['upload_path'] = '../Ipae_image/slider/';
	$config['allowed_types'] = '*';
	//$config['max_size'] = '1000';       
	$this->upload->initialize($config);
	// Upload file 1
	if ($this->upload->do_upload('img'))
	{
	$data = $this->upload->data();
	$one=$data['file_name'];
	$path='/Ipae_image/slider/';
	$path_one= $path.''.$one;
	}
	else
	{
	  echo $this->upload->display_errors();}
	}
	else
	{
	  $one='';$path_one='';
	}


  $data= array(

  'slider_name'=>$this->input->post("name"),
  'slider_image_path'=>$path_one,
  'priority'=>$this->input->post('priority'),
  'url'=>$this->input->post('url')

  );
 // echo '<pre>';print_r($data);echo '</pre>'; exit(); 
  $result=$this->ip_model->insertData($table='slider',$data);

  //print_r($result);exit();    
  if($result)    
  {
  redirect(base_url('ip_admin/display_slider'));   
  //echo 'data has beeen successfully inserted'; exit();
  }
  }


  public function Add_Category()
  {

  if (!empty($_FILES['icon']['name'])) 
  {
  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon
  if ($this->upload->do_upload('icon'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_one= $path.''.$one;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $one ='';$path_one='';
  }

  //upload file next

  if (!empty($_FILES['iconimg']['name']))
  {
  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon image
  if ($this->upload->do_upload('iconimg'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two ='';$path_two='';
  }


  //file Upload 1
  if (!empty($_FILES['img1']['name']))
  {
  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img1')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three ='';$path_three ='';
  }

  //Upload file  2
  if (!empty($_FILES['img2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  // $config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 2
  if ($this->upload->do_upload('img2'))
  {
  $data = $this->upload->data();
  $four=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_four= $path.''.$four;
  }
  else
  {
  echo $this->upload->display_errors();
  }
  }
  else
  {
  $four='';$path_four='';
  }


  //file Upload 3
  if (!empty($_FILES['img3']['name']))
  {
  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 3
  if ($this->upload->do_upload('img3')) 
  {
  $data = $this->upload->data();
  $five=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_five= $path.''.$five;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $five ='';$path_five ='';
  }

  $cat_name = trim($this->input->post('name'));
  $result = $this->ip_model->checkCategoryName($table="category",$fname="category_name",$cat_name);

  if($result){
    $slug = url_title($cat_name, 'dash', TRUE);
  }
  else{
    $message="Category name allready exist in database.";
    $this->session->set_flashdata("msg",$message);
    redirect("ip_admin/Category");
  }

  $data = array(
  'category_name'=>$cat_name, 
  'banner_name1' =>$three,
  'banner_name2'=>$four,
  'banner_name3'=>$five,
  'cat_icon'=>$path_one,
  'cat_icon_img'=>$path_two,
  'banner_name_path1'=>$path_three,
  'banner_name_path2'=>$path_four,   
  'banner_name_path3'=>$path_five, 
  'cat_slug'=>$slug 
  );
  //echo '<pre>';print_r($data); echo'</pre>'; exit();   
  $result=$this->ip_model->insertData($table ='category',$data); 
  //  echo '<pre>' ;print_r($data); echo'</pre>'; exit();  
  if($result)    
  {
  redirect(base_url('ip_admin/display_Category'));   
  }

  } 



 public function Add_SubCategory()

  {
  	//echo "hello...";exit();
   if (!empty($_FILES['koko']['name']))
               {
	$config['upload_path'] = '../Ipae_image/subcategory/';
	$config['allowed_types'] = '*';
	//$config['max_size'] = '1000';       
	$this->upload->initialize($config);
	// Upload file 1
	if ($this->upload->do_upload('koko'))
	{
	$data = $this->upload->data();
	$one=$data['file_name'];
	$path='/Ipae_image/subcategory';
	$path_one= $path.''.$one;
	}
	else
	{
	  echo $this->upload->display_errors();}
	}
	else
	{
	  $one='';$path_one='';
	}

  //upload file next

  if (!empty($_FILES['img1']['name']))
  {
  $config['upload_path'] = '../Ipae_image/subcategory/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon image
  if ($this->upload->do_upload('img1'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];

  //echo "$two";exit();
  $path='/Ipae_image/subcategory/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two ='';$path_two='';
  }


  //file Upload 1
  if (!empty($_FILES['img2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/subcategory/';
  $config['allowed_types'] = '*';
       
  $this->upload->initialize($config);
 
  if ($this->upload->do_upload('img2')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/subcategory/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three ='';$path_three ='';
  }

$tra=$this->input->post('tra');

  $id=$this->input->post('id');
  $subcat_name=$this->input->post('name');
   $order=$this->input->post('order');



  $result = $this->ip_model->checkCategoryName($table="subcategory",$fname="subcat_name",$subcat_name);

  if($result){
    $slug = url_title($subcat_name, 'dash', TRUE);
  }
  else{
    $message="Category name allready exist in database.";
    $this->session->set_flashdata("msg",$message);
    redirect("ip_admin/Sub_Category");
  }




  $data = array(
  'id'=>$id,
  'tra' => $tra,
  'subcat_name'=>$subcat_name,
  'subcat_icon'=>$one,
  'subcat_icon_path'=>$path_one,
  'subcat_banner1_name' =>$two,
  'subcat_banner2_name'=>$three,
  'subcat_banner1_path'=>$path_two,
  'subcat_banner2_path'=>$path_three,
  'subcat_slug'=>$slug,
  'sequence'=>$order
  );
 //echo '<pre>' ;print_r($data); echo'</pre>'; exit();   
  $result=$this->ip_model->insertData($table ='subcategory',$data); 
  //  echo '<pre>' ;print_r($data); echo'</pre>'; exit();  
  if($result)    
  {
  redirect(base_url('ip_admin/display_SubCategory'));   
  }

  }



  public function Add_Product()
  {



 $peoduct_name=$this->input->post('name');

  $result = $this->ip_model->checkCategoryName($table="product",$fname="peoduct_name",$peoduct_name);
 //echo $result; exit();
  if($result){
    //echo "hi"; exit();
    $slug = url_title($peoduct_name, 'dash', TRUE);
  }
  else{
      //echo "no"; exit();
    $message="Product name allready exist in database.";
    $this->session->set_flashdata("msg",$message);
    redirect("ip_admin/Product");
  }



    //echo "hello product...";exit();
  if (!empty($_FILES['img1']['name'])) 
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon
  if ($this->upload->do_upload('img1'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_one= $path.''.$one;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $one ='';$path_one='';
  }

  //upload file next

  if (!empty($_FILES['img2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon image
  if ($this->upload->do_upload('img2'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two ='';$path_two='';
  }


  //file Upload 1
  if (!empty($_FILES['img3']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img3')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three ='';$path_three ='';
  }


  //file Upload 1
  if (!empty($_FILES['img4']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img4')) 
  {
  $data = $this->upload->data();
  $six=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_six= $path.''.$six;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $six ='';$path_six ='';
  }

  //file Upload 5
  if (!empty($_FILES['img5']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img5')) 
  {
  $data = $this->upload->data();
  $seven=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_seven= $path.''.$seven;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $seven ='';$path_seven ='';
  }

  //file Upload 6
  if (!empty($_FILES['img6']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img6')) 
  {
  $data = $this->upload->data();
  $eight=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_eight= $path.''.$eight;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $eight ='';$path_eight ='';
  }



  //Upload file  2
  if (!empty($_FILES['banner1']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  // $config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 2
  if ($this->upload->do_upload('banner1'))
  {
  $data = $this->upload->data();
  $four=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_four= $path.''.$four;
  }
  else
  {
  echo $this->upload->display_errors();
  }
  }
  else
  {
  $four='';$path_four='';
  }


  //file Upload 3
  if (!empty($_FILES['banner2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 3
  if ($this->upload->do_upload('banner2')) 
  {
  $data = $this->upload->data();
  $five=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_five= $path.''.$five;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $five ='';$path_five ='';
  }

  $peoduct_name=$this->input->post('name');
  $Description=$this->input->post('Description');
  $price=$this->input->post('price');
  $id=$this->input->post('id');
  $id=$this->input->post('id');
  $quantity=$this->input->post('Quantity');
  $upc=$this->input->post('upc');
  $ean=$this->input->post('ean'); 
  $tra=$this->input->post('tra'); 
  $part=$this->input->post('part');
  $cat=$this->input->post('id'); 
  $subcat=$this->input->post('subid');
   $order=$this->input->post('order');
   if($order == '')
           {
             $order=0;
           }
  $data = array(
  'peoduct_name'=>$peoduct_name,
  'description'=>$Description,  
  'id'=>$id, 
  'id' =>$id,
  'product_price'=>$price,
  'part_number'=>$part,
  'upc'=>$upc,
  'ean'=>$ean, 
  'tra'=>$tra,
  'product_sequence'=>$order,
  'stock'=>$quantity, 
  'id'=>$cat, 
  'subid'=>$subcat,
  'product_slug'=>$slug,

  'product_image1'=>$path_one,
  'product_image2'=>$path_two,
  'product_image3'=>$path_three,
  'product_image4'=>$path_six,
  'product_banner1'=>$path_four, 
  'product_banner2'=>$path_five,  
  );
 // echo '<pre>';print_r($data); echo'</pre>'; exit();   
  $result=$this->ip_model->insertData($table ='product',$data); 
  //  echo '<pre>' ;print_r($data); echo'</pre>'; exit();  
  if($result)    
  {
  redirect(base_url('ip_admin/display_Product'));   
  }

  } 




  public function display_Category()
	{
	$result['Category']=$this->ip_model->getData($table='category'); 
	//print_r($result);exit();
	$this->load->view('DisplayCategory',$result);      
	}

  public function display_Customers()
  {
  $result['users']=$this->ip_model->getData($table='users'); 
  //print_r($result);exit();
  $this->load->view('DisplaCoustomer',$result);      
  }


  public function display_Order()
  {
  $result['order']=$this->ip_model->getordersData($table='customer_order_items'); 
  //print_r($result);exit();
  $this->load->view('display_order',$result);      
  }


  public function viewOrder($id)
  {
  $result['order']=$this->ip_model->getDataByEditID($table='customer_order_items',$fname='order_number',$id); 
//echo'<pre>'; print_r($result); echo'<pre>';exit();
  $this->load->view('vieworder',$result);      
  }

	public function display_SubCategory()
	{
	$result['SubCategory']=$this->ip_model->getData($table='subcategory'); 
	//print_r($result);exit();
	$this->load->view('DisplaSubCategory',$result);      
	}


  public function display_Product()
  {
  //$result['Product']=$this->ip_model->getData($table='product'); 
  $result['col_cap']=$this->ip_model->getDataDisplayjoing(); 
  //echo '<pre>' ;print_r($result);echo '<pre>' ;exit();
  $this->load->view('DisplayProduct',$result);      
  }


	public function display_slider()
	{
	$result['slider']=$this->ip_model->getData($table='slider'); 
	//print_r($result);exit();
	$this->load->view('Display-Slider',$result);      
	}

  public function update_slider_varify($id)
  {
  $result=$this->ip_model->update_slider_data_varify($table="slider",$clmname="id",$id,$data='1');

  if($result)  
  {
  /*$this->session->set_flashdata('msg','Hotel update succesfully');*/
  redirect(base_url('ip_admin/display_slider')); 
  }
  }


  public  function update_slider_Reject($id)
  {
  //echo $id; exit();
  $result=$this->ip_model->update_slider_data_varify($table="slider",$clmname="id",$id,$data='2');

  if($result)  
  {
  /*$this->session->set_flashdata('msg','Hotel update succesfully');*/
  redirect(base_url('ip_admin/display_slider')); 
  }
  }



public function admin_varify($id)
  {
  $result=$this->ip_model->update_slider_data_varify($table="admin",$clmname="id",$id,$data='1');

  if($result)  
  {
  /*$this->session->set_flashdata('msg','Hotel update succesfully');*/
  redirect(base_url('welcome/admin_list')); 
  }
  }


  public  function admin_Reject($id)
  {
  //echo $id; exit();
  $result=$this->ip_model->update_slider_data_varify($table="admin",$clmname="id",$id,$data='2');

  if($result)  
  {
  /*$this->session->set_flashdata('msg','Hotel update succesfully');*/
  redirect(base_url('welcome/admin_list')); 
  }
  }


	public function display_Contact_Details()
	{
	$result['contact']=$this->ip_model->getData($table='contact_us'); 
	//print_r($result);exit();
	$this->load->view('Contact-Us-Details',$result);      
	}






  public function Admin_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='admin',$fname='id',$id);
  redirect(base_url().'welcome/admin_list');
  }

  public function customer_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='users',$fname='id',$id);
  redirect(base_url().'ip_admin/display_Customers');
  }

  public function Order_Delete()
  {
   // echo "hi";die;
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='customer_order_items',$fname='id',$id);
  redirect(base_url().'ip_admin/display_Order');
  }

  public function Category_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='category',$fname='id',$id);
  $path ='../Ipae_image/category/';
  $files = glob($path.'*'); // get all file names
  foreach($files as $file){ // iterate files
  if(is_file($file))
  unlink($file); // delete file
  redirect(base_url().'ip_admin/display_Category');
  }
    }

  public function SubCategory_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='subcategory',$fname='subid',$id);
  $path ='../Ipae_image/subcategory/';
  $files = glob($path.'*'); // get all file names
  foreach($files as $file){ // iterate files
  if(is_file($file))
  unlink($file); // delete file
  redirect(base_url().'ip_admin/display_SubCategory');
  }
}

  public function Product_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='product',$fname='id',$id);
  $path ='../Ipae_image/product/';
  $files = glob($path.'*'); // get all file names
  foreach($files as $file){ // iterate files
  if(is_file($file))
  unlink($file); // delete file
  redirect(base_url().'ip_admin/display_Product');
  }
}


  function Slider_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='slider',$fname='id',$id);
  $path ='../Ipae_image/slider/';
  $files = glob($path.'*'); // get all file names
  foreach($files as $file){ // iterate files
  if(is_file($file))
  unlink($file); // delete file
  redirect(base_url().'ip_admin/display_slider');
  }
  }

  public function Contact_Delete()
  {
  $id= $this->uri->segment(3);
  $this->ip_model->deleteList($table='contact_us',$fname='id',$id);
  redirect(base_url().'ip_admin/display_Contact_Details');
  }

  


 function update_product()
  {
    //echo "hello product...";exit();

$id=$this->input->post("id");
$result=$this->ip_model->getDataByEditID($table='product',$fname='id',$id);
//print_r($result); die;
    $product_name2 = $result['0']->peoduct_name; 
  //echo $product_name2; 
    $cat_name = trim($this->input->post('name'));
     //echo $cat_name; exit();

    $lower_cat_name = strtolower($cat_name);
    $lower_product_name2 = strtolower($product_name2);
    if($lower_product_name2 != $lower_cat_name)
    {
        //echo "hi"; exit();
        $result = $this->ip_model->checkCategoryName($table="product",$fname="peoduct_name",$cat_name);
           //echo $result; exit();
        if($result){
          $slug = url_title($cat_name, 'dash', TRUE);
        }
        else{
          $message="Product name allready exist in database.";
          $this->session->set_flashdata("msg",$message);
          redirect("ip_admin/Product");
        }
    }
    else{
      if($result[0]->product_slug == ''){
         $slug = url_title($cat_name, 'dash', TRUE);
      }
      else{
         $slug = $result[0]->product_slug;
      }
     
    }




  if (!empty($_FILES['img1']['name'])) 
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon
  if ($this->upload->do_upload('img1'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_one= $path.''.$one;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $one =$this->input->post('img_b');
  $path_one=$this->input->post('img_b');
  }

  //upload file next

  if (!empty($_FILES['img2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon image
  if ($this->upload->do_upload('img2'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two =$this->input->post('img_c');
  $path_two=$this->input->post('img_c');
  }


  //file Upload 1
  if (!empty($_FILES['img3']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img3')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three =$this->input->post('img_d');
  $path_three =$this->input->post('img_d');
  }


  //file Upload 1
  if (!empty($_FILES['img4']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img4')) 
  {
  $data = $this->upload->data();
  $six=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_six= $path.''.$six;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $six =$this->input->post('img_e');
  $path_six =$this->input->post('img_e');
  }


  //Upload file  2
  if (!empty($_FILES['banner1']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  // $config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 2
  if ($this->upload->do_upload('banner1'))
  {
  $data = $this->upload->data();
  $four=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_four= $path.''.$four;
  }
  else
  {
  echo $this->upload->display_errors();
  }
  }
  else
  {
  $four=$this->input->post('img_f');
  $path_four=$this->input->post('img_f');
  }


  //file Upload 3
  if (!empty($_FILES['banner2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/product/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 3
  if ($this->upload->do_upload('banner2')) 
  {
  $data = $this->upload->data();
  $five=$data['file_name'];
  $path='/Ipae_image/product/';
  $path_five= $path.''.$five;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $five =$this->input->post('img_g');
  $path_five =$this->input->post('img_g');
  }


  $id=$this->input->post('id');
  $peoduct_name=$this->input->post('name');
  $Description=$this->input->post('Description');
  $price=$this->input->post('price');
  $id=$this->input->post('id');
  $id=$this->input->post('id');
  $quantity=$this->input->post('Quantity');
  $upc=$this->input->post('upc');
  $ean=$this->input->post('ean'); 
  $tra=$this->input->post('tra'); 
   $order=$this->input->post('order'); 
 if($order == '')
           {
             $order=0;
           }
  $part=$this->input->post('part');
  $cat=$this->input->post('id'); 
  $subcat=$this->input->post('subid');
  $data = array(

  'peoduct_name'=>$peoduct_name,
  'description'=>$Description,  
  'id'=>$id, 
  'id' =>$id,
  'product_price'=>$price,
  'part_number'=>$part,
  'upc'=>$upc,
  'ean'=>$ean, 
  'tra'=>$tra,
  'stock'=>$quantity, 
  'id'=>$cat, 
  'subid'=>$subcat,
  'product_slug'=>$slug,
  'product_sequence'=>$order,

  'product_image1'=>$path_one,
  'product_image2'=>$path_two,
  'product_image3'=>$path_three,
  'product_image4'=>$path_six,
  'product_banner1'=>$path_four, 
  'product_banner2'=>$path_five,  
  );
 //echo '<pre>';print_r($data); echo'</pre>'; exit();   
  $result=$this->ip_model->updateData($table='product',$fname='id',$id,$data);
  if($result)
  {
  redirect(base_url('ip_admin/display_Product'));
  }
  }




  public function Edit_slider($id)
  {
   // echo "rajanish";exit();
  //echo $id; exit();
  $result['slider']=$this->ip_model->getDataByEditID($table='slider',$fname='id',$id);
   // echo '<pre>'; print_r($result); echo'<pre>'; exit();
  $this->load->view('edit_slider',$result);  
  } 

  function update_slider()
  {
$priority = $this->input->post('priority'); 
if($priority == ''){
$priority = 0;
}
    // echo 'edit slider';exit();  
   if (!empty($_FILES['img']['name']))
               {
  $config['upload_path'] = '../Ipae_image/slider/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('img'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/slider/';
  $path_one= $path.''.$one;
  }
  else
  {
    echo $this->upload->display_errors();}
  }
  else
  {
    $one=$this->input->post('a');
    $path_one=$this->input->post('aa');
  }

  $id=$this->input->post("id");

  $data= array(
  
  'slider_name'=>$this->input->post("name"),
  'slider_image_path'=>$path_one,
 'priority'=>$priority,
 'url'=>$this->input->post('url')
  );
 //echo '<pre>';print_r($data);echo '</pre>'; exit();
  $result=$this->ip_model->updateData($table='slider',$fname='id',$id,$data);
  if($result)
  {
  redirect(base_url('ip_admin/display_slider'));
  }
  }





  public function Edit_product($id)
  {
    //echo "edit product enter..";exit();
   $result['color']=$this->ip_model->getData($table='color');
    $result['storage']=$this->ip_model->getData($table='capacity');
    $result['cat']=$this->ip_model->getData($table='category');
   $result['sucat']=$this->ip_model->getData($table='subcategory');
    $result['product']=$this->ip_model->getDataDisplayjoing_monu($id);

   //echo "<pre>"; print_r($result);echo "<pre>";exit();
    $this->load->view('edit-product',$result);
  }

  public function Edit_admin($id)
  {
   // echo "rajanish";exit();
  //echo $id; exit();
  $result['admin']=$this->ip_model->getDataByEditID($table='admin',$fname='id',$id);
  //echo '<pre>'; print_r($result); echo'<pre>'; exit();
  $this->load->view('edit_admin',$result);  
  } 

  function update_admin()
  {
 //echo 'welcome to registration '; exit();

  $name=$this->input->post('name');
  $id=$this->input->post('id');
  //$phone=$this->input->post('contact');
  $email=$this->input->post('email');
  $mbl=$this->input->post('mbl');
  $password=$this->input->post('password');
  $result=$this->ip_model->check_data($email);

  $data= array(
  'name'=>$name,
  'mobile_number'=>$mbl,
  'id'=>$id,
  'email'=>$email,
  'password'=>$password,
  );
 //echo '<pre>';print_r($data);echo '</pre>'; exit();
  $result=$this->ip_model->updateData($table='admin',$fname='id',$id,$data);
  if($result)
  {
  redirect(base_url('welcome/admin_list'));
  }
  }



  public function Edit_cat($id)
  {
  //echo $id;
  $result['editcat']=$this->ip_model->getDataByEditID($table='category',$fname='id',$id);
 // echo '<pre>'; print_r($result); echo'<pre>'; exit();
  $this->load->view('edit_category',$result);  
  }

  public function Edit_subcat($id)
  {
  //echo $id;
  $result['cat']=$this->ip_model->getData($table='category');
  $result['editcat']=$this->ip_model->getDataDisplayjoing_sub($id);
// echo '<pre>'; print_r($result); echo'<pre>'; exit();
  $this->load->view('edit-SubCategory',$result); 
  }





  function update_cat()
  {


    $id=$this->input->post('id');

    $result=$this->ip_model->getDataByEditID($table='category',$fname='id',$id);

    $cat_name2 = $result['0']->category_name; 
    $cat_name = trim($this->input->post('name'));
    $cat_name_lower = strtolower($cat_name);
    $cat_name_lower2 = strtolower($cat_name2);
    if($cat_name_lower != $cat_name_lower2)
    {
        
        $result = $this->ip_model->checkCategoryName($table="category",$fname="category_name",$cat_name);

        if($result){
          $slug = url_title($cat_name, 'dash', TRUE);
        }
        else{
          $message="Category name allready exist in database.";
          $this->session->set_flashdata("msg",$message);
          redirect("ip_admin/Category");
        }
    }

  $config['upload_path'] = '../Ipae_image/category/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);

    if (!empty($_FILES['icon']['name'])) 
  {
  
  // Upload icon
  if ($this->upload->do_upload('icon'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_one= $path.''.$one;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $one =$this->input->post('icon_a');
  $path_one=$this->input->post('icon_a');
  }

  //upload file next

  if (!empty($_FILES['iconimg']['name']))
  {

  // Upload icon image
  if ($this->upload->do_upload('iconimg'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two =$this->input->post('icon_b');
  $path_two=$this->input->post('icon_b');
  }


  //file Upload 1
  if (!empty($_FILES['img1']['name']))
  {
  
  // Upload file 1
  if ($this->upload->do_upload('img1')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three =$this->input->post('icon_cc');
  $path_three =$this->input->post('icon_c');
  }

  //Upload file  2
  if (!empty($_FILES['img2']['name']))
  {
  
  // Upload file 2
  if ($this->upload->do_upload('img2'))
  {
  $data = $this->upload->data();
  $four=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_four= $path.''.$four;
  }
  else
  {
  echo $this->upload->display_errors();
  }
  }
  else
  {
  $four=$this->input->post('icon_dd');
  $path_four=$this->input->post('icon_d');
  }


  //file Upload 3
  if (!empty($_FILES['img3']['name']))
  {

  // Upload file 3
  if ($this->upload->do_upload('img3')) 
  {
  $data = $this->upload->data();
  $five=$data['file_name'];
  $path='/Ipae_image/category/';
  $path_five= $path.''.$five;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $five =$this->input->post('icon_ee');
  $path_five =$this->input->post('icon_e');
  }

  

 $slug = url_title($this->input->post('name'), 'dash', TRUE);

  //echo $slug; exit();
  
  
  $data = array(
  'id'=>$id,
  'category_name'=>$cat_name, 
  'banner_name1' =>$three,
  'banner_name2'=>$four,
  'banner_name3'=>$five,
  'cat_icon'=>$path_one,
  'cat_icon_img'=>$path_two,
  'banner_name_path1'=>$path_three,
  'banner_name_path2'=>$path_four,   
  'banner_name_path3'=>$path_five, 
  'cat_slug'=>$slug
  );
  //echo '<pre>';print_r($data); echo'</pre>'; exit(); 
  $result=$this->ip_model->updateData($table='category',$fname='id',$id,$data);
  if($result)
  {
  redirect(base_url('ip_admin/display_Category'));
  }
  }




function update_subcat()
  {

  $id=$this->input->post('id');
  $order=$this->input->post('order');
$tra=$this->input->post('tra');

   $id=$this->input->post('id');
  //$subcat_name=$this->input->post('name');


     $result=$this->ip_model->getDataByEditID($table='subcategory',$fname='subid',$id);

   $subcat_name2 = $result['0']->subcat_name; 

$subcat_name = trim($this->input->post('name'));
    $subcat_name_lower = strtolower($subcat_name);
    $subcat_name_lower2 = strtolower($subcat_name2);
    if($subcat_name_lower != $subcat_name_lower2)
    {
      
        $result = $this->ip_model->checkCategoryName($table="subcategory",$fname="subcat_name",$subcat_name);

        if($result){
          $slug = url_title($subcat_name, 'dash', TRUE);
        }


        else{
          $message="SubCategory name allready exist in database.";
          $this->session->set_flashdata("msg",$message);
          redirect("ip_admin/Sub_Category");
        }
    }
    else{
      $slug = $result['0']->slug; 
    }
    //echo "hello...";exit();
   if (!empty($_FILES['koko']['name']))
               {
  $config['upload_path'] = '../Ipae_image/subcategory/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload file 1
  if ($this->upload->do_upload('koko'))
  {
  $data = $this->upload->data();
  $one=$data['file_name'];
  $path='/Ipae_image/subcategory';
  $path_one= $path.''.$one;
  }
  else
  {
    echo $this->upload->display_errors();}
  }
  else
  {
    $one=$this->input->post('a');
    $path_one=$this->input->post('aa');
  }

  //upload file next

  if (!empty($_FILES['img1']['name']))
  {
  $config['upload_path'] = '../Ipae_image/subcategory/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '1000';       
  $this->upload->initialize($config);
  // Upload icon image
  if ($this->upload->do_upload('img1'))
  {
  $data = $this->upload->data();
  $two=$data['file_name'];

  //echo "$two";exit();
  $path='/Ipae_image/subcategory/';
  $path_two= $path.''.$two;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $two =$this->input->post('b');
  $path_two=$this->input->post('bb');
  }


  //file Upload 1
  if (!empty($_FILES['img2']['name']))
  {
  $config['upload_path'] = '../Ipae_image/subcategory/';
  $config['allowed_types'] = '*';
       
  $this->upload->initialize($config);
 
  if ($this->upload->do_upload('img2')) 
  {
  $data = $this->upload->data();
  $three=$data['file_name'];
  $path='/Ipae_image/subcategory/';
  $path_three= $path.''.$three;
  }
  else
  {
  echo $this->upload->display_errors();}
  }
  else
  {
  $three =$this->input->post('c');
  $path_three =$this->input->post('cc');
  }

 

 
if($slug == ''){
  $data = array(
  'subid'=>$id,
'tra' => $tra,
  'id'=>$id,
  'subcat_name'=>$subcat_name,
  'subcat_icon'=>$one,
  'subcat_icon_path'=>$path_one,
  'subcat_banner1_name' =>$two,
  'subcat_banner2_name'=>$three,
  'subcat_banner1_path'=>$path_two,
  'subcat_banner2_path'=>$path_three,
  'sequence'=>$order
  
 
  );
}
else{
  $data = array(
  'subid'=>$id,
  'id'=>$id,
  'subcat_name'=>$subcat_name,
  'subcat_icon'=>$one,
  'subcat_icon_path'=>$path_one,
  'subcat_banner1_name' =>$two,
  'subcat_banner2_name'=>$three,
  'subcat_banner1_path'=>$path_two,
  'subcat_banner2_path'=>$path_three,
  'subcat_slug'=>$slug,
  'sequence'=>$order,
  );
}
  
 //echo '<pre>' ;print_r($data); echo'</pre>'; exit();   
  $result=$this->ip_model->updateData($table='subcategory',$fname='subid',$id,$data);
  if($result)
  {
  redirect(base_url('ip_admin/display_SubCategory'));
  }
  }



function AddSubject()
{
  $this->load->view('add_subject');
}


function Add_Subject()
{ 
  //echo "hi"; exit();
  $subject=$this->input->post("subject");
  $data=array('subjectName'=>$subject);
   //echo '<pre>'; print_r($data); echo'</pre>'; exit();
  $result=$this->ip_model->insertData($table ='Subjcet',$data);  
  if($result)    
  {
  redirect(base_url('ip_admin/Display_Subject'));   
  }
}
 
function Display_Subject()
{
  $result['subject']=$this->ip_model->getData($table='subjcet');
  //print_r($result); exit();
  $this->load->view('ShowSubject',$result);
}

function SubjectDelete($value)
{
  //echo $value; exit();
  $id= $this->uri->segment(3);
  //echo $id; exit();
  $this->ip_model->deleteList($table='subjcet',$fname='id',$id);
  redirect(base_url("ip_admin/Display_Subject"));

}

 
 function subjectEdit()
 {
  $id= $this->uri->segment(3);
  $result['subhectt']=$this->ip_model->getDataByEditID($table='subjcet',$fname='id',$id); 
//echo'<pre>'; print_r($result); echo'<pre>';exit();
  $this->load->view('EditSubject',$result);   
 }

 function Edit_Subject()
 {
  $id=$this->input->post("id");

  $data=array(

          'subjectName'=>$this->input->post("subject")
              );


  $result=$this->ip_model->updateData($table='subjcet',$fname='id',$id,$data);
  if($result)
  {
  redirect(base_url('ip_admin/Display_Subject'));
  }


 }



 







}