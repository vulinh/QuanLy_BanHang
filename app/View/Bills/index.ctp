<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Hóa Đơn
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                          <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới hóa đơn'), array('action' => 'add'), array('class' => '')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại hóa đơn'), array('controller' => 'typebills', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới loại hóa đơn'), array('controller' => 'typebills', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách người dùng'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
               
            </ul>
        </div>
    </div>
    
<div class="span8">
        <div class="well">

		<div class="bills index">
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<?php echo '<th>'.$this->Paginator->sort('#').'</th>'; 
							echo '<th>'.$this->Paginator->sort('Loại hóa đơn').'</th>';
							echo '<th>'.$this->Paginator->sort('Ngày lập').'</th>'; 
							echo '<th>'.$this->Paginator->sort('Tổng tiền').'</th>'; 
						//	echo '<th>'.$this->Paginator->sort('Người lập').'</th>';
							echo '<th>'.$this->Paginator->sort('Trạng thái').'</th>'; 
                            ?>
							<th class="actions"><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($bills as $bill): ?>
	<tr>
		<?php echo '<td>'.h($bill['Bill']['id']).'</td>';
		echo '<td>'.$this->Html->link($bill['Typebills']['nameTypeBill'], array('controller' => 'typebills', 'action' => 'view', $bill['Typebills']['id'])).'</td>';
		echo '<td>'.h($bill['Bill']['time']).'</td>';
		echo '<td>'.h($bill['Bill']['total']).'</td>';
	//	echo '<td>'.$this->Html->link($bill['Users']['name'], array('controller' => 'users', 'action' => 'view', $bill['Users']['id'])).'</td>';
		echo '<td>'.h($bill['Bill']['status']).'</td>'; 
        ?> 
		
        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $bill['Bill']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$bill['Bill']['id'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $bill['Bill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$bill['Bill']['id'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $bill['Bill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$bill['Bill']['id']), __('Bạn có muốn xóa hóa đơn "%s?"', $bill['Bill']['id'])); ?>
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