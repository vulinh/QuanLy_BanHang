
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group" style = "list-style:none">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Supplier.id')), null, __('Bạn có muốn xóa thông tin của "%s"?', $this->Form->value('Supplier.nameSupplier'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('Danh sách nhà cung cấp'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Sửa thông tin nhà cung cấp'); ?></h2>

		<div class="suppliers form">
		
			<?php echo $this->Form->create('Supplier', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
                        <?php echo $this->Form->input('nameSupplier', array('type' => 'text','label' => 'Tên nhà cung cấp','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('phone', array('label' => 'Điện thoại','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('fax', array('type' => 'text','label' => 'Fax','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('mobile', array('type' => 'text','label' => 'Di động','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('label' => 'Email','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('accountBank', array('type' => 'text','label' => 'Tài khoản ngân hàng','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('bank', array('type' => 'text','label' => 'Tên ngân hàng','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('website', array('type' => 'tel','label' => 'Website','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('nickYahoo', array('type' => 'tel','label' => 'Nick yahoo','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('nickSkype', array('type' => 'tel','label' => 'Nick Skype','class' => 'form-control')); ?>
                    </div><!-- .form-group -->

					<?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->