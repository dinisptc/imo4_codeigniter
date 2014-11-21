
<hr>
    
    <?php

    if (isset($posts) && is_array($posts)) {
?>
        <h3></h3>
        <br/>
        <br/>
        
        <?php echo form_open('welcome/search_index'); ?>
        
        
		<div>
	        <input type="text" name="titulo" id="titulo" placeholder="<?php echo $this->lang->line('placeholder_titulo');?>"  style="width:100%" value="<?php echo set_value('titulo'); ?>" />	      
		</div>
        
        	<div>
			<center><?php echo form_submit('action',$this->lang->line('search')); ?></center>
		</div>
         	
        <?php echo form_close(); ?>
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
          <br>
     
        <?php echo $this->lang->line('ad_data').$row['datacriacao']; ?>
            
        <br/> 

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

    
	
	
