<?php

    if (isset($posts) && is_array($posts)) {
?>
    


        <br/>
        <a href="<?php echo site_url('quartos/search_quartos') ?>"><?php echo $this->lang->line('pesquisa_imoveis');?></a>
        <br/>
        <br/>
        <br/>

        <table>

        <tbody>
        <tr>        
        <td>
        <?php foreach ($posts as $row) { ?>               
        <?php echo anchor('quartos/detalhes/' . $row['idquartos'],$row['titulo']);?> 
	<br/>
        
       <?php 
         
        $imagens=$this->quartos_model->get_post_imagens($row['idquartos']);
        if (isset($imagens) && is_array($imagens)) {
        foreach($imagens as $img)
        {
            
          $images_config = $this->config->item('images');
                                        
          if ($img['file_name'] != '')
          {          
            $images_thumb_dir=$images_config['path_for_view'].$img['user_id'].'/'.$img['idquarto'].'/thumbs/';
            
         
          ?>
          <img src="<?php echo base_url().'get_image.php?i='.$images_thumb_dir.$img['file_name'];?>" title="" alt="thumb_<?php echo $img['idquarto']; ?>" width="100" height="100"/>            
          <?php
    

 
          }//if
          
          
        
        }//for each images
        
        }//if isset isarray
        
        ?> 
        
        
        <br/>
        <?php echo $this->lang->line('ad_data').$row['datacriacao']; ?>
            
        <br/> 
        <?php if($row['user_id']==$this->session->userdata('user_id') or $this->ion_auth->is_admin() ) { ?>
        <?php echo anchor('quartos/editar/' . $row['idquartos'],$this->lang->line('editar'));?> 
        <?php echo anchor('quartos/apagar_details/' . $row['idquartos'],$this->lang->line('apagar'));?>
        <?php echo anchor('quartos/adicionar_imagens/' . $row['idquartos'],$this->lang->line('gerir_imagens'));?>
        
        <?php } ?>

        <br/>
        <br/>
        <?php } ?>
        </td>
        </tr>

        </tbody>
        </table>
<?php
echo $this->pagination->create_links();?>
    <?php }       else
      {
         echo $this->lang->line('no_results');
      }?>
