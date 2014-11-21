
       <header class="grid col-full">
			
		
       
       </header>


       <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
           
        <?php echo form_open("quartos/pagamento/"); ?> 
        <h2>
        <?php if(isset($message))
            
            echo $message;
            
        ?>       
        </h2>
           
           
           
           <h4><?php echo $this->lang->line('paraterilimitados');?> <strong>123 €</strong> <?php echo $this->lang->line('impostosincluidos');?></h4>
           
           <h4><?php echo $this->lang->line('efectuarpagamento');?></h4>
           <h4>
               
           Nº Conta: 	112.10.001924-2 PARTICULARES <br>
           Nome Cliente: 	ANTONIO PEDRO LEITE PEREIRA DINIS<br>
           Interveniência: 	TITULAR<br>
           NIB: 	0036.0112.99100019242.84<br>
           IBAN: 	PT50.0036.0112.99100019242.84<br>
           BIC/SWIFT: 	MPIOPTPL<br>

           </h4>
           
           <h4>
             <?php echo $this->lang->line('aofazeratransferencia');?><strong> <?php echo $this->session->userdata('user_id') ?></strong>
               <br>
               <?php echo $this->lang->line('qqquestao');?> 00351 960411402
           </h4>

           <h4><?php echo $this->lang->line('preencherdadosrecibos');?></h4>
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
           
           
                           <br><br>
				
		<input type="submit" class="submit" value="<?php echo $this->lang->line('gravar');?>" />
		
	</form>
        
        </section>