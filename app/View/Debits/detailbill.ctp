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
            <?php echo $this->Html->link($bill['typebills']['nameTypeBill'], array('controller' => 'typebills', 'action' => 'view', $bill['typebills']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Ngày lập'); ?></strong></td>
        <td>
            <?php echo h($bill['Debit']['time']); ?>
            &nbsp;
        </td>
</tr>
<tr>        <td><strong><?php echo __('Nhà cung cấp'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($bill['suppliers']['nameSupplier'], array('controller' => 'suppliers', 'action' => 'view', $bill['suppliers']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr>
<tr>        <td><strong><?php echo __('Tổng tiền'); ?></strong></td>
        <td>
            <?php echo h($bill['bills']['total']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Người lập'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($bill['users']['name'], array('controller' => 'users', 'action' => 'view', $bill['users']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Trạng thái'); ?></strong></td>
        <td>
            <?php 
                if($bill['bills']['status'] == 0){
                    echo 'Chưa thanh toán';
                    echo '<br>'.$this->Html->link('Thanh toán', array('controller' => 'debits','action' => 'xacnhanthanhtoan', $id), array('class'=>'')); 
                }else{
                    echo 'Đã thanh toán';
                }
            ?>
            &nbsp;
        </td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div>
            </div>
     </div>
 </div>
 
 
 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Chi Tiết Hóa Đơn
        </div>
    </div>
</div>

<div class="row-fluid">    
<div class="span12">
        <div class="well">

        <div class="detailbills index">
            
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php echo '<th>#</th>';
                            echo '<th>Sản phẩm</th>';
                            echo '<th>Kho</th>';
                            echo '<th>Số lượng</th>';
                            echo '<th>Ngày nhập</th>';
                            ?>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($detailbills as $detailbill): ?>
    <tr>
        <?php echo '<td>'.h($detailbill['Detailstock']['id']).'</td>';
        echo '<td>'.h($detailbill['products']['nameProduct']).'</td>';
        echo '<td>'.h($detailbill['stocks']['nameStock']).'</td>';
        echo '<td>'.h($detailbill['Detailstock']['quatity']).'</td>';
        echo '<td>'.h($detailbill['Detailstock']['timeImport']).'</td>';
        ?>
    </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            
        </div><!-- /.index -->
    
    </div>

</div>

 <?php echo $this->Html->link('Quay Lại',array('controller'=>'bills','action'=>'congno'),array('class'=>'btn btn-success pull-right'));?> 