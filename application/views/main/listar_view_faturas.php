<?php





    if (isset($posts) && is_array($posts)) {
?>
    



        <table>

        <tbody>
        <tr>        
        <td>
        <?php foreach ($posts as $row) { ?>               

            
            
	<br/>
        <?php echo "User id :".$row['user_id']; ?>
        <br/> 
         <?php
           $user= $this->quartos_model->get_user($row['user_id']);
           echo "Email :".$user['email'];
      ?>     <br/> 
        <?php echo "Data do pedido de fatura :".$row['datacriacao']; ?>
            
        <br/> 
         <?php echo "Dados do cliente :".$row['info_texto']; ?>
    	


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
