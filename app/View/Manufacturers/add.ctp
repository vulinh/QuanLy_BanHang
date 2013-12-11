<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('THÊM NHÀ SẢN XUẤT'); ?>
        </div>
    </div>
</div> 
<div class="row-fluid">    
	<div class="span12">	
			<?php echo $this->Form->create('Manufacturer', array('action' => 'add')); ?>
			<table class="table table-striped table-bordered table-advance table-hover">
				<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Nhà Sản Xuất'); ?></strong>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameManufacturer', array('label' => false, 'type' => 'text','div' => false)); ?>
				</td>
			</tr>	
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('URL logo'); ?></strong>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('logo', array('label' => false, 'type' => 'text','div' => false)); ?>
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Hiển Thị?'); ?></strong>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('enable', array('div'=>false,'label'=>false,'type' => 'checkbox','checked'=>true, 'value'=>'1')); ?>
					
				</td>
			</tr>
			
			<tr>
				<td colspan=2 style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'manufacturers','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
					&nbsp;
				</td>
			</tr>
			
					
			
					
			
			</table>
			<?php echo $this->Form->end(); ?>
			
				
	
			
	</div>

</div>