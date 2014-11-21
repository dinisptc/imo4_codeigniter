<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Quartos_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        
        date_default_timezone_set("UTC");
    }  
    
    
/********************************************************************************/
/********************************************************************************/
/********************************************************************************/
    
    
function send_mail($reply_to,$message,$subject,$to) {
   $this->load->library( 'email' );
   $this->email->from( 'pedro@imo4.com', 'IMO4.COM' );
   $this->email->to($to);
   $this->email->reply_to($reply_to);
   $this->email->subject($subject);
   $this->email->message($message);
   //$this->email->attach($report_file);
   $this->email->send();
}



//************************************************************************************************////////
//**************************************add a blog post ************************************************//
//************************************************************************************************////////
//************************************************************************************************////////    
    
function add($titulo,$texto,$endereco) {
    
    
        $result = false;
        $new_data=array(			
                         'titulo'=>$titulo,
                         'texto'=>$texto,
                         'endereco'=>$endereco,      
                         'numvisitas'=>1,
			 'datacriacao'=>date("Y-m-d H:i:s", time()),
                         'user_id'=>$this->session->userdata('user_id'),
                         'status'=>0
                         );

        $this->db->set($new_data);
        $this->db->insert('quartos');

        if ($this->db->affected_rows() > 0) {
            $result = $this->db->insert_id();
        }
        return $result;
}
    
/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
 

function get_quartos_posts($status) {
        

        
        $this->db->order_by('quartos.datacriacao', 'DESC');

	$this->db->from('quartos');
        $this->db->where('status',$status);

       
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }



