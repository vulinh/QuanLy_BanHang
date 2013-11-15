
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group" style = 'list-style:none'>
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Exchangerate.id')), null, __('Bạn có muốn xóa thông tin của "%s"?', $this->Form->value('Exchangerate.nameExchangeRate'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Danh sách ngoại tệ'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Cập nhật ngoại tệ'); ?></h2>

		<div class="exchangerates form">
		
			<?php echo $this->Form->create('Exchangerate', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('nameExchangeRate', array('type' => 'text','label' => 'Tên ngoại tệ', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->