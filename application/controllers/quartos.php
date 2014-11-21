<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quartos extends CI_Controller {
    
    public function __construct()                                  // ^
    {                                                               // ^
        parent::__construct();                                      // ^
                                                                    // ^
        // check if users is logged in 
        
        $this->load->library('upload');
        $this->load->library('image_lib');
          //  $this->load->library('MY_Upload');
            
	$this->load->library('ion_auth');                          
                        


        $this->load->helper('string');
         
        $this->load->helper('language');
        $this->load->helper('form'); 
      
        
        $this->load->library('session');  
	$this->load->library('form_validation');                    // ^
	$this->load->database();                                    // ^
	$this->load->helper('url');
         
        $this->load->helper('language');
        
        
        $lang = $this->session->userdata('lang_name');                        
        if(!isset($lang))
        { //load default language 
            
            
           $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
           
            //print_r(':::::::::::::::'.$lang);
           switch ($lang){
          
     
            case "pt":
            //echo "PAGE DE";
            $this->session->set_userdata('lang_name','portuguese');
            $this->lang->load('site','portuguese');
            $this->lang->load('ion_auth','portuguese');
            $this->lang->load('auth','portuguese');  
            $this->config->set_item('language','portuguese');
            
            break;
            case "en":
            //echo "PAGE EN";
            $this->session->set_userdata('lang_name','english');
            $this->lang->load('site');
            $this->lang->load('ion_auth');
            $this->lang->load('auth');
            $this->config->set_item('language','english');
           
            break;        
            default:
            //echo "PAGE EN - Setting Default";
             $this->session->set_userdata('lang_name','portuguese');
             $this->lang->load('site','portuguese');
             $this->lang->load('ion_auth','portuguese');
             $this->lang->load('auth','portuguese'); 
             $this->config->set_item('language','portuguese');                          
             
             break;
        
           }
           
        }
        else
        { //load language from session
          //print_r('lang :'.$this->session->userdata('lang_name'));
          $this->lang->load('site',$this->session->userdata('lang_name'));
          $this->lang->load('ion_auth',$this->session->userdata('lang_name'));
          $this->lang->load('auth',$this->session->userdata('lang_name'));
          $this->config->set_item('language',$this->session->userdata('lang_name'));
        }
        
        $this->load->helper('ckeditor');
		
        //Ckeditor's configuration
        $this->data['merda'] = array(
		
			//ID of the textarea that will be replaced
			'id' 	=> 	'texto',
			'path'	=>	'js/ckeditor',
		
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
					
			),
		
			//Replacing styles from the "Styles tool"
			'styles' => array(
			
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 			=> 	'Blue',
						'font-weight' 		=> 	'bold'
					)
				),
				
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 		=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 			=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
        
        
            // set template 
        $this->template->set_template('default');


    }
    
    
    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
   
    public function create_quartos_post()
    {
          
      if (!$this->ion_auth->logged_in())
      {
        //the user is not logged in goes to login page
	redirect('auth/login', 'refresh');

      } 
      
      //get numero de anuncios para este utilizador
      
      $contaads=$this->quartos_model->get_numero_de_anuncios($this->session->userdata('user_id'));
      $conta=0;
      if($contaads==false)
      {
        $conta=0;
        //tudo bem
        
      }else
      {
          $group = 'pago';
          $groupm = 'members';
          $conta=count($contaads);
          if ($this->ion_auth->in_group($group))
          {
              //verificar pay date
              $pdate=$this->quartos_model->get_pay_date($this->session->userdata('user_id'));
              
             // print_r($pdate);
              

              if($pdate!=null)
              {
                  
                  $date = date('Y-m-d');
                  
                  //print_r($date);
                  //print_r('exp:'.$pdate['paydate']);
                  if($pdate['paydate']<$date)
                  {
                       redirect('quartos/pagamento', 'refresh');
                  }
    

                  
              }
              //tudo bem
              
          }elseif($conta==1 && $this->ion_auth->in_group($groupm))
          {
              
              redirect('quartos/pagamento', 'refresh');
              
          }
           
       
      }
            
             $this->form_validation->set_rules('titulo', $this->lang->line('validation_titulo'), 'required|max_length[1000]');
	     $this->form_validation->set_rules('texto', $this->lang->line('validation_texto'), 'required');	

            if ($this->form_validation->run() == false)
            {
                   
                 
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['titulo'] = array('name' => 'titulo',
				'id' => 'titulo',
				'type' => 'text',
				'value' => $this->form_validation->set_value('titulo'),
			);
                        
	                $this->data['texto'] = array('name' => 'texto',
				'id' => 'texto',
				'type' => 'text',
				'value' => $this->form_validation->set_value('texto'),
			);
		

			                        
                        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                        $Dfooter = array();
                        $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');
                               
             
                        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                        $this->template->write_view('head', 'html/head');
                        $this->template->write_view('header', 'html/header');
                        $this->template->write_view('content', 'main/create_post_quartos',$this->data,true);
                        $this->template->write_view('footer', 'footer/footer');
                        $this->template->render();
             
             
             
                
            }else
            {
            
            
              $titulo    = $this->input->post('titulo');
	      $texto     = $this->input->post('texto');              
              $endereco     = $this->input->post('endereco');
      
             
             
       
            
              $DContent['page_details'] = array('page_title' => 'Index of dinispt');
   	      $Dfooter = array();
	      $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

    
              
              
              
              if(!$id_quarto=$this->quartos_model->add($titulo,$texto,$endereco))
              {
              
                $this->data['message'] = $this->lang->line('errogravacao');

             
             
	        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	        $this->template->write_view('head', 'html/head');
                $this->template->write_view('header', 'html/header');
                $this->template->write_view('content', 'main/create_post_quartos',$this->data,true);
   	        $this->template->write_view('footer', 'footer/footer');
   	        $this->template->render();
                  
              }else              
              {     
                  
                  
          $images_config = $this->config->item('images');
                                          
          $images_dir=$images_config['upload_path'].$this->session->userdata('user_id').'/'.$id_quarto.'/';
                  
          $this->upload_path = $images_dir;
                  
          if (!is_dir($images_dir))
          {
   		mkdir($images_dir,0777,true);
	  }
                  
           $config['upload_path'] = $this->upload_path;
           $config['allowed_types'] = 'gif|jpg|jpeg|png';
           $config['encrypt_name'] = true;
   
        
           $this->upload->initialize($config);
                        

             
            
           if($this->upload->do_multi_upload('userfiles'))
           {
               
            
           if (!is_dir($this->upload_path . '/thumbs/'))
           {
                mkdir($this->upload_path . '/thumbs/',0777,true);
           }
           
           if (!is_dir($this->upload_path . '/big/'))
           {
   		mkdir($this->upload_path . '/big/',0777,true);
           }
            
           $files_up=$this->upload->get_multi_upload_data();
           
           foreach($files_up as $filerow)
           {
               
            $confb = array(
                'source_image' => $filerow['full_path'],
                'new_image' => $this->upload_path . '/big/',
                'maintain_ratio' => true,
                'width' => 500,
                'height' => 500,         
                'encrypt_name' => TRUE
            );
 
         
            $this->image_lib->initialize($confb);
            $this->image_lib->resize();
            $this->image_lib->clear();
            
           
            
            $conf = array(
                'source_image' => $filerow['full_path'],
                'new_image' => $this->upload_path . '/thumbs/',
                'maintain_ratio' => false,
                'width' => 100,
                'height' => 100,
                'encrypt_name' => TRUE
            );
 
 
           
            $this->image_lib->initialize($conf);
            $this->image_lib->resize();
            $this->image_lib->clear();
            
            $this->quartos_model->add_fotos($id_quarto,$filerow['file_name']);
           
            if (file_exists($this->upload_path.$filerow['file_name'])) {
               unlink($this->upload_path.$filerow['file_name']);
            }
            
           }//foreach
            

        }else
        {
            
             $this->data['message'] = $this->upload->display_errors();
             
              $this->quartos_model->delete($id_quarto);
             
                          
	      $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	      $this->template->write_view('head', 'html/head');
              $this->template->write_view('header', 'html/header');
              $this->template->write_view('content', 'main/create_post_quartos',$this->data,true);
   	      $this->template->write_view('footer', 'footer/footer');
   	      $this->template->render();
              
              return;
        }
              
                                             
              $this->data['message'] = $this->lang->line('sucessogravacao');
              
              
              $whoemail=$this->quartos_model->get_pay_date($this->session->userdata('user_id'));
            
              $reply_to='pedro@imo4.com';
              $message='foi criado um anuncio por : '.$whoemail['email'];
          
              $subject='novo anuncio criado';
              $to='pedro@dinispt.com';
              
              $this->quartos_model->send_mail($reply_to,$message,$subject,$to);

                          
	      $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	      $this->template->write_view('head', 'html/head');
              $this->template->write_view('header', 'html/header');
              $this->template->write_view('content', 'main/create_post_quartos',$this->data,true);
   	      $this->template->write_view('footer', 'footer/footer');
   	      $this->template->render();
                                                 
             
            }
	}
    }
    
        
    /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    public function listar_quartos()
    {
 
      
      
      
        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
        $Dfooter = array();
        $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

        
        $status=1;
           

        /* Pagination  data */   	
        $config['base_url'] = site_url("quartos/listar_quartos/");
        
        $var_post=$this->quartos_model->get_quartos_posts($status);
        
        $conta=0;
        if($var_post==false)
        {
            
            $conta=0;
            
        } else {
            
            $conta=count($var_post);
            
        } 
        
        
          $config['total_rows'] = $conta;
	  $config['uri_segment'] = 3;
          $config['per_page'] = 10;

	
          $this->pagination->initialize($config);

          $this->data['posts']=$this->quartos_model->listar_my_posts($config['per_page'],$this->uri->segment(3,0),$status);                        
             
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/listar_post_quartos',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
        
            
            
    }
       
    
    /*     * **************************** Detalhes *************************** */

    function detalhes() {
        			        
        /* initial data */
        $Ddata['page_details'] = array('page_title' => 'List Jobs');
        $Dheader = array();
        $DContent['page_details'] = array('page_title' => 'Index of freejoBoard');
        $Dsidebar = array();
        $Dfooter = array(); 		    
        $Dmeta = array();

        
   
        $this->quartos_model->update_visitas($this->uri->segment(3,0));


        $this->data['posts']=$this->quartos_model->get_post($this->uri->segment(3,0));

            
                
                
        $Dmeta['meta_title']=$this->data['posts']['titulo'];
        //$Dmeta['meta_descricao']=htmlspecialchars_decode($this->data['posts']['texto']);
        $Dmeta['meta_descricao']=stripcslashes($this->data['posts']['texto']);
        //$html_for_db = addslashes($html_content
        
        
          // Load the library
//-$this->load->library('googlemaps');
// Initialize our map. Here you can also pass in additional parameters for customising the map (see below)

//$config['center'] = '1600 Amphitheatre Parkway in Mountain View, Santa Clara County, California';

//$config['center'] = '156 rua de vilar ,massarelos porto';
//-$config['center'] = $this->data['posts']['endereco'];
//$config['zoom'] = "auto

//-$config['zoom'] = "15";


//-$this->googlemaps->initialize($config);

//-$marker = array();
//-$marker['position'] = $this->data['posts']['endereco'];
//-$this->googlemaps->add_marker($marker);
//$this->googlemaps->initialize();
// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
// placed where we want the map to appear.
//-$this->data['map'] = $this->googlemaps->create_map();
// Load our view, passing the map data that has just been created
//$this->load->view('my_view', $data);


        
        
                     
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head',$this->data,true);
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/post_detalhes',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
  

		
    }
    
    /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    
   // function display($query_id = 0, $sort_by = 'title', $sort_order = 'asc', $offset = 0) {
	
    public function search_quartos()
    {
 
        $limit=10;
        
        $status=1;
      
      
      
        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
        $Dfooter = array();
        $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

           


        
        
        
          $query_id=$this->uri->segment(3,0);
          $offset=$this->uri->segment(4,0);
         
          //
          //load da query
          $query_parsed=$this->quartos_model->load_query($this->uri->segment(3,0));
         
          $results=$this->quartos_model->listar_my_search_posts($query_parsed,$limit,$this->uri->segment(4,0),$status);                        
       
          
          $this->data['posts']=$results['rows'];
          $this->data['num_results'] = $results['num_rows'];
          
          
         
          /* Pagination  data */   	
          $config['base_url'] = site_url("quartos/search_quartos/$query_id");
  
          $config['total_rows'] = $this->data['num_results'];
	  $config['uri_segment'] = 4;
          $config['per_page'] = $limit;

	
          $this->pagination->initialize($config);
          
     
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/search_post_blog',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
         
    }
    
    
    	public function search() {
      
		
		$query_array = array(
			'titulo' => $this->input->post('titulo'),
			'texto' => $this->input->post('texto'),
		);
				                
                $query_id = $this->quartos_model->add_query($query_array);
                                		
		redirect("quartos/search_quartos/$query_id");
		
	}
        
        
        


    
    /*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*     * **************************** EDITAR *************************************************** */
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/

    function editar() {


               if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
                        
                        
		}

	         $this->load->helper(array('form', 'url'));

		 $this->load->library('form_validation');

		
	        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
                $this->form_validation->set_rules('texto', 'Texto', 'required');


		 if ($this->form_validation->run() == FALSE)
		 {
		


			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		
		

                        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                        $Dfooter = array();
                       $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');
            		     
                        
                        $this->data['posts']=$this->quartos_model->get_post($this->uri->segment(3,0));
                                                

                        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                        $this->template->write_view('head', 'html/head');
                        $this->template->write_view('header', 'html/header');
                        $this->template->write_view('content', 'main/editar_post',$this->data,true);
                        $this->template->write_view('footer', 'footer/footer');
                        $this->template->render();               
		        
		 }
		 else
		 {
		
             
                        //////////////////////////////////
                        //$this->uri->segment(3) /////////
                        //update data from edit  /////////
                        //////////////////////////////////
                        if($this->quartos_model->update($this->uri->segment(3),$_POST))
                        {
                          $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                          $Dfooter = array();
                          $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

                            
                          $this->data['message']='Post succefully updated / Anuncio editado com sucesso';
                          $this->data['posts']=$this->quartos_model->get_post($this->uri->segment(3,0));
                            
                            
                          $whoemail=$this->quartos_model->get_pay_date($this->session->userdata('user_id'));
            
                          $reply_to='pedro@imo4.com';
                          $message='foi editado um anuncio por : '.$whoemail['email'];
          
                          $subject='anuncio editado';
                          $to='pedro@dinispt.com';
              
                          $this->quartos_model->send_mail($reply_to,$message,$subject,$to);
                          
                          
                          
                          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                          $this->template->write_view('head', 'html/head');
                          $this->template->write_view('header', 'html/header');
                          $this->template->write_view('content', 'main/editar_post',$this->data,true);
                          $this->template->write_view('footer', 'footer/footer');
                          $this->template->render();
                            
                        }  else {
                            
                            
                          $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                          $Dfooter = array();
                          $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');
                          
                          $this->data['message']='error updating ad / erro ao editar o anuncio';
                          $this->data['posts']=$this->quartos_model->get_post($this->uri->segment(3,0));
                          
                          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                          $this->template->write_view('head', 'html/head');
                          $this->template->write_view('header', 'html/header');
                          $this->template->write_view('content', 'main/editar_post',$this->data,true);
                          $this->template->write_view('footer', 'footer/footer');
                          $this->template->render();
                        }
                   
                        

               
		        

		 }

       


       
    }
    
    

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/

