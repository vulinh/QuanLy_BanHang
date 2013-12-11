
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			NHÀ CUNG CẤP
		</div>
	</div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Mới   ',array('controller'=>'suppliers','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="well">
				<table class="table table-striped table-bordered table-advance table-hover">
					<thead style="text-align:center">
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên nhà cung cấp'); ?></th>
							<th><?php echo $this->Paginator->sort('Điện thoại'); ?></th>
							<th><?php echo $this->Paginator->sort('Di động'); ?></th>
							<th><?php echo $this->Paginator->sort('Email'); ?></th>
							<th><?php echo $this->Paginator->sort('Tài khoản ngân hàng'); ?></th>
						<!--
                        	<th style="display:none"><?php echo $this->Paginator->sort('Ngân hàng'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Website'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Nick Yahoo'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Nick Skype'); ?></th>
							<th style="display:none"><?php echo $this->Paginator->sort('Fax'); ?></th>
						-->
                        	<th colspan="3"><?php echo __('Tác vụ'); ?></th>
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
		<?php echo '<td>'.$this->Html->link('<i class="icon-list"></i>',array('controller'=>'suppliers','action'=>'view/'.$supplier['Supplier']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$supplier['Supplier']['nameSupplier'])) ;?>

		<?php echo '&nbsp;'.$this->Html->link('<i class="icon-pencil"></i>',array('controller'=>'suppliers','action'=>'edit/'.$supplier['Supplier']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Cập Nhập '.$supplier['Supplier']['nameSupplier'])) ;?>

		<?php echo '&nbsp;'.$this->Html->link('<i class="icon-remove"></i>',array('controller'=>'suppliers','action'=>'delete/'.$supplier['Supplier']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$supplier['Supplier']['nameSupplier'], __('Bạn có muốn xóa thông tin của "%s"?', $supplier['Supplier']['nameSupplier']))).'</td>' ;?>

		<!-- 	<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $supplier['Supplier']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $supplier['Supplier']['id']), array('class' => 'btn btn-default btn-xs')); ?> -->
		
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
			
		</div>
	
	</div>

</div>