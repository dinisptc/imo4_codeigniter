		<a href="<?php echo site_url('welcome/index') ?>" class="logo fleft">
                    <img src="<?php echo base_url()."/img/logo.png"?>" alt="imo4 logo" >
			
		</a>
		
		<nav class="fright">
			<ul>
				<li><a href="<?php echo site_url('welcome/index') ?>" class="navactive"><?php echo $this->lang->line('user_home');?></a></li>
		                <li><a href="<?php echo site_url('welcome/contact') ?>"><?php echo $this->lang->line('user_contacto');?></a></li>
                             
			</ul>
	
			<ul>
				<li><a href="<?php echo site_url('quartos/listar_quartos') ?>"><?php echo $this->lang->line('user_imoveis');?></a></li>
                                <li> <a href="<?php echo site_url('quartos/search_quartos') ?>"><?php echo $this->lang->line('pesquisa_imoveis');?></a></li>
				
			</ul>
                    	<ul>
				<li><a href="<?php echo site_url('welcome/english') ?>">English</a></li>
				<li><a href="<?php echo site_url('welcome/portugues') ?>">Português</a></li>                          

			</ul>
                        <ul>
                            
                                <?php 
                            	if (!$this->ion_auth->logged_in()){
		               ?>
				<li><a href="<?php echo site_url('auth/login') ?>"><?php echo $this->lang->line('user_login');?></a></li>
				 <?php }else { ?>
                                
                                <li><a href="<?php echo site_url('auth/logout') ?>"><?php echo $this->lang->line('user_logout');?></a></li>
                                
                                <?php } ?>
                                    
                                <li><a href="<?php echo site_url('auth/create_user') ?>"><?php echo $this->lang->line('user_create_user');?></a></li>
                                
                                <li><a href="<?php echo site_url('welcome/myzone') ?>"><?php echo $this->lang->line('user_myzone');?></a></li>
			</ul>
                    
                    
		</nav>
