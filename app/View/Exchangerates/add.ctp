<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			<?php echo __('THÊM NHÀ CUNG CẤP'); ?>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->Form->create('Exchangerate', array('role' => 'form')); ?>
		<table class="table table-striped table-bordered table-advance table-hover">
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Tiền Tệ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameExchangeRate', array('type' => 'text','placeholder' => 'Tên ngoại tệ','label' => false)); ?>
				</td>
			</tr>
			
			
			<tr>
				<td colspan="2">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'exchangerates','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
				</td>
				
			</tr>
			

		</table>
		<?php echo $this->Form->end(); ?>	
	</div>

</div>