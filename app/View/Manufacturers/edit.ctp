
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Manufacturer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Manufacturer.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Manufacturers'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Manufacturer'); ?></h2>

		<div class="manufacturers form">
		
			<?php echo $this->Form->create('Manufacturer', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('nameManufacturer', array('label' => 'Tên nhà cung cấp', 'type' => 'text','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('logo', array('label' => 'URL logo', 'type' => 'text','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('enable', array('type' => 'checkbox', 'value'=>'1', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->