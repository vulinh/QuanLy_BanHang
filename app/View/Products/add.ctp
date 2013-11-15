
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Categoryproducts'), array('controller' => 'categoryproducts', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Suppliers'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Units'), array('controller' => 'units', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Exchangerates'), array('controller' => 'exchangerates', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Exchangerates'), array('controller' => 'exchangerates', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Product'); ?></h2>

		<div class="products form">
		
			<?php echo $this->Form->create('Product', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('nameProduct', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                                                <label for="ProductIdCategoryProduct">Loại sản phẩm</label>
						<?php echo $this->Form->select('idCategoryProduct', $categoryproducts , array('class' => 'form-control','style' => 'margin: 5px;')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                                                <label for="ProductidExchangeRate">id ExchangeRate</label>
                                                <?php echo $this->Form->select('idExchangeRate', $exchangerates , array('class' => 'form-control','style' => 'margin: 5px;')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                                            <label for="ProductidUnit">id Unit</label>
                                                <?php echo $this->Form->select('idUnit', $units , array('class' => 'form-control','style' => 'margin: 5px;')); ?>
						
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('price', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('retail', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('wholesale', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('made_in', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                                                <label for="ProductidSupplier">id Supplier</label>
                                                <?php echo $this->Form->select('idSupplier', $suppliers , array('class' => 'form-control','style' => 'margin: 5px;')); ?>
						
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('import_time', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('warranty_time', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('tag', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('promotion', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('enable', array('type' => 'checkbox','checked'=>true,'label' => 'Hiển thị', 'value'=>'1', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->