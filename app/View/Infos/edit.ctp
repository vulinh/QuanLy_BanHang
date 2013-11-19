 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Cập nhật thông tin'); ?>
        </div>
    </div>
<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Info.id')), null, __('Bạn có muốn xóa thông tin "%s?"', $this->Form->value('Info.name'))); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    
    <div class="span8">    
            <?php echo $this->Form->create('Info', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('taxID', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('phone', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('address', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('businessLicense', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('fax', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('website', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('field', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('president', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('logo', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->

                    <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

                </fieldset>

            <?php echo $this->Form->end(); ?>
</div>
</div>