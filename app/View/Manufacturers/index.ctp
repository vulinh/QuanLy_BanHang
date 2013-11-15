
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
                            <li class="list-group-item" style="list-style: none">
                                    <?php echo $this->Html->link(__('Thêm nhà sản xuất'), array('action' => 'add'), array('class' => 'btn btn-default pull-right','style' => 'margin-top: 5px')); ?>
                                </li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="manufacturers index">
		
			<h2><?php echo __('Nhà sản xuất'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('ID'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên nhà sản xuất'); ?></th>
							<th><?php echo $this->Paginator->sort('logo'); ?></th>
							<th><?php echo $this->Paginator->sort('Hiển thị'); ?></th>
							<th class="actions"><?php echo __('Tác vụ'); ?></th>
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
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->