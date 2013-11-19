 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Chi tiết hóa đơn
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Sửa chi tiết hóa đơn'), array('action' => 'edit', $detailbill['Detailbill']['id']), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa chi tiết hóa đơn'), array('action' => 'delete', $detailbill['Detailbill']['id']), array('class' => ''), __('Bạn có muốn xóa chi tiết hóa đơn "%s?"', $detailbill['Detailbill']['id'])); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách chi tiết hóa đơn'), array('action' => 'index'), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Thêm chi tiết hóa đơn'), array('action' => 'add'), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách hóa đơn'), array('controller' => 'bills', 'action' => 'index'), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Thêm hóa đơn'), array('controller' => 'bills', 'action' => 'add'), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index'), array('class' => '')); ?> </li>
                      <li class="list-group-item"><?php echo $this->Html->link(__('Thêm sản phẩm'), array('controller' => 'products', 'action' => 'add'), array('class' => '')); ?> </li>
             
            </ul>
        </div>
    </div>
<div class="span8">
       
         <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>        <td><strong><?php echo __('Sản phẩm'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($detailbill['Products']['nameProduct'], array('controller' => 'products', 'action' => 'view', $detailbill['Products']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Chất lượng'); ?></strong></td>
        <td>
            <?php echo h($detailbill['Detailbill']['quatity']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Giá'); ?></strong></td>
        <td>
            <?php echo h($detailbill['Detailbill']['price']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Hóa đơn'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($detailbill['Bills']['id'], array('controller' => 'bills', 'action' => 'view', $detailbill['Bills']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->
    
</div>
</div>