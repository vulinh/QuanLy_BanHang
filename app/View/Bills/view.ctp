<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Hóa Đơn
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
         <div class="well">
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
            </div>
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'bills','action'=>'index'),array('class'=>'btn btn-success pull-right'));?> 