 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Chi tiết hóa đơn
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
         <div class="well">
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
            </div>
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'detailbills','action'=>'index'),array('class'=>'btn btn-success pull-right'));?> 