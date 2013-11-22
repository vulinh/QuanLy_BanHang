
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			<?php echo __('NHẬP HÀNG'); ?>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
			<!--<?php echo $this->Form->create('Detailstock', array('action' => 'import')); ?>-->

<script type="text/javascript">
	
	$(function () {
    // Initialize appendGrid
    $('#tblAppendGrid').appendGrid({
        caption: 'My CD Collections',
        initRows: 1,
        columns: [
                { name: 'Album', display: 'Album', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '160px'} },
                { name: 'Artist', display: 'Artist', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '100px'} },
                { name: 'Year', display: 'Year', type: 'text', ctrlAttr: { maxlength: 4 }, ctrlCss: { width: '40px'} },
                { name: 'Origin', display: 'Origin', type: 'select', ctrlOptions: { 0: '{Choose}', 1: 'Hong Kong', 2: 'Taiwan', 3: 'Japan', 4: 'Korea', 5: 'US', 6: 'Others'} },
                { name: 'Poster', display: 'With Poster?', type: 'checkbox' },
                { name: 'Price', display: 'Price', type: 'text', ctrlAttr: { maxlength: 10 }, ctrlCss: { width: '50px', 'text-align': 'right' }, value: 0 },
                { name: 'RecordId', type: 'hidden', value: 0 }
            ]
    });
    // Handle `Load` button click
    $('#btnLoad').button().click(function () {
        $('#tblAppendGrid').appendGrid('load', [
            { 'Album': 'Dearest', 'Artist': 'Theresa Fu', 'Year': '2009', 'Origin': 1, 'Poster': true, 'Price': 168.9, 'RecordId': 123 },
            { 'Album': 'To be Free', 'Artist': 'Arashi', 'Year': '2010', 'Origin': 3, 'Poster': true, 'Price': 152.6, 'RecordId': 125 },
            { 'Album': 'Count On Me', 'Artist': 'Show Luo', 'Year': '2012', 'Origin': 2, 'Poster': false, 'Price': 306.8, 'RecordId': 127 },
            { 'Album': 'Wonder Party', 'Artist': 'Wonder Girls', 'Year': '2012', 'Origin': 4, 'Poster': true, 'Price': 108.6, 'RecordId': 129 },
            { 'Album': 'Reflection', 'Artist': 'Kelly Chen', 'Year': '2013', 'Origin': 1, 'Poster': false, 'Price': 138.2, 'RecordId': 131 }
        ]);
    });
    // Handle `Serialize` button click
    $('#btnSerialize').button().click(function () {
        alert('Here is the serialized data!!\n' + $(document.forms[0]).serialize());
    });
});
</script>		
	<table class="tblAppendGrid">
			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
			<?php echo $this->Form->select('Detailstock.1.idProduct',$dataProduct) ?>
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('Detailstock.1.quatity', array('label'=>false,'div'=>false, 'placeholder' => 'Số Lượng Nhập','class' => '')); ?>
					&nbsp;
				</td>
			</tr> -->


			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Kho'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('Detailstock.1.idStock',$dataStock); ?>
					&nbsp;
				</td>
			</tr>
			<tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('Detailstock.2.idProduct',$dataProduct) ?>
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('Detailstock.2.quatity', array('label'=>false,'div'=>false, 'placeholder' => 'Số Lượng Nhập','class' => '')); ?>
					&nbsp;
				</td>
			</tr> -->

			

			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Kho'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('Detailstock.2.idStock',$dataStock); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Html->link('Thêm Sản Phẩm',array(),array('class'=>'btn btn-success')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Bill'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->text('Detailstock.1.idBill',array('value'=>'1')); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Bill'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->text('Detailstock.2.idBill',array('value'=>'1')); ?>
					&nbsp;
				</td>
			</tr>

			
			
    		
			<tr>
				<td colspan="3">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'detailstocks','action'=>'index'),array('class'=>'btn btn-success pull-right'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
				</td>
				
			</tr> -->
	</table>

		<!-- <?php echo $this->Form->end(); ?>	-->
	</div>
</div>
