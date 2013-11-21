
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			<?php echo __('NHẬP HÀNG'); ?>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
			<?php echo $this->Form->create('Detailstock', array('action' => 'import')); ?>
	<table class="table table-striped table-bordered table-advance table-hover">
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idProduct',$dataProduct) ?>
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('quatity', array('label'=>false,'div'=>false, 'placeholder' => 'Số Lượng Nhập','class' => '')); ?>
					&nbsp;
				</td>
			</tr>

			<!--<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng Xuất'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('quatityExport', array('type' => 'number','placeholder' => 'Số Lượng Xuất','label'=>false,'div'=>false,'class' => 'form-control')); ?>
				</td>
			</tr>-->

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Kho'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idStock',$dataStock); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Bill'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->text('idBill',array('value'=>'1')); ?>
					&nbsp;
				</td>
			</tr>

			<!-- <tr>
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
					<?php echo $this->Form->input('wholesale', array('type' => 'number','div'=>false,'label'=>false,'placeholder' => 'Giá bán lẻ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr> -->

			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Ngày Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('timeImport', array('div'=>false,'label'=>false,'class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr> -->

			<!--<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Ngày Xuất'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('timeExport', array('div'=>false,'label'=>false,'class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>-->
			
			<tr>
				<td colspan="3">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'detailstocks','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
				</td>
				
			</tr>
	</table>

		<?php echo $this->Form->end(); ?>	
	</div>
</div>