              <header class="grid col-full">
			
			<!--<p class="fleft">Blog</p>-->
		</header>


       <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
           
           
        <?php if(isset($message))
            
            echo $message;
            
        ?>
           
        <?php echo form_open_multipart('quartos/create_quartos_post');?>
          

           
                <!-- <input type="text" value="<?php //set_value('titulo') ?>" name="titulo" id="titulo" placeholder="<?php echo $this->lang->line('blog_post_title'); //title ?>"  />-->			    
                <?php
                /* input text titulo */
                $data = array(
                        'name' => 'titulo',
                        'id' => 'titulo',
                        'value' => set_value('titulo'),
                        'maxlength' => '1000',
                        'size' => '1000',
                        'style'=> 'width:100%',
                        'placeholder'=>$this->lang->line('blog_post_title')
                );

	

                    echo form_input($data);       
                ?>
           <br><br>
                <?php
                /* input text endereco */
                $data = array(
                        'name' => 'endereco',
                        'id' => 'endereco',
                        'value' => set_value('endereco'),
                        'maxlength' => '500',
                        'size' => '500',
                        'style'=> 'width:100%',
                        'placeholder'=>$this->lang->line('blog_post_endereco')
                );

	

                    echo form_input($data);       
                ?>
           
           
                <br><br>
                <input type="file" name="userfiles[]" multiple />
                <br><br>
                
           
                <!--<textarea type="text" value="<?php //echo $texto ?>" name="texto" id="texto" placeholder="<?php //echo $this->lang->line('blog_post_text'); //text ?>"  rows="10" cols="50"></textarea>-->

                <?php 
                $textarea_data = array('id' => 'texto',
                       'name' => 'texto',
                       'rows' => 10,
                       'cols' => 50,
                       'placeholder'=>$this->lang->line('blog_post_text'),
                       'value' => set_value('texto')
                 );

                echo form_textarea($textarea_data);
                echo display_ckeditor($merda);
                ?>
<!--                <textarea name="texto" id="texto" ></textarea>-->
<?php // echo display_ckeditor($ckeditor); 
                ?>
                                
                <br><br>
				
		<input type="submit" class="submit" value="<?php echo $this->lang->line('gravar');?>" />
		
	</form>
        
        </section>

	