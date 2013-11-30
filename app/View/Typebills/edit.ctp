<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Cập nhật Loại Hóa Đơn'); ?>
        </div>
    </div>
<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Typebill.id')), null, __('Bạn có muốn xóa loại hóa đơn "%s?"', $this->Form->value('Typebill.nameTypeBill'))); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    
    <div class="span8">    
            <?php echo $this->Form->create('Typebill', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('nameTypeBill', array('type' => 'text', 'label' => 'Tên loại hóa đơn','class' => 'form-control')); ?>
                    </div><!-- .form-group -->

                    <?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

                </fieldset>

            <?php echo $this->Form->end(); ?>
</div>
</div>