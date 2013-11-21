
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			THÊM ĐƠN VỊ TÍNH MỚI
		</div>
	</div>
</div>
			<?php echo $this->Form->create('Unit', array('action' => 'add')); ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-advance table-hover">
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Đơn Vị Tính'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameUnit', array('type' => 'text', 'label' => 'Tên đơn vị','class' => 'form-control')); ?>
				</td>
			</tr>
			
			<tr>
				<td colspan="3">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'units','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
				</td>
				
			</tr>

			</table>
			<?php echo $this->Form->end(); ?>


			
	</div>

</div>