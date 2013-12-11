
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			<?php echo __('THÊM NHÀ CUNG CẤP'); ?>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
			<?php echo $this->Form->create('Supplier', array('action' => 'add')); ?>
	<table class="table table-striped table-bordered table-advance table-hover">
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Nhà Cung Cấp'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameSupplier', array('type' => 'text','label'=>false,'div'=>false, 'placeholder' => 'Tên nhà cung cấp','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Điện Thoại'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('phone', array('label'=>false,'div'=>false, 'placeholder' => 'Điện thoại','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Fax'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('fax', array('type' => 'text','placeholder' => 'Fax','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Di Động'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('mobile', array('type' => 'text','placeholder' => 'Di động','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Email'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('email', array('placeholder' => 'Email','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tài Khoản Ngân Hàng'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('accountBank', array('type' => 'text','label'=>false,'div'=>false,'placeholder' => 'Tài khoản ngân hàng','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tài Khoản Ngân Hàng'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('accountBank', array('type' => 'text','label'=>false,'div'=>false,'placeholder' => 'Tài khoản ngân hàng','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
        
     		<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Ngân Hàng'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('bank', array('type' => 'text','placeholder' => 'Tên ngân hàng','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Website'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('website', array('type' => 'text','placeholder' => 'Website','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Yahoo'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nickYahoo', array('type' => 'text','placeholder' => 'Nick yahoo','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Skype'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo  $this->Form->input('nickSkype', array('type' => 'text','placeholder' => 'Nick Skype','label'=>false,'div'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'suppliers','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
				</td>
				
			</tr>
	</table>

		<?php echo $this->Form->end(); ?>	
	</div>
</div>