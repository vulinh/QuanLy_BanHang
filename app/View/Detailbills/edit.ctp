<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Cập Nhật Chi Tiết Hóa Đơn'); ?>
        </div>
    </div>
<div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
           <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa chi tiết hóa đơn'), array('action' => 'delete', $this->Form->value('Detailbill.id')), null, __('Bạn có muốn xóa chi tiết hóa đơn "%s?"', $this->Form->value('Detailbill.id'))); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách chi tiết hóa đơn'), array('action' => 'index')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách hóa đơn'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm hóa đơn'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm sản phẩm'), array('controller' => 'products', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    <div class="span8">    
    
            <?php echo $this->Form->create('Detailbill', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <label for="DetailillsidProduct">Sản phẩm</label>
                        <?php echo $this->Form->select('idProduct', $products , array('class' => 'form-control')); ?>
                        
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('quatity', array('type' => 'text', 'label' => 'Chất lượng','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('price', array('type' => 'text', 'label' => 'Giá','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="DetailillsidBill">Hóa đơn</label>
                        <?php echo $this->Form->select('idBill', $bills , array('class' => 'form-control')); ?>
                        <?php // echo $this->Form->input('idBill', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->

                    <?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

                </fieldset>

            <?php echo $this->Form->end(); ?>
</div>
</div>