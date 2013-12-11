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
	<div class="span9 offset1">
		<div class="tab-content">
		  <div class="tab-pane active" id="not_yet">
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>Thời gian</th>
			            <th>Số tiền</th>
			            <th>Loại</th>
			            <th>Người lập</th>
			            <th>Trạng thái</th>
					</tr>
				</thead>
				<?php
					foreach ($dataExpense as $expense) {
			            echo "<tr><td>".$expense['Expense']['time']."</td>";
			            echo "<td>".number_format($expense['Expense']['money'])."</td>";
			            echo "<td>".$expense['typebills']['nameTypeBill']."</td>";
			            echo "<td>".$expense['users']['name']."</td>";
			            if($expense['bills']['status']==1){
			                 echo '<td>Đã thanh toán</td>';
			             }
			             else{
			                 echo '<td>Chưa thanh toán</td>';
			             }
			            echo "</tr>";
			        }
				 ?>
				 <tfoot>
				 	<tr>
				 		<th colspan="7" class="ts-pager form-horizontal tablesorter-pager" data-column="0">
							<?php echo $this->Paginator->prev(__('<', true), array(), null, array('class'=>'disabled','escape'=>false));?>
							<?php
								echo $this->Paginator->counter(array(
								'format' => __('<span class="pagedisplay">{:start}- {:end} </span>')
								));
							?>
							<?php echo $this->Paginator->next(__('>', true), array(), null, array('class'=>'disabled','escape'=>false));?>
						</th>
				 	</tr>
				 </tfoot>
			</table>
		</div>

		<div class="tab-pane" id="done">
		</div>
	</div>
</div>

</div>
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

