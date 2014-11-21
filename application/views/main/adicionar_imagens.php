
<h3><?php echo $this->lang->line('gerir_imagens');?></h3>


        <?php if(isset($message))
            
            echo $message;
            
        ?>

 
<?php echo form_open_multipart("quartos/adicionar_imagens/{$this->uri->segment(3)}"); ?> 




<?php if(isset($images) && is_array($images)){ ?>

<?php 
  foreach($images as $img)
  {
   $images_config = $this->config->item('images');
                                        
   if ($img['file_name'] != '')
   {          
    $images_thumb_dir=$images_config['path_for_view'].$img['user_id'].'/'.$img['idquarto'].'/thumbs/';   
 ?> 
 
    <img src="<?php echo base_url().'get_image.php?i='.$images_thumb_dir.$img['file_name'];?>" title="" alt="thumb_<?php echo $img['idquarto']; ?>" width="200" height="200"/>            
    <?php echo anchor('quartos/apagar_imagem/' . $img['idquarto'].'/'.$img['idfotosquartos'],$this->lang->line('apagar_imagem'));?>
    

    <br><br>
    
                
            <?php
            
            } else {
               
                echo $this->lang->line('sem_imagem');
            }
            
            
       }//foreach
            ?>



<?php } ?>
    
          <input type="file" name="userfiles[]" multiple />
    
         
<p><?php echo form_submit('submit',$this->lang->line('gravar_imagem'));?></p>

<p><a href="<?php echo site_url('quartos/listar_quartos') ?>"><?php echo $this->lang->line('cancelar');?></a></p>
      
<?php echo form_close();?>