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
              <li class="list-group-item"><?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $typebill['Typebill']['id']), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $typebill['Typebill']['id']), array('class' => ''), __('Bạn có muốn xóa loại hóa đơn "%s?"', $typebill['Typebill']['nameTypeBill'])); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>
                
            </ul>
        </div>
    </div>
<div class="span8">
       
         <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>        
                            <td><strong><?php echo __('Tên loại hóa đơn'); ?></strong></td>
                            <td>
                            <?php echo h($typebill['Typebill']['nameTypeBill']); ?>
                            &nbsp;
                            </td>
                        </tr>                    
                        </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div>
    
</div>

</div>