<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			TIỀN TỆ
		</div>
	</div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Mới   ',array('controller'=>'exchangerates','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>

<div class="row-fluid">
	<div class="span12">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-advance table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên ngoại tệ'); ?></th>
							<th colspan=3><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($exchangerates as $exchangerate): ?>
	<tr>
		<td><?php echo h($exchangerate['Exchangerate']['id']); ?>&nbsp;</td>
		<td><?php echo h($exchangerate['Exchangerate']['nameExchangeRate']); ?>&nbsp;</td>

		<?php echo '<td style="width:20px">'.$this->Html->link('<i class="icon-list"></i>',array('controller'=>'exchangerates','action'=>'view/'.$exchangerate['Exchangerate']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$exchangerate['Exchangerate']['nameExchangeRate'])).'</td>' ;?>

		<?php echo '<td style="width:20px">'.$this->Html->link('<i class="icon-pencil"></i>',array('controller'=>'exchangerates','action'=>'edit/'.$exchangerate['Exchangerate']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Cập Nhập '.$exchangerate['Exchangerate']['nameExchangeRate'])).'</td>' ;?>

		<?php echo '<td style="width:20px">'.$this->Html->link('<i class="icon-remove"></i>',array('controller'=>'exchangerates','action'=>'delete/'.$exchangerate['Exchangerate']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$exchangerate['Exchangerate']['nameExchangeRate'], __('Bạn có muốn xóa thông tin của "%s"?', $exchangerate['Exchangerate']['nameExchangeRate']))).'</td>' ;?>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Trang {:page}/{:pages} - hiển thị {:current}/{:count} - từ {:start}, đến {:end}')
					));
				?>
			</small></p>

			<ul class="pagination" style = "list-style:none">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
	</div>

</div>