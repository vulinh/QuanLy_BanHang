<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            THÔNG TIN NHÀ CUNG CẤP
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
     	<div class="well">
				<table class="table table-striped table-bordered table-advance table-hover">
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
				</table>
			</div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'suppliers','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>

