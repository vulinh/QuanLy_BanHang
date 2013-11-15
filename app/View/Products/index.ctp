
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Product'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Suppliers'), array('controller' => 'suppliers', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Units'), array('controller' => 'units', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Exchangerates'), array('controller' => 'exchangerates', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Exchangerates'), array('controller' => 'exchangerates', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="products index">
		
			<h2><?php echo __('Products'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('nameProduct'); ?></th>
							<th><?php echo $this->Paginator->sort('idCategoryProduct'); ?></th>
							<th><?php echo $this->Paginator->sort('idExchangeRate'); ?></th>
							<th><?php echo $this->Paginator->sort('idUnit'); ?></th>
							<th><?php echo $this->Paginator->sort('price'); ?></th>
							<th><?php echo $this->Paginator->sort('retail'); ?></th>
							<th><?php echo $this->Paginator->sort('wholesale'); ?></th>
							<th><?php echo $this->Paginator->sort('made_in'); ?></th>
							<th><?php echo $this->Paginator->sort('idSupplier'); ?></th>
							<th><?php echo $this->Paginator->sort('import_time'); ?></th>
							<th><?php echo $this->Paginator->sort('warranty_time'); ?></th>
							<th><?php echo $this->Paginator->sort('tag'); ?></th>
							<th><?php echo $this->Paginator->sort('promotion'); ?></th>
							<th><?php echo $this->Paginator->sort('enable'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nameProduct']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Categoryproducts']['id'], array('controller' => 'categoryproducts', 'action' => 'view', $product['Categoryproducts']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Exchangerates']['id'], array('controller' => 'exchangerates', 'action' => 'view', $product['Exchangerates']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Units']['id'], array('controller' => 'units', 'action' => 'view', $product['Units']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['retail']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['wholesale']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['made_in']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Suppliers']['id'], array('controller' => 'suppliers', 'action' => 'view', $product['Suppliers']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['import_time']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['warranty_time']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['tag']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['promotion']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['enable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->