<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Cập Nhật Hóa Đơn'); ?>
        </div>
    </div>
<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                 <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa hóa đơn'), array('action' => 'delete', $this->Form->value('Bill.id')), array('class' => ''), __('Bạn có muốn xóa hóa đơn "%s?"', $this->Form->value('Bill.id'))); ?> </li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách hóa đơn'), array('action' => 'index'), array('class' => '')); ?> </li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('Thêm hóa đơn'), array('action' => 'add'), array('class' => '')); ?> </li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại hóa đơn'), array('controller' => 'typebills', 'action' => 'index'), array('class' => '')); ?> </li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('Thêm loại hóa đơn'), array('controller' => 'typebills', 'action' => 'add'), array('class' => '')); ?> </li>
                 <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách người dùng'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
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