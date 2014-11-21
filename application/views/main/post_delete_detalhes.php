

<?php echo form_open("quartos/apagar_post/{$this->uri->segment(3)}"); ?>


<h3><?php echo $this->lang->line('areyousuredelete');?></h3>
<br/>
<br/>

<?php   
    if (isset($posts) && is_array($posts)) {        
?>

           <p>
      	   <label for="title"><?php echo $this->lang->line('validation_titulo');?></label>
	   <br/> 
           <?php echo $posts['titulo']; ?> 
	   </p>

  	   <br>
           <?php echo form_submit('submit',$this->lang->line('apagar'));?>
           <br>

           

     <p><a href="<?php echo site_url('quartos/listar_quartos') ?>"><?php echo $this->lang->line('cancelar');?></a></p>


<?php echo form_close();?>
                    
<?php } ?>

