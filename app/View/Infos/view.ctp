<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Thông Tin
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                  <li class="list-group-item"><?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $info['Info']['id']), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $info['Info']['id']), array('class' => ''), __('Bạn có muốn xóa thông tin "%s?"', $info['Info']['name'])); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>
                  
            </ul>
        </div>
    </div>
<div class="span8">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('TaxID'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['taxID']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('BusinessLicense'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['businessLicense']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fax'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['fax']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Website'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['website']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Field'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['field']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('President'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['president']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Logo'); ?></strong></td>
		<td>
			<?php echo h($info['Info']['logo']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			

			
	</div>

</div>
