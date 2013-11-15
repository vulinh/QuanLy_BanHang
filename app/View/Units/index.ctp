
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group" style = 'list-style:none'>
				<li class="list-group-item"><?php echo $this->Html->link(__('Thêm đơn vị'), array('action' => 'add'), array('class' => 'btn btn-default pull-right','style' => 'margin-top: 5px')); ?></li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="units index">
		
			<h2><?php echo __('Danh sách đơn vị'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên đơn vị'); ?></th>
							<th class="actions"><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($units as $unit): ?>
	<tr>
		<td><?php echo h($unit['Unit']['id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['nameUnit']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $unit['Unit']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $unit['Unit']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $unit['Unit']['id']), array('class' => 'btn btn-default btn-xs'), __('Bạn có muốn xóa thông tin của "%s"?', $unit['Unit']['nameUnit'])); ?>
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
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->