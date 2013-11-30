<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            TIỀN TỆ
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
				<table class="table table-striped table-bordered table-advance table-hover">
					<tbody>
						<tr>		<td><strong><?php echo __('Tên ngoại tệ'); ?></strong></td>
		<td>
			<?php echo h($exchangerate['Exchangerate']['nameExchangeRate']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->


			
	</div>

</div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'exchangerates','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>
