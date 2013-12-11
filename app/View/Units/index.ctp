<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			ĐƠN VỊ TÍNH
		</div>
	</div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Mới   ',array('controller'=>'units','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>

<div class="row-fluid">
	<div class="span12">
        <div class="well">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-advance table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('#'); ?></th>
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
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $unit['Unit']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$unit['Unit']['id'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $unit['Unit']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$unit['Unit']['id'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $unit['Unit']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$unit['Unit']['id']), __('Bạn có muốn xóa thông tin của "%s"?', $unit['Unit']['id'])); ?>
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
			
	
	     </div>
	</div>

</div>