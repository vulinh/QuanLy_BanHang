
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group" style = 'list-style:none'>
				<li class="list-group-item"><?php echo $this->Html->link(__('Danh sách đơn vị'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Thêm đơn vị'); ?></h2>

		<div class="units form">
		
			<?php echo $this->Form->create('Unit', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('nameUnit', array('type' => 'text', 'label' => 'Tên đơn vị','class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Thêm mới', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->