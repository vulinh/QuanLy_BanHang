<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('THÊM SẢN PHẨM'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
	<div class="span12">	
		<?php echo $this->Form->create('Product', array('action' => 'add')); ?>
		<table class="table table-striped table-bordered table-advance table-hover">
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameProduct', array('type' => 'text','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'Tên Sản Phẩm')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('price', array('type' => 'number','div'=>false, 'label'=>false , 'placeholder' => 'Giá','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
				
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá Bán Lẻ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('retail', array('type' => 'number','div'=>false,'label'=>false,'placeholder' => 'Giá bán lẻ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá Bán Sỉ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('wholesale', array('type' => 'number','div'=>false,'label'=>false, 'placeholder' => 'Giá bán sỉ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Ngày Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('import_time', array('label'=>false, 'placeholder' => 'Ngày nhập','div'=>false,'class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Xuất Xứ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo '<br/>'. $this->Form->input('made_in', array('type' => 'text','label'=>false, 'div'=>false,'placeholder' => 'Xuất xứ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Thời Gian Bảo Hành'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('warranty_time', array('type' => 'text','label'=>false, 'div'=>false,'placeholder' => 'Thời gian bảo hành','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tag'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('tag', array('type' => 'text','label'=> false, 'div'=>false,'placeholder' => 'Tag','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Khuyến Mãi'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('promotion', array('type' => 'text','div'=>false,'label'=>false, 'placeholder' => 'Khuyến Mãi','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Nhà Cung Cấp'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idSupplier', $suppliers , array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
         	
         	<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Loại Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idCategoryProduct', $categoryproducts, array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tiền Tệ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idExchangeRate', $exchangerates , array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Đơn Vị Tính'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idUnit', $units, array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
       		
       		<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Hiển Thị'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo '<br/>'.$this->Form->input('enable', array('type' => 'checkbox','div'=>false,'checked'=>true,'label' => false)); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan=2 style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'products','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
					&nbsp;
				</td>
			</tr>

		
		</table>
		<?php echo $this->Form->end(); ?>
	</div>
</div>