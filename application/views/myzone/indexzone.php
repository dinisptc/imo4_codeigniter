               <header class="grid col-full">
			
			<!--<p class="fleft">Blog</p>-->
		</header>


<section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

    
    <?php
    
    if (isset($total_por_aprovar))
    {
      
        echo $this->lang->line('por_aprovar').':'.$total_por_aprovar;
        
    }
    
    ?>
    <br><br>
        <?php
    
    if (isset($total_online))
    {
        
        echo $this->lang->line('online').':'.$total_online;
  
        
    }
    
    ?>
    
    
</section>



		<aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">
				
		
		
			
			<div class="widget">
			<h2>My Zone Menu</h2>
			<ul>
		
	                        <li><a href="<?php echo site_url('quartos/create_quartos_post') ?>"><?php echo $this->lang->line('blog_create_post');?></a></li>
                                <li><a href="<?php echo site_url('auth/change_password') ?>"><?php echo $this->lang->line('change_password');?></a></li>
                                
                                <?php if($this->ion_auth->is_admin()) { ?>
                                <li><a href="<?php echo site_url('auth/index') ?>"><?php echo $this->lang->line('user_usermanager');?></a></li>
                                <li><a href="<?php echo site_url('quartos/listar_quartos_aprovar') ?>"><?php echo $this->lang->line('aprovar');?></a></li>     
                                <li><a href="<?php echo site_url('quartos/listar_faturas') ?>"><?php echo $this->lang->line('pedidosderecibo');?></a></li> 
                                <?php } ?>
                                
                                 <li><a href="<?php echo site_url('quartos/listar_quartos_editar') ?>"><?php echo $this->lang->line('gerir_anuncios');?></a></li>
			</ul>
			</div>
			
			
		</aside>