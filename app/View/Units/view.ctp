
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group" style = 'list-style:none'>			
						<li class="list-group-item"><?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $unit['Unit']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $unit['Unit']['id']), array('class' => ''), __('Bạn có muốn xóa thông tin của "%s"?', $unit['Unit']['nameUnit'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="units view">

			<h2><?php  echo __('Đơn vị'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Tên đơn vị'); ?></strong></td>
		<td>
			<?php echo h($unit['Unit']['nameUnit']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
