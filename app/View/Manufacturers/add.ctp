
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
                            <li class="list-group-item" style="list-style: none">
                                    <?php echo $this->Html->link(__('Danh sách nhà cung cấp'), array('action' => 'index'), array('class' => 'btn btn-default pull-right','style' => 'margin-top: 5px')); ?>
                                </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Thêm nhà cung cấp'); ?></h2>

		<div class="manufacturers form">
		
			<?php echo $this->Form->create('Manufacturer', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('nameManufacturer', array('label' => 'Tên nhà cung cấp', 'type' => 'text','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('logo', array('label' => 'URL logo', 'type' => 'text','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('enable', array('type' => 'checkbox','checked'=>true, 'value'=>'1', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Thêm', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->