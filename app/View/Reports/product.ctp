<div class="row-fluid">
	  <div class="span12">
		<ul class="nav nav-tabs" id="tab_NV">
		  <li class="active">
		  	<a href="#" id='all'>Tất Cả</a>
		  </li>
		  <!--  -->
		  <li>
		  	<a href="#" id='today' data-filter-column="0" data-filter-text="<?php echo date('Y-m-d') ?>" >Hôm Nay
		  	</a>
		  </li>
		  <li>
		  	<a href="#" id='this_month' data-filter-column="0" data-filter-text="<?php echo date('Y-m') ?>">Tháng Này
		  	</a>
		  </li>
		  <li>
		  	<a href="#" id='this_year' data-filter-column="0" data-filter-text="<?php echo date('Y-') ?>">Năm Này
		  	</a>
		  </li>	
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span10 offset1">
		<div class="tab-content">
		  <div class="tab-pane active" id="not_yet">
<table class="table table-bordered">
	
	<thead>
		<tr>
			<th>Thời Gian Nhập</th>
			<th>Thời Gian Xuất</th>
			<th>Bill Số</th>
			<th>Kho</th>
			<th>Tên Sản Phẩm</th>
			<th>Số Lượng Nhập</th>
			<th>Số Lượng Xuất</th>
			<th>Loại Hóa Đơn</th>
		</tr>
	</thead>
	<?php
		foreach ($dataDetailstock as $vdataDetailstock) {
			echo "<tr><td>".$vdataDetailstock['Detailstock']['timeImport']."</td>";
			echo "<td>".$vdataDetailstock['Detailstock']['timeExport']."</td>";
			echo "<td>".$vdataDetailstock['Detailstock']['idBill']."</td>";
			echo "<td>".$vdataDetailstock['Stock']['nameStock']."</td>";
			echo "<td>".$vdataDetailstock['Product']['nameProduct']."</td>";
			echo "<td>".$vdataDetailstock['Detailstock']['quatity']."</td>";
			echo "<td>".$vdataDetailstock['Detailstock']['quantityExport']."</td>";	
			
			if($vdataDetailstock['Detailstock']['quatity']==0){
				echo '<td><span class="label label-info">Xuất</span>.</td>';
			}
		
			if($vdataDetailstock['Detailstock']['quantityExport']==0){
				echo '<td><span class="label label-info">Nhập</span>.</td>';
			}
					
			echo "</tr>";
		}
	 ?>
	 <tfoot>
	 	<tr>
	 		<th colspan="7" class="ts-pager form-horizontal tablesorter-pager" data-column="0">
				<!-- <button type="button" class="btn first disabled"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button> -->


				<!-- <button type="button" class="btn prev disabled"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button> -->
				<?php echo $this->Paginator->prev(__('<', true), array(), null, array('class'=>'disabled','escape'=>false));?>
				<?php echo $this->Paginator->numbers();?>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('<span class="pagedisplay"> từ {:start} đến {:end} </span>')
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
</div></div></div></div>

<?php echo $this->Html->script('libs/bootstrap-tab');
echo $this->fetch('script');?>
<script>
	$('#tab_NV a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
  		var filters = [],
      	$t = $(this),
      	col = $t.data('filter-column'),
      	txt = $t.data('filter-text') || $t.text();
      	filters[col] = txt;
      	$.tablesorter.setFilters( $('table.hasFilters'), filters, true );
      	return false;
  	});
</script>

<script>
	$('#tab_NV #all').tab('show');
</script>