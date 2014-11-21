<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

      public function __construct()                                   // ^
      {                                                               // ^
        parent::__construct();                                      // ^
                                                                    // ^
        // check if users is logged in 
       

        // set template 
        $this->template->set_template('default');
        
        
        
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
        
       }
       
       
       
       
       
public function portugues()
{
  $this->session->set_userdata('lang_name','portuguese');
 redirect('/', 'refresh');

}

public function english()
{
  $this->session->set_userdata('lang_name','english');
  redirect('/', 'refresh');
}




    
	public function index()
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
          $config['base_url'] = site_url("welcome/index/$query_id");
  
          $config['total_rows'] = $this->data['num_results'];
	  $config['uri_segment'] = 4;
          $config['per_page'] = $limit;

	
          $this->pagination->initialize($config);
          
     
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/main_page',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
             
	}
        
        /***********************************************************************/
        /***********************************************************************/
        /***********************************************************************/
        
        public function myzone()
	{
            
            if (!$this->ion_auth->logged_in())
            {
		 //redirect them to the login page
	         redirect('auth/login', 'refresh');
            }            
	    else
	    {
            
        
        
             $DContent['page_details'] = array('page_title' => 'Index of dinispt');
   	     $Dfooter = array();
	     $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');

          
             
             $status=0;
             $numero=$this->quartos_model->get_numero_de_anuncios_status($this->session->userdata('user_id'),$status);
             if($numero)            
             {
                 $DContent['total_por_aprovar']=count($numero);
 
                 
             }else
             {
                $DContent['total_por_aprovar']=0;
             }
             
             $status=1;
             $numeroa=$this->quartos_model->get_numero_de_anuncios_status($this->session->userdata('user_id'),$status);
             if($numeroa)            
             {
                 $DContent['total_online']=count($numeroa);
 
                 
             }else
             {
             $DContent['total_online']=0;
             }
             
	     $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	     $this->template->write_view('head', 'html/head');
             $this->template->write_view('header', 'html/header');
             $this->template->write_view('content', 'myzone/indexzone',$DContent,true);
   	     $this->template->write_view('footer', 'footer/footer');
   	     $this->template->render();
            }
             
             
	}
        
        
        
        public function search_index() {
      
		
		$query_array = array(
			'titulo' => $this->input->post('titulo'),
			'texto' => $this->input->post('texto'),
		);
				                
                $query_id = $this->quartos_model->add_query($query_array);
                                		
		redirect("welcome/main_page/$query_id");
		
	}
        
        
        
    public function main_page()
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
              //  print_r($query_parsed);
          $results=$this->quartos_model->listar_my_search_posts_main($query_parsed,$limit,$this->uri->segment(4,0),$status);                        
      // print_r($results);
          
          $this->data['posts']=$results['rows'];
          
        //  print_r($this->data['posts']);
          $this->data['num_results'] = $results['num_rows'];
          
          
         
          /* Pagination  data */   	
          $config['base_url'] = site_url("welcome/main_page/$query_id");
  
          $config['total_rows'] = $this->data['num_results'];
	  $config['uri_segment'] = 4;
          $config['per_page'] = $limit;

	
          $this->pagination->initialize($config);
          
     
          $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
          $this->template->write_view('head', 'html/head');
          $this->template->write_view('header', 'html/header');
          $this->template->write_view('content', 'main/main_page',$this->data,true);
          $this->template->write_view('footer', 'footer/footer');
          $this->template->render();
        
         
    }
    
     /**************************************************************************/
     /**************************************************************************/
     /**************************************************************************/
    
    
        public function contact()
	{
             //$this->load->view('welcome_message');
        
             $DContent['page_details'] = array('page_title' => 'Index of dinispt');
   	     $Dfooter = array();
	       $Dmeta = array('meta_title'=>'Welcome to IMO4/BemVindo ao IMO4','meta_descricao'=>'Real estate web site / Site de imoveis');


             
             
	     $this->template->write_view('meta', 'html/meta',  $Dmeta, true);
   	     $this->template->write_view('head', 'html/head');
             $this->template->write_view('header', 'html/header');
             $this->template->write_view('content', 'main/contact',$DContent,true);
   	     $this->template->write_view('footer', 'footer/footer');
   	     $this->template->render();
	}
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */