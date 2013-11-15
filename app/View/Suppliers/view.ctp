
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('sửa'), array('action' => 'edit', $supplier['Supplier']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $supplier['Supplier']['id']), array('class' => ''), __('Bạn có muốn xóa thông tin của "%s"?', $supplier['Supplier']['nameSupplier'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="suppliers view">

			<h2><?php  echo __('Nhà cung cấp'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Tên nhà cung cấp'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['nameSupplier']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Điện thoại'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>        <td><strong><?php echo __('Fax'); ?></strong></td>
        <td>
            <?php echo h($supplier['Supplier']['fax']); ?>
            &nbsp;
        </td>
</tr>
<tr>		<td><strong><?php echo __('Di động'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['mobile']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tài khoản ngân hàng'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['accountBank']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tên ngân hàng'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['bank']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Website'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['website']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nick Yahoo'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['nickYahoo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nick Skype'); ?></strong></td>
		<td>
			<?php echo h($supplier['Supplier']['nickSkype']); ?>
			&nbsp;
		</td>
</tr>
					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
