<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			NHÀ SẢN XUẤT
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

				<table class="table table-striped table-bordered table-advance table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('ID'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên nhà sản xuất'); ?></th>
							<th><?php echo $this->Paginator->sort('logo'); ?></th>
							<th><?php echo $this->Paginator->sort('Hiển thị'); ?></th>
							<th colspan=3><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($manufacturers as $manufacturer): ?>
	<tr>
		<td><?php echo h($manufacturer['Manufacturer']['id']); ?>&nbsp;</td>
		<td><?php echo h($manufacturer['Manufacturer']['nameManufacturer']); ?>&nbsp;</td>
		<td><?php echo h($manufacturer['Manufacturer']['logo']); ?>&nbsp;</td>
		<td><?php
                    if($manufacturer['Manufacturer']['enable']==1){
                        $result = 'True';
                    }else{
                        $result = 'False';
                    }
                    echo h($result); 
                ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $manufacturer['Manufacturer']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $manufacturer['Manufacturer']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), array('class' => 'btn btn-default btn-xs'), __('Bạn có muốn xóa thông tin của "%s"?', $manufacturer['Manufacturer']['nameManufacturer'])); ?>
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

                        <ul class="pagination" style="list-style: none">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div>
	
	</div