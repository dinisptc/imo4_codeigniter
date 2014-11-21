<?php

    if (isset($posts)) {
?>
<section class="grid-wrap" >
    
    
    		<div class="grid col-one-half mq2-col-full">
<p>
            <label for="idquartos"><?php echo $this->lang->line('id');?></label>
	 
           <?php echo $posts['idquartos']; ?> 
	   </p>
    
      	   <label for="title"><?php echo $this->lang->line('validation_titulo');?></label>
	 
           <?php echo $posts['titulo']; ?> 
	   </p>

           <p>
      	   <label for="datacriacao"><?php echo $this->lang->line('ad_data');?></label>
	 
           <?php echo $posts['datacriacao']; ?> 
	   </p> 

           <p>
      	   <label for="numvisitas">Number of visitors:</label>
	
           <?php echo $posts['numvisitas']; ?> 

	   </p>

           <p>
      	   <label for="texto"><?php echo $this->lang->line('validation_texto');?></label>
	 

           <?php echo  $posts['texto']; ?>
  
           

	   </p>
                  <p>
                  <?php
                  if(isset($posts['endereco']) && ($posts['endereco']!=null))
       {    
          echo $posts['endereco'];       
         //-echo $map['html'];          
       }
           ?>
         </p>
            <p>
           <?php
            $whoemail=$this->quartos_model->get_pay_date($posts['user_id']);
           ?>
           <a href="mailto:<?php echo $whoemail['email']; ?>?Subject=Resposta ao anuncio pelo IMO4.COM:<?php echo $posts['titulo']; ?>" target="_top">
           <input type="submit" class="submit" value="Contacto/Contact" /></a>
           
           
	   </p>
           <p>
           <!--http://localhost/imo4/index.php/quartos/detalhes/121-->
           
           
           <div class="fb-share-button" data-href="http://www.imo4.com/index.php/quartos/detalhes/<?php echo $posts['idquartos']; ?>"  data-type="button_count"></div>
           
           
           </p>


       <?php 
       
     /*  if(isset($posts['endereco']) && ($posts['endereco']!=null))
       {    
          echo $posts['endereco'];       
         //-echo $map['html'];          
       }*/
       
       ?>
       
           
           


             
            <?php echo anchor('quartos/listar_quartos/', 'Back to List/Volta Para a Lista'); ?>

		</div>
    
    
    
<div class="slider grid col-one-half mq2-col-full">
  <div class="flexslider">
		     <div class="slides">
   <?php 
         
        $imagens=$this->quartos_model->get_post_imagens($posts['idquartos']);
        if (isset($imagens) && is_array($imagens)) {
        foreach($imagens as $img)
        {
            
          $images_config = $this->config->item('images');
                                        
          if ($img['file_name'] != '')
          {          
            $images_thumb_dir=$images_config['path_for_view'].$img['user_id'].'/'.$img['idquarto'].'/big/';
            
         
          ?>

	       <div class="slide">
		           	<figure>
		                      <img src="<?php echo base_url().'get_image.php?i='.$images_thumb_dir.$img['file_name'];?>" title="" alt="thumb_<?php echo $img['idquarto']; ?>" width="100" height="100"/>        
		                 <figcaption>
		                 	<div>
		                 	<h5>IMO4</h5>
		                 	
		                 	</div>
		                 </figcaption>
		             	</figure>
		           </div>

         
          <?php
    

 
          }//if
          
          
        
        }//for each images
        
        }//if isset isarray
        
        ?>
 </div>

		          </div>
		   </div>
	
		         </section> 


	
		   
		
<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="<?php echo base_url()."js/jquery.flexslider-min.js"?>"></script>
<script src="<?php echo base_url()."js/scripts.js"?>"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

           

                


<?php } ?>
