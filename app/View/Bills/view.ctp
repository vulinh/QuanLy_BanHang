 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Loại Hóa Đơn
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                             <li class="list-group-item"><?php echo $this->Html->link(__('Sửa hóa đơn'), array('action' => 'edit', $bill['Bill']['id']), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa hóa đơn'), array('action' => 'delete', $bill['Bill']['id']), array('class' => ''), __('Bạn có muốn xóa hóa đơn "%s?"', $bill['Bill']['id'])); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách hóa đơn'), array('action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Thêm hóa đơn'), array('action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại hóa đơn'), array('controller' => 'typebills', 'action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Thêm loại hóa đơn'), array('controller' => 'typebills', 'action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách người dùng'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
           
            </ul>
        </div>
    </div>
<div class="span8">
       
         <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                       <tr>        <td><strong><?php echo __('Loại hóa đơn'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($bill['Typebills']['nameTypeBill'], array('controller' => 'typebills', 'action' => 'view', $bill['Typebills']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Ngày lập'); ?></strong></td>
        <td>
            <?php echo h($bill['Bill']['time']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Tổng tiền'); ?></strong></td>
        <td>
            <?php echo h($bill['Bill']['total']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Người lập'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($bill['Users']['name'], array('controller' => 'users', 'action' => 'view', $bill['Users']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Trạng thái'); ?></strong></td>
        <td>
            <?php echo h($bill['Bill']['status']); ?>
            &nbsp;
        </td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->
    
</div>
</div>