

<h3><?php echo $this->lang->line('editar_ad');?></h3>


<?php if (isset($message)){ ?>
   <h3 style="color:red"><?php echo $message ?></h3>
<?php } ?>

 
<?php echo form_open("quartos/editar/{$this->uri->segment(3)}"); ?> 

<?php

//print_r($posts);
/* input text titulo */
$data = array(
    'name' => 'titulo',
    'id' => 'titulo',
    'value' => $posts['titulo'],
    'maxlength' => '500',
    'size' => '500',
    'style'=> 'width:100%',
    'placeholder'=>$this->lang->line('blog_post_title')
);


echo form_input($data);


?><br><br>

                <?php
                /* input text endereco */
                $data = array(
                        'name' => 'endereco',
                        'id' => 'endereco',
                        'value' => $posts['endereco'],
                        'maxlength' => '500',
                        'size' => '500',
                        'style'=> 'width:100%',
                        'placeholder'=>$this->lang->line('blog_post_endereco')
                );

	

                    echo form_input($data);       
                ?>
        <br><br>
    <?php

               
$textarea_data = array('id' => 'texto',
                       'name' => 'texto',
                       'rows' => 10,
                       'cols' => 50,
                       'placeholder'=>$this->lang->line('blog_post_text'),
                       'value' => $posts['texto'],
                 );

echo form_textarea($textarea_data);
echo display_ckeditor($merda);
            
?>

         
<p><?php echo form_submit('submit', 'Edit Ad');?></p>

<p><a href="<?php echo site_url('quartos/listar_quartos') ?>"><?php echo $this->lang->line('cancelar');?></a></p>
      
<?php echo form_close();?>
