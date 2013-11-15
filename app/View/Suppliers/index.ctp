
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group" style="list-style:none">
				<li class="list-group-item"><?php echo $this->Html->link(__('Thêm nhà cung cấp'), array('action' => 'add'), array('class' => 'btn btn-default pull-right','style' => 'margin-top: 5px')); ?></li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="suppliers index">
		
			<h2><?php echo __('Danh sách nhà cung cấp'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên nhà cung cấp'); ?></th>
							<th><?php echo $this->Paginator->sort('Điện thoại'); ?></th>
							<th><?php echo $this->Paginator->sort('Di động'); ?></th>
							<th><?php echo $this->Paginator->sort('Email'); ?></th>
							<th><?php echo $this->Paginator->sort('Tài khoản ngân hàng'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Ngân hàng'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Website'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Nick Yahoo'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Nick Skype'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Fax'); ?></th>
							<th class="actions"><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($suppliers as $supplier): ?>
	<tr>
		<td><?php echo h($supplier['Supplier']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['nameSupplier']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['phone']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['email']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['accountBank']); ?>&nbsp;</td>
		<td style="display:none"><?php echo h($supplier['Supplier']['bank']); ?>&nbsp;</td>
		<td style="display:none"><?php echo h($supplier['Supplier']['website']); ?>&nbsp;</td>
		<td style="display:none"><?php echo h($supplier['Supplier']['nickYahoo']); ?>&nbsp;</td>
		<td style="display:none"><?php echo h($supplier['Supplier']['nickSkype']); ?>&nbsp;</td>
		<td style="display:none"><?php echo h($supplier['Supplier']['fax']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $supplier['Supplier']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $supplier['Supplier']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $supplier['Supplier']['id']), array('class' => 'btn btn-default btn-xs'), __('Bạn có muốn xóa thông tin của "%s"?', $supplier['Supplier']['nameSupplier'])); ?>
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

			<ul class="pagination"  style = "list-style:none">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->