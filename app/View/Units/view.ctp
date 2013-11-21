
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			ĐƠN VỊ TÍNH
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">			
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-advance table-hover">
					<tbody>
						<tr>		<td><strong><?php echo __('Tên đơn vị'); ?></strong></td>
		<td>
			<?php echo h($unit['Unit']['nameUnit']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
	
			
			
	</div>

</div>
<?php echo $this->Html->link('Quay Lại',array('controller'=>'units','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>