function apagar_details() {

     if (!$this->ion_auth->logged_in())
     {
       //redirect them to the login page
       redirect('auth/login', 'refresh');                                                
     }
                           
        /* initial data */
        $Ddata['page_details'] = array('page_title' => 'List Jobs');
        $Dheader = array();
        $DContent['page_details'] = array('page_title' => 'Index of imo4');     
        $Dfooter = array(); 		
               
        $this->data['posts']=$this->quartos_model->get_post($this->uri->segment(3,0));
        
        
        //print_r($this->data['posts']);

        /* carregar o template */ 
        $this->template->write_view('head', 'html/head');       
        $this->template->write_view('header', 'html/header');     
        $this->template->write_view('content', 'main/post_delete_detalhes',$this->data, true);  
        $this->template->write_view('footer', 'footer/footer');  
        $this->template->render();
                                          
}

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/


    function apagar_post() {
      
      if (!$this->ion_auth->logged_in())
      {
        //redirect them to the login page
        redirect('user/login', 'refresh');
      }
      else
      {		        
	



			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		
			$DContent['page_details'] = array('page_title' => 'Index of freejoBoard');
		        $Dheader = array();
		        $Dsidebar = array();
		        $Dfooter = array();
		     $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

                        $imo=$this->quartos_model->get_post($this->uri->segment(3));
                        //tem de se apagar as imagens relacionadas
                        //e fazer unlink
                        $images_config = $this->config->item('images');
                                          
                        $images_dir=$images_config['upload_path'].$imo['user_id'].'/'.$this->uri->segment(3,0);
                  
                        $this->upload_path = $images_dir;
                       
                       
                        
                        $fotos=$this->quartos_model->get_post_imagens($this->uri->segment(3)) ;
                        
                        
                     //  print_r($foto);
                        
                        foreach($fotos as $foto){
                            
                        $this->quartos_model->delete_imagem($foto['idfotosquartos']);
                            
                         if($foto!=false)
                         {
                            
                            if (file_exists($this->upload_path.'/'.'thumbs'.'/'.$foto['file_name'])) {
                                unlink($this->upload_path.'/'.'thumbs'.'/'.$foto['file_name']);
                            }
                            
                            if (file_exists($this->upload_path.'/'.'big'.'/'.$foto['file_name'])) {
                                unlink($this->upload_path.'/'.'big'.'/'.$foto['file_name']);
                            }
                            
                         }
                        }
                        
                       $this->quartos_model->delete($this->uri->segment(3));
                       
                    

                    /* carregar o template */ 
                    $this->template->write_view('head', 'html/head');       
                    $this->template->write_view('header', 'html/header', $Dheader, true);     
                    $this->template->write_view('content', 'main/apagado',$this->data, true);  
                    $this->template->write_view('footer', 'footer/footer');  
                    $this->template->render();
       }//else
		
    }
            
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
//APROVAR
    public function listar_quartos_aprovar()
    {
 
      
      
      
        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
        $Dfooter = array();
        $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

           

        /* Pagination  data */   	
        $config['base_url'] = site_url("quartos/listar_quartos_aprovar/");
        
        $var_post=$this->quartos_model->get_quartos_posts_aprovar();
        
        $conta=0;
        if($var_post==false)
        {
            
            $conta=0;
            
        } else {
            
            $conta=count($var_post);
            
        } 
        
        
          $config['total_rows'] = $conta;
	  $config['uri_segment'] = 3;
          $config['per_page'] = 10;

	
          $this->pagination->initialize($config);

          $this->data['posts']=$this->quartos_model->listar_my_posts_aprovar($config['per_page'],$this->uri->segment(3,0));                        
             
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/listar_post_quartos_aprovar',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
        
            
            
    }
    
    
    /*     * **************************** aprovar *************************** */
    /*     * **************************************************************** */
    /*     * **************************************************************** */
    

    function aprovar() {
        			        
        /* initial data */
        $Ddata['page_details'] = array('page_title' => 'List Jobs');
        $Dheader = array();
        $DContent['page_details'] = array('page_title' => 'Index of freejoBoard');
        $Dsidebar = array();
        $Dfooter = array(); 		    
        $Dmeta = array();
           
        $this->quartos_model->update_aprovar($this->uri->segment(3,0));
        
        
        //get user id by quarto id
        $idquartos=$this->uri->segment(3,0);
                
        $user=$this->quartos_model->get_post($idquartos);
                
        $whoemail=$this->quartos_model->get_pay_date($user['user_id']);
            
        $reply_to='pedro@imo4.com';
        $message='o seu anuncio com id : '.$idquartos.' : foi aprovado'.'//'.'your ad with id : '.$idquartos.' : was approved';
          
        $subject='anuncio aprovado / ad approved';
        $to=$whoemail['email'];
              
        $this->quartos_model->send_mail($reply_to,$message,$subject,$to);
                               
        //$this->template->write_view('meta', 'html/meta',  $Dmeta, true);
        $this->template->write_view('head', 'html/head');
        $this->template->write_view('header', 'html/header');
        $this->template->write_view('content', 'main/post_aprovado',$this->data,true);
        $this->template->write_view('footer', 'footer/footer');
        $this->template->render();
  

		
    }
    
    
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
//Editar ot anuncios de quartos
    public function listar_quartos_editar()
    {
 
                
        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
        $Dfooter = array();
        $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

           

        /* Pagination  data */   	
        $config['base_url'] = site_url("quartos/listar_quartos_editar/");
        
        $var_post=$this->quartos_model->get_quartos_posts_editar();
        
        $conta=0;
        if($var_post==false)
        {
            
            $conta=0;
            
        } else {
            
            $conta=count($var_post);
            
        } 
        
        
          $config['total_rows'] = $conta;
	  $config['uri_segment'] = 3;
          $config['per_page'] = 10;

	
          $this->pagination->initialize($config);

          $this->data['posts']=$this->quartos_model->listar_my_posts_editar($config['per_page'],$this->uri->segment(3,0));                        
             
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/listar_post_quartos_editar',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
        
            
            
    }
    
    

    

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/

    function apagar_imagem() {


               if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
                        
                        
		}

	         $this->load->helper(array('form', 'url'));

		 $this->load->library('form_validation');

		



		
                        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                        $Dfooter = array();
                          $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

                        $images_config = $this->config->item('images');
                                          
                        $images_dir=$images_config['upload_path'].$this->session->userdata('user_id').'/'.$this->uri->segment(3,0);
                  
                        $this->upload_path = $images_dir;
                       
                        $foto=$this->quartos_model->get_post_imagem($this->uri->segment(4,0));
                        
                     //  print_r($foto);
                            
                        $this->quartos_model->delete_imagem($this->uri->segment(4,0));
                            
                         if($foto!=false)
                         {
                            
                            if (file_exists($this->upload_path.'/'.'thumbs'.'/'.$foto['file_name'])) {
                                unlink($this->upload_path.'/'.'thumbs'.'/'.$foto['file_name']);
                            }
                            
                            if (file_exists($this->upload_path.'/'.'big'.'/'.$foto['file_name'])) {
                                unlink($this->upload_path.'/'.'big'.'/'.$foto['file_name']);
                            }
                            
                         }
                        
                            $this->data['images']=$this->quartos_model->get_post_imagens($this->uri->segment(3,0));
                            
                        
                   
                        

                        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                        $this->template->write_view('head', 'html/head');
                        $this->template->write_view('header', 'html/header');
                        $this->template->write_view('content', 'main/adicionar_imagens',$this->data,true);
                        $this->template->write_view('footer', 'footer/footer');
                        $this->template->render();               
		        

		 

       


       
    }
    
    

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/

    function adicionar_imagens() {


               if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
                        
                        
		}

	         $this->load->helper(array('form', 'url'));

		 $this->load->library('form_validation');

		



		
                 $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                 $Dfooter = array();
                   $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');
                        
                        
                        
                 $images_config = $this->config->item('images');
                                          
                 $images_dir=$images_config['upload_path'].$this->session->userdata('user_id').'/'.$this->uri->segment(3,0).'/';
                  
                 $this->upload_path = $images_dir;
                  
                  	        if (!is_dir($images_dir))
                        {
   		          mkdir($images_dir,0777,true);
		        }
                        
                                
                                   
                                   
                  
                $config['upload_path'] = $this->upload_path;
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite']     = FALSE;
                $config['encrypt_name'] = TRUE;
     
  
        
                $this->upload->initialize($config);
                        

             
            
           if($this->upload->do_multi_upload('userfiles'))
           {
                  
            
           if (!is_dir($this->upload_path . '/thumbs/'))
           {
                mkdir($this->upload_path . '/thumbs/',0777,true);
           }
           
           if (!is_dir($this->upload_path . '/big/'))
           {
   		mkdir($this->upload_path . '/big/',0777,true);
           }
            
           $files_up=$this->upload->get_multi_upload_data();
        
           foreach($files_up as $filerow)
           {
               
            $confb = array(
                'source_image' => $filerow['full_path'],
                'new_image' => $this->upload_path . '/big/',
                'maintain_ratio' => true,
                'width' => 500,
                'height' => 500,         
                'encrypt_name' => TRUE
            );
 
         
            $this->image_lib->initialize($confb);
            $this->image_lib->resize();
            $this->image_lib->clear();
            
           
            
            $conf = array(
                'source_image' => $filerow['full_path'],
                'new_image' => $this->upload_path . '/thumbs/',
                'maintain_ratio' => false,
                'width' => 100,
                'height' => 100,
                'encrypt_name' => TRUE
            );
 
           
            $this->image_lib->initialize($conf);
            $this->image_lib->resize();
            $this->image_lib->clear();
            
            $this->quartos_model->add_fotos($this->uri->segment(3,0),$filerow['file_name']);
           
            if (file_exists($this->upload_path.$filerow['file_name'])) {
               unlink($this->upload_path.$filerow['file_name']);
            }
            
     
            
           }//foreach
            

        }else
        {
            
             $this->data['message'] = $this->upload->display_errors();
             
             $this->data['images']=$this->quartos_model->get_post_imagens($this->uri->segment(3,0));
             
             
                          
	      $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	      $this->template->write_view('head', 'html/head');
              $this->template->write_view('header', 'html/header');
              $this->template->write_view('content', 'main/adicionar_imagens',$this->data,true);
   	      $this->template->write_view('footer', 'footer/footer');
   	      $this->template->render();
              
              return;
        }

                     
                            
                        
        $this->data['images']=$this->quartos_model->get_post_imagens($this->uri->segment(3,0));
                            
                        
                   
                        

        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
        $this->template->write_view('head', 'html/head');
        $this->template->write_view('header', 'html/header');
        $this->template->write_view('content', 'main/adicionar_imagens',$this->data,true);
        $this->template->write_view('footer', 'footer/footer');
        $this->template->render();               
		        

		 

       


       
    }
    
    

