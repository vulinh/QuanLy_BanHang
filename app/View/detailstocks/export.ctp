
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			<?php echo __('XUẤT HÀNG'); ?>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->Form->create('Detailstock', array('action' => 'export')); ?>

	
	<table class="table table-striped table-bordered table-advance table-hover">
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng Nhập'); ?></strong>
				</td>

				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Kho'); ?></strong>
				</td>

				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Bill'); ?></strong>
				</td>

				
			</tr>

			<tr class='control'>
				<td style="width:50%; text-align:center;font-size:15px">
			<?php echo $this->Form->select('Detailstock.1.idProduct',$dataProduct,array('class'=>"product_name")) ?>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('Detailstock.1.quatityExport', array('class'=>'product_quatity', 'label'=>false,'div'=>false, 'placeholder' => 'Số Lượng Xuất')); ?>
				</td>

				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('Detailstock.1.idStock',$dataStock,array('class'=>"stock")); ?>
					&nbsp;
				</td>

				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->text('Detailstock.1.idBill',array('value'=>'1','class'=>'bill')); ?>
				</td>

			
					
				
			</tr>
	
		</table>
		<input type="hidden" id="numberRow" name="numberRow" />
		<span class="btn btn-success" id="btnAddRecord">Thêm Sản Phẩm</span>
		<span class="btn btn-success" id="test">Xóa Sản Phẩm</span>
    		
			
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'detailstocks','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
		
	

		<?php echo $this->Form->end(); ?>
	</div>
</div>

<script type="text/javascript">
	$i=1;
	$first_remove = true;
	$('#btnAddRecord').click(function(event) {
		// .after( document.createTextNode( "Hello" ) );
		$i = $i+1;
		$('#DetailstockExportForm table').append($('.control').last().clone());
	    
	    setElementName($('.product_name').last(),'data[Detailstock]['+$i+'][idProduct]');
	    setElementName($('.product_quatity').last(),'data[Detailstock]['+$i+'][quatityExport]');
	    setElementName($('.stock').last(),'data[Detailstock]['+$i+'][idStock]');
	    setElementName($('.bill').last(),'data[Detailstock]['+$i+'][idBill]');
	    $('#numberRow').val($i);
	});

	$('#test').click(function(event) {
		if($('#DetailstockExportForm table tr').length >2){
		$i = $i-1;
		$('.control').last().remove();
		setElementName($('.product_name').last(),'data[Detailstock]['+$i+'][idProduct]');
		setElementName($('.product_quatity').last(),'data[Detailstock]['+$i+'][quatityExport]');
	    setElementName($('.stock').last(),'data[Detailstock]['+$i+'][idStock]');
	    setElementName($('.bill').last(),'data[Detailstock]['+$i+'][idBill]');
		$('#numberRow').val($i);
		}

		//setElementName($('#control:last input'),$i-1);
	});

	function setElementName(elems, name) {
	  	if ($.browser.msie === true){
		    	$(elems).each(function() {
		      	this.mergeAttributes(document.createElement("<input name='" + name + "'/>"), false);
		    });
	  	} else 
	  	{
	    		$(elems).attr('name', name);
	  	}
	}
	
</script>
<!--<script type="text/javascript">
	
	$(function() {
    $('#tblAppendGrid').appendGrid({
        columns: [
            { name: 'Album', display: 'Album' },
            { name: 'Artist', display: 'Artist', ctrlAttr: { title: 'Please fill in the Artist name!!' }, uiTooltip: { show: true} },
            { name: 'Year', display: 'Year' },
            { name: 'Duration', display: 'Total Duration', type: 'custom', value: '0:00:00',
                customBuilder: function (parent, idPrefix, name, uniqueIndex) {
                    // Prepare the control ID/name by using idPrefix, column name and uniqueIndex
                     var ctrlId = name
                    // Create a span as a container
                    var ctrl = document.createElement('span');
                    // Set the ID and name to container and append it to parent control which is a table cell
                    $(ctrl).attr({ id: ctrlId, name: ctrlId }).appendTo(parent);
                    // Create extra controls and add to container
                    $('<input/>', { type: 'text', maxLength: 1, id: ctrlId + '_Hour' }).css('width', '20px').appendTo(ctrl).spinner({ max: 9, min: 0 });
                    $('<input/>', { type: 'text', maxLength: 2, id: ctrlId + '_Minute' }).css('width', '20px').appendTo(ctrl).spinner({ max: 59, min: 0 });
                    $('<input/>', { type: 'text', maxLength: 2, id: ctrlId + '_Second' }).css('width', '20px').appendTo(ctrl).spinner({ max: 59, min: 0 });
                    // Finally, return the container control
                    return ctrl;
                },
                customGetter: function (idPrefix, name, uniqueIndex) {
                    // Prepare the control ID/name by using idPrefix, column name and uniqueIndex
                    var ctrlId = name
                    // Get the value of spinners
                    var hour = $('#' + ctrlId + '_Hour').spinner('value');
                    var minute = $('#' + ctrlId + '_Minute').spinner('value');
                    var second = $('#' + ctrlId + '_Second').spinner('value');
                    // Return the formatted duration
                    return hour + ':' + (minute < 10 ? '0' + minute : minute) + ':' + (second < 10 ? '0' + second : second);
                },
                customSetter: function (idPrefix, name, uniqueIndex, value) {
                    // Prepare the control ID/name by using idPrefix, column name and uniqueIndex
                     var ctrlId = name
                    // Check the input value and split it to array if valid
                    var sep = null;
                    if (value != null && -1 != value.search(/^[0-9]:[0-9]{1,2}:[0-9]{1,2}$/)) {
                        sep = value.split(':');
                    }
                    // Set the value to different spinners
                    $('#' + ctrlId + '_Hour').spinner('value', sep == null ? 0 : sep[0]);
                    $('#' + ctrlId + '_Minute').spinner('value', sep == null ? 0 : sep[1]);
                    $('#' + ctrlId + '_Second').spinner('value', sep == null ? 0 : sep[2]);
                }
            }
        ]
    });
});
</script>-->	