
<table class="table table-bordered">
	
	<thead>
		<tr>
			<th>Ngày Tháng</th>
			<th>Số Tiền Nợ</th>
			<th>Bill Số</th>
			<th>Nhà Sản Xuất</th>
		</tr>
	</thead>
	<?php
		foreach ($dataDebit as $vdataDebit) {
			echo "<tr><td>".$vdataDebit['Debit']['time']."</td>";
			echo "<td>".$vdataDebit['Debit']['moneyDebit']."</td>";
			echo "<td>".$vdataDebit['Debit']['idBill']."</td>";
			echo "<td>".$vdataDebit['Suppliers']['nameSupplier']."</td>		
			</tr>";
		}
	 ?>
	 <tfoot>
	 	<tr>
	 		<th colspan="7" class="ts-pager form-horizontal tablesorter-pager" data-column="0">
				<!-- <button type="button" class="btn first disabled"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button> -->


				<!-- <button type="button" class="btn prev disabled"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button> -->
				<?php echo $this->Paginator->prev(__('<', true), array(), null, array('class'=>'disabled','escape'=>false));?>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('<span class="pagedisplay">{:start}- {:end} </span>')
					));
				?>
				<!-- <span class="pagedisplay">1 - 20 / 50 (50)</span> --> <!-- this can be any element, including an input -->
				<!-- <button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button> -->
				<?php echo $this->Paginator->next(__('>', true), array(), null, array('class'=>'disabled','escape'=>false));?>
				<!-- <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button> -->
				<!-- <select class="pagesize input-mini" title="Select page size">
					<option selected="selected" value="5">5</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
				</select> -->
				<!-- <select class="pagenum input-mini" title="Select page number"><option>1</option><option>2</option><option>3</option></select> -->

			</th>
	 	</tr>
	 </tfoot>
</table>

