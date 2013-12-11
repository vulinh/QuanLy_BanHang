<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Thông Tin
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="list-group-item"><?php echo $this->Html->link(__('Thêm thông tin'), array('action' => 'add'), array('class' => '')); ?></li>
            </ul>
        </div>
    </div>
<div class="span8">
        <div class="well">

		<div class="infos index">
		
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<?php echo '<th>'.$this->Paginator->sort('#').'</th>';
							echo '<th>'.$this->Paginator->sort('name').'</th>'; 
				//			echo '<th>'.$this->Paginator->sort('taxID').'</th>';
							echo '<th>'.$this->Paginator->sort('phone').'</th>';
				//			echo '<th>'.$this->Paginator->sort('address').'</th>';
							echo '<th>'.$this->Paginator->sort('businessLicense').'</th>';
				//			echo '<th>'.$this->Paginator->sort('fax').'</th>';
				//			echo '<th>'.$this->Paginator->sort('website').'</th>';
							echo '<th>'.$this->Paginator->sort('email').'</th>';
				//			echo '<th>'.$this->Paginator->sort('field').'</th>';
				//			echo '<th>'.$this->Paginator->sort('president').'</th>';
				//			echo '<th>'.$this->Paginator->sort('logo').'</th>'; 
                            ?>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($infos as $info): ?>
	<tr>
		<?php echo '<td>'.h($info['Info']['id']).'</td>';
		echo '<td>'.h($info['Info']['name']).'</td>';
	//	echo '<td>'.h($info['Info']['taxID']).'</td>';
		echo '<td>'.h($info['Info']['phone']).'</td>'; 
	//	echo '<td>'.h($info['Info']['address']).'</td>';
		echo '<td>'.h($info['Info']['businessLicense']).'</td>';
	//	echo '<td>'.h($info['Info']['fax']).'</td>'; 
	//	echo '<td>'.h($info['Info']['website']).'</td>';
		echo '<td>'.h($info['Info']['email']).'</td>'; 
	//	echo '<td>'.h($info['Info']['field']).'</td>'; 
	//	echo '<td>'.h($info['Info']['president']).'</td>';
	//	echo '<td>'.h($info['Info']['logo']).'</td>'; 
        ?>

        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $info['Info']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$info['Info']['name'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $info['Info']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$info['Info']['name'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $info['Info']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$info['Info']['name']), __('Bạn có muốn xóa thông tin "%s?"', $info['Info']['name'])); ?>
        </td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Trang {:page}/{:pages} - hiển thị {:current}/{:count} - từ {:start}, đến {:end}')
					));
				?>
			</small></p>

			<ul class="pagination" style = 'list-style:none'>
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div>

</div>