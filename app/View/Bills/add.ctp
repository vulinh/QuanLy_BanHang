<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Thêm Hóa Đơn'); ?>
        </div>
    </div>
<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('List Typebills'), array('controller' => 'typebills', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('New Typebills'), array('controller' => 'typebills', 'action' => 'add')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    <div class="span8">    
            <?php echo $this->Form->create('Bill', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <label for="BillsidTypeBill">Loại hóa đơn</label>
                        <?php echo $this->Form->select('idTypeBill', $typeBills , array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('time', array('label' => 'Ngày lập','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('total', array('type' => 'text','label' => 'Tổng tiền','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('idUser', array('type' => 'text','label' => 'Người tạo','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('type' => 'text','label' => 'Trạng thái','class' => 'form-control')); ?>
                    </div><!-- .form-group -->

                    <?php echo $this->Form->submit('Thêm mới', array('class' => 'btn btn-large btn-primary')); ?>

                </fieldset>

            <?php echo $this->Form->end(); ?>
</div>
</div>