/*************************************************************************************************/
/*************************************************************************************************/
/*************************************************************************************************/
    public function pagamento()
    {
        
                  
      if (!$this->ion_auth->logged_in())
      {
        //the user is not logged in goes to login page
	redirect('auth/login', 'refresh');

      } 
      
      
         
          
	     $this->form_validation->set_rules('texto', $this->lang->line('validation_texto'), 'required');	

            if ($this->form_validation->run() == false)
            {
                   
                 
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

		
	                $this->data['texto'] = array('name' => 'texto',
				'id' => 'texto',
				'type' => 'text',
				'value' => $this->form_validation->set_value('texto'),
			);
		

			                        
                        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
                        $Dfooter = array();
                      $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');
                               
             
                        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
                        $this->template->write_view('head', 'html/head');
                        $this->template->write_view('header', 'html/header');
                        $this->template->write_view('content', 'main/pagamento',$this->data,true);
                        $this->template->write_view('footer', 'footer/footer');
                        $this->template->render();
             
             
             
                
            }else
            {
            
            

	      $texto     = $this->input->post('texto');
              
              
      
             
             
       
            
              $DContent['page_details'] = array('page_title' => 'Index of dinispt');
   	      $Dfooter = array();
	      $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

    
              
              
              
              if(!$id_quarto=$this->quartos_model->add_pagamentos($texto))
              {
                  
                $this->data['message'] = $this->lang->line('errogravacao');

             
             
	        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	        $this->template->write_view('head', 'html/head');
                $this->template->write_view('header', 'html/header');
                $this->template->write_view('content', 'main/pagamento',$this->data,true);
   	        $this->template->write_view('footer', 'footer/footer');
   	        $this->template->render();
                  
              }else              
              {  
                $this->data['message'] = $this->lang->line('sucessogravacao');

                $whoemail=$this->quartos_model->get_pay_date($this->session->userdata('user_id'));
            
                $reply_to='pedro@imo4.com';
                $message='foi feito um pedido de factura : '.$whoemail['email'];
          
                $subject='novo pedido de factura';
                $to='pedro@dinispt.com';
              
                $this->quartos_model->send_mail($reply_to,$message,$subject,$to);
             
	        $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	        $this->template->write_view('head', 'html/head');
                $this->template->write_view('header', 'html/header');
                $this->template->write_view('content', 'main/pagamento',$this->data,true);
   	        $this->template->write_view('footer', 'footer/footer');
   	        $this->template->render();
              
              }
            }
      
      
      
   
    }
    
     /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    /***********************************************************************/
    public function listar_faturas()
    {
 
      
      
      
        $DContent['page_details'] = array('page_title' => 'Index of dinispt');
        $Dfooter = array();
         $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

        
    
           

        /* Pagination  data */   	
        $config['base_url'] = site_url("quartos/listar_faturas/");
        
        $var_post=$this->quartos_model->get_faturas_posts();
        
        $conta=0;
        if($var_post==false)
        {
            
            $conta=0;
            
        } else {
            
            $conta=count($var_post);
            
        } 
        
        
          $config['total_rows'] = $conta;
	  $config['uri_segment'] = 3;
          $config['per_page'] = 10;

	
          $this->pagination->initialize($config);

          $this->data['posts']=$this->quartos_model->listar_my_posts_faturas($config['per_page'],$this->uri->segment(3,0));                        
             
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/listar_view_faturas',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
        
            
            
    }
    
    
    

    
}
