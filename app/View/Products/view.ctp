
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Products'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Product'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Suppliers'), array('controller' => 'suppliers', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Units'), array('controller' => 'units', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Exchangerates'), array('controller' => 'exchangerates', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Exchangerates'), array('controller' => 'exchangerates', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
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
