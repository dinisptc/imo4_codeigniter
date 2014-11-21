               <header class="grid col-full">
			
			<!--<p class="fleft">Blog</p>-->
		</header>

<section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

<h3><?php echo lang('index_heading');?></h3>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo $group->name;//echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                        <td><?php echo anchor("auth/edit_user_group/".$user->id, 'Edit user group') ;?></td>
		</tr>
	<?php endforeach;?>
</table>




</section>



		<aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">
				
		
		
			
			<div class="widget">
			<h2>My Zone Menu</h2>
			<ul>
				<li><a href="<?php echo site_url('auth/index') ?>"><?php echo $this->lang->line('user_usermanager');?></a></li>
	
			</ul>
			</div>
			
			
		</aside>