/*************************** listar_myjobs ************************************************/
/******************* Esta função é usada na pagina de listar ******************************/
/******************************************************************************************/

    function listar_my_posts($limit,$offset,$status){
        
        $result=false;
		              
	$this->db->from('quartos');
        $this->db->where('status',$status);

        $this->db->limit($limit, $offset);

        $this->db->order_by('quartos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        return $result;
    }
    
/*************************** listar_myjobs ************************************************/
/******************* Esta função é usada na pagina de listar ******************************/
/******************************************************************************************/
/******************************************************************************************/    
    

    function listar_my_search_posts($query_array,$limit,$offset,$status){
        
                
        $result=false;
		                         
	$this->db->from('quartos');
        $this->db->where('status',$status);

        $this->db->limit($limit, $offset);
        
        if($query_array!=false)            
        {
                        
            if (strlen($query_array['titulo'])) {
              $this->db->like('titulo', $query_array['titulo']);
            }
            if (strlen($query_array['texto'])) {
                $this->db->like('texto', $query_array['texto']);
            }
            
        }
      
        $this->db->order_by('quartos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        
        $ret['rows']=$result;
        
                // count query
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('quartos');
		
                if($query_array!=false)            
                {
                        
                 if (strlen($query_array['titulo'])) {
                  $q->like('titulo', $query_array['titulo']);
                 }
                 
                 
                 if (strlen($query_array['texto'])) {
                $q->like('texto', $query_array['texto']);
                  }
            
                }
	
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
        
   
        
        return $ret;
    }
    

    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
    /*     * ************* UPDATE VISITAS ************************************ */
    /***************************************************************************/
    
    
    function update_visitas($idquartos) {

        
        $post=$this->get_post($idquartos);

        $numvisitas=$post['numvisitas']+1;


	$data = array(
               'numvisitas' => $numvisitas
            );

        $this->db->where('idquartos', $idquartos);
        $this->db->update('quartos', $data); 

        if ($this->db->affected_rows() >= 0) {
            $result = true;
        }
        return $result;
    }

    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
        
    function get_post($idquartos) 
    {
                
        $result = false;

        
        $this->db->from('quartos');
        
        
	$this->db->where('idquartos', $idquartos);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result =$query->row_array();
        } else {
            $result = false;
        }
        
        return $result;
       
    }
    
    
    
     
    /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
  
    
    function add_query($query_array) {
    
    
        $result = false;
        $new_data=array(			
                        'query_string' => http_build_query($query_array)
                         );

        $this->db->set($new_data);
        $this->db->insert('ci_query');

        if ($this->db->affected_rows() > 0) {
            $result = $this->db->insert_id();
        }
        return $result;
     }
     
     /*************************************************************************/
     /*************************************************************************/
     /*************************************************************************/
     
     function load_query($query_id) {
		

            
        $result = false;

        
        $this->db->from('ci_query');
        
        
	$this->db->where('id', $query_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
        } else {
            $result = false;
        }
        
        parse_str($result['query_string'], $result);
        
        return $result;
		
	}
        
        
     /*************************************************************************/
     /*************************************************************************/
     /*************************************************************************/
     /*************************************************************************/
        
        
    function update($post_id,$data) {

        $result = false;


        $new_data=array( 'titulo'=>$data['titulo'],
			 'texto'=>$data['texto'],
                         'endereco'=>$data['endereco']
                        );

        $this->db->set($new_data);
        $this->db->where('idquartos', $post_id);
        $this->db->update('quartos');

        if ($this->db->affected_rows() >= 0) {
            $result = true;
        }
        return $result;
    }
    
    
    /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
    
    
     function delete($id){
         
	$this->db->where('idquartos', $id);	
        $this->db->delete('quartos');
                
    }
    
    
     /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
    
    
     function delete_imagem($id){
         
	$this->db->where('idfotosquartos', $id);	
        $this->db->delete('fotosquartos');
                
    }   
    
/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
//aprovar

function get_quartos_posts_aprovar() {
        
        
        $this->db->order_by('quartos.datacriacao', 'DESC');

	$this->db->from('quartos');
        $this->db->where('status',0);
       
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }
    
/*************************** listar_myjobs ************************************************/
/******************* Esta função é usada na pagina de listar ******************************/
/******************************************************************************************/

    function listar_my_posts_aprovar($limit,$offset){
        $result=false;
		              
      
     
	$this->db->from('quartos');
        $this->db->where('status',0);

        $this->db->limit($limit, $offset);



        $this->db->order_by('quartos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        return $result;
    }
    
    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
    /*     * ************* UPDATE status ************************************ */
    /***************************************************************************/
    
    
    function update_aprovar($idquartos) {

        
        $post=$this->get_post($idquartos);

  


	$data = array(
               'status' => 1
            );

        $this->db->where('idquartos', $idquartos);
        $this->db->update('quartos', $data); 

        if ($this->db->affected_rows() >= 0) {
            $result = true;
        }
        return $result;
    }
    
    
/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
//get_quartos_posts_editar
       
function get_quartos_posts_editar() {
        

	
        
        if($this->ion_auth->is_admin()) 
        {
         $this->db->from('quartos');
                
        }else
        {
         $this->db->from('quartos');        
         $this->db->where('user_id',$this->session->userdata('user_id'));
            
        }
        
        $this->db->order_by('quartos.datacriacao', 'DESC');
        
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }
    

/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
    
function listar_my_posts_editar($limit,$offset){
    
    
        $result=false;
		              
      
     
        if($this->ion_auth->is_admin()) 
        {
         $this->db->from('quartos');
                
        }else
        {
         $this->db->from('quartos');        
         $this->db->where('user_id',$this->session->userdata('user_id'));
            
        }

        $this->db->limit($limit, $offset);



        $this->db->order_by('quartos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        return $result;
    }
    
/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
 
    
function add_fotos($idquartos,$filename) {
    
    
        $result = false;
        $new_data=array(			
                         'idquarto'=>$idquartos,
                         'file_name'=>$filename,
                         'user_id'=>$this->session->userdata('user_id')
                    
                         );

        $this->db->set($new_data);
        $this->db->insert('fotosquartos');

        if ($this->db->affected_rows() > 0) {
            $result = $this->db->insert_id();
        }
        return $result;
}


/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/

    function get_post_imagens($idquartos) 
    {
                
        $result = false;

        
        $this->db->from('fotosquartos');
        
        
	$this->db->where('idquarto', $idquartos);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        return $result;
       
    }
    

/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/

    function get_post_imagem($idfoto) 
    {
                
        $result = false;

        
        $this->db->from('fotosquartos');
        
        
	$this->db->where('idfotosquartos', $idfoto);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
        } else {
            $result = false;
        }
        
        return $result;
       
    }
    
    /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
    
    function get_numero_de_anuncios($user_id) {
        
        
       

	$this->db->from('quartos');
        $this->db->where('user_id',$user_id);
       
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }
    
    
        /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
    
    function get_numero_de_anuncios_status($user_id,$status) {
                       
	$this->db->from('quartos');
        $this->db->where('user_id',$user_id);
        $this->db->where('status',$status);
       
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }
    
    /**************************************************************************/
    /**************************************************************************/
    /**************************************************************************/
        function update_paydate($user_id) {

        
        $post=$this->get_user($user_id);

        $date=date('Y-m-d', strtotime("+12 month"));

        //print_r($date);
	$data = array(
               'paydate' => $date
            );

        $this->db->where('id', $user_id);
        $this->db->update('users', $data); 

        if ($this->db->affected_rows() >= 0) {
            $result = true;
        }
        return $result;
    }

    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
        
    function get_user($user_id) 
    {
                
        $result = false;
        
        $this->db->from('users');
        
      	$this->db->where('id', $user_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result =$query->row_array();
        } else {
            $result = false;
        }
        
        return $result;
       
    }
    
    
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
        
    function get_pay_date($user_id) 
    {
                
        $result = false;

        
        $this->db->from('users');
        
        
	$this->db->where('id', $user_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result =$query->row_array();
        } else {
            $result = false;
        }
        
        return $result;
       
    }
    
    
//************************************************************************************************////////
//**************************************add a blog post ************************************************//
//************************************************************************************************////////
//************************************************************************************************////////    
    
function add_pagamentos($texto) {
    
    
        $result = false;
        $new_data=array(			
                      
                         'info_texto'=>$texto,                         
			 'datacriacao'=>date("Y-m-d H:i:s", time()),
                         'user_id'=>$this->session->userdata('user_id'),
          
                         );

        $this->db->set($new_data);
        $this->db->insert('pagamentos');

        if ($this->db->affected_rows() > 0) {
            $result = $this->db->insert_id();
        }
        return $result;
}


/*************************** listar_myjobs ************************************************/
/******************* Esta função é usada na pagina de listar ******************************/
/******************************************************************************************/

    function listar_my_posts_faturas($limit,$offset){
        
        $result=false;
		              
	$this->db->from('pagamentos');
      

        $this->db->limit($limit, $offset);

        $this->db->order_by('pagamentos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        return $result;
    }
    
/*******************************************************************************/
/*******************************************************************************/
/*******************************************************************************/
    
    
    function get_faturas_posts() {
        

        
        $this->db->order_by('pagamentos.datacriacao', 'DESC');

	$this->db->from('pagamentos');
      

       
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        } else {
            $result = false;
        }


        return $result;

    }

    
    /*************************** listar_myjobs ************************************************/
/******************* Esta função é usada na pagina de listar ******************************/
/******************************************************************************************/
/******************************************************************************************/    
    

    function listar_my_search_posts_main($query_array,$limit,$offset,$status){
        
                
        $result=false;
		                         
	$this->db->from('quartos');
        $this->db->where('status',$status);

        $this->db->limit($limit, $offset);
        
        if($query_array!=false)            
        {
                        
            if (strlen($query_array['titulo'])) {
              $this->db->like('titulo', $query_array['titulo']);
            }
//            if (strlen($query_array['texto'])) {
//                $this->db->like('texto', $query_array['texto']);
//            }
            
        }
      
        $this->db->order_by('quartos.datacriacao', 'DESC'); 

	$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $result[] = $row;
            }
        }
        
        $ret['rows']=$result;
        
                // count query
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('quartos');
		
                if($query_array!=false)            
                {
                        
                 if (strlen($query_array['titulo'])) {
                  $q->like('titulo', $query_array['titulo']);
                 }
                 
                 
//                 if (strlen($query_array['texto'])) {
//                $q->like('texto', $query_array['texto']);
//                  }
            
                }
	
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
        
   
        
        return $ret;
    }
    
    
}//class