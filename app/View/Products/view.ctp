
<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">
		
		<div class="products view">

			<h2><?php  echo __('Product'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('NameProduct'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['nameProduct']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Categoryproducts'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($product['Categoryproducts']['id'], array('controller' => 'categoryproducts', 'action' => 'view', $product['Categoryproducts']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Exchangerates'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($product['Exchangerates']['id'], array('controller' => 'exchangerates', 'action' => 'view', $product['Exchangerates']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Units'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($product['Units']['id'], array('controller' => 'units', 'action' => 'view', $product['Units']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Price'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Retail'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['retail']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Wholesale'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['wholesale']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Made In'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['made_in']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Suppliers'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($product['Suppliers']['id'], array('controller' => 'suppliers', 'action' => 'view', $product['Suppliers']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Import Time'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['import_time']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Warranty Time'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['warranty_time']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tag'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['tag']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Promotion'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['promotion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Enable'); ?></strong></td>
		<td>
			<?php echo h($product['Product']['enable']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
