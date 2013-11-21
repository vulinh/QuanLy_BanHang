<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT THÔNG TIN NHÀ SẢN XUẤT
        </div>
    </div>
</div>

<div class="row-fluid">
     <div class="span12">

		
			<?php echo $this->Form->create('Manufacturer', array('role' => 'form')); ?>
			
			<table class="table table-striped table-bordered table-advance table-hover">

			<tr>
                <td style="width:40%; text-align:center;font-size:15px">
                    <strong><?php echo __('Tên Nhà Sản Xuất'); ?></strong>
                </td>
                <td style="width:40%; text-align:center;font-size:15px">
                    <?php echo $this->Form->input('nameManufacturer', array('label' => 'Tên nhà cung cấp', 'type' => 'text','label' => false)); ?>
                </td>
            </tr>
					
			<tr>
                <td style="width:40%; text-align:center;font-size:15px">
                    <strong><?php echo __('Logo Nhà Sản Xuất'); ?></strong>
                </td>
                <td style="width:40%; text-align:center;font-size:15px">
                   <?php echo $this->Form->input('logo', array('label' => 'URL logo', 'type' => 'text','label' => false)); ?>
                </td>
            </tr>
			
			<tr>
                <td style="width:40%; text-align:center;font-size:15px">
                    <strong><?php echo __('Hiện Thị'); ?></strong>
                </td>
                <td style="width:40%; text-align:center;font-size:15px">
                   <?php echo $this->Form->input('enable', array('type' => 'checkbox')); ?>
                </td>
            </tr>
			
			<tr>
                <td colspan="2">
                    <?php echo $this->Html->link('Quay Lại',array('controller'=>'manufacturers','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
                </td>
                
            </tr>
			
			</table>
			<?php echo $this->Form->end(); ?>
	</div>

</div>