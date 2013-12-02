<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Công Nợ
        </div>
    </div>
</div>

<div class="row-fluid">
      <div class="span12">
        <ul class="nav nav-tabs" id="tab_NV">
          <li class="active"><a href="#not_yet">Nợ nhà cung cấp</a></li>
          <li><a href="#done">Thu của khách hàng</a></li>
        </ul>
    </div>
</div>

<div class="row-fluid">    
    <div class="span12">
        <div class="tab-content">
          <div class="tab-pane active" id="not_yet">
            <div class="well">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php 
                            echo '<th>Ngày lập</th>';
                            echo '<th>Hóa đơn</th>'; 
                            echo '<th>Loại hóa đơn</th>'; 
                            echo '<th>Người lập</th>';
                            echo '<th>Tổng tiền</th>';
                            echo '<th>Trạng thái</th>'; 
                            ?>
                            <th class="actions"><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listDebit as $Debit): ?>
                        <tr>
                        <?php 
                        echo '<td>'.h($Debit['Debit']['time']).'</td>';
                        echo '<td>'.h($Debit['Debit']['idBill']).'</td>';
                        echo '<td>'.h($Debit['typebills']['nameTypeBill']).'</td>';
                        echo '<td>'.h($Debit['users']['name']).'</td>';
                        echo '<td>'.h($Debit['Debit']['moneyDebit']).'</td>';
                        if($Debit['bills']['status'] == 0){
                            echo '<td>Chưa thanh toán</td>'; 
                        }else{
                            echo '<td>Đã thanh toán</td>'; 
                        }
                        ?> 
                        
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="icon-list"></i>', array('controller' => 'debits','action' => 'detailbill', $Debit['Debit']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết Hóa Đơn '.$Debit['Debit']['idBill'])); ?>
                            <?php 
                                if($Debit['bills']['status'] == 0){
                                    echo $this->Html->link('Thanh toán', array('controller' => 'debits','action' => 'xacnhanthanhtoan', $Debit['Debit']['id']), array('class'=>''));     
                                }
                            ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            </div>
          </div>
          <div class="tab-pane" id="done">
            <div class="well">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php 
                            echo '<th>Ngày lập</th>';
                            echo '<th>Hóa đơn</th>'; 
                            echo '<th>Loại hóa đơn</th>'; 
                            echo '<th>Người lập</th>';
                            echo '<th>Tổng tiền</th>';
                            echo '<th>Trạng thái</th>'; 
                            ?>
                            <th class="actions"><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listDebited as $Debited): ?>
                        <tr>
                        <?php 
                        echo '<td>'.h($Debited['Debited']['time']).'</td>';
                        echo '<td>'.h($Debited['Debited']['idBill']).'</td>';
                        echo '<td>'.h($Debited['typebills']['nameTypeBill']).'</td>';
                        echo '<td>'.h($Debited['users']['name']).'</td>';
                        echo '<td>'.h($Debited['Debited']['moneyDebit']).'</td>';
                        if($Debited['bills']['status'] == 0){
                            echo '<td>Chưa thanh toán</td>'; 
                        }else{
                            echo '<td>Đã thanh toán</td>'; 
                        }
                        ?> 
                        
                        <td class="actions"> 
                            <?php echo $this->Html->link('<i class="icon-list"></i>', array('controller' => 'debiteds','action' => 'detailbill', $Debited['Debited']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết Hóa Đơn '.$Debited['Debited']['idBill'])); ?>
                            
                            <?php 
                                if($Debited['bills']['status'] == 0){
                                    echo $this->Html->link('Thanh toán', array('controller' => 'debiteds','action' => 'xacnhanthanhtoan', $Debited['Debited']['id']), array('class'=>''));     
                                }
                            ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            </div>
          </div>
        </div>

</div>

<?php echo $this->Html->script('libs/bootstrap-tab');
echo $this->fetch('script');?>
<script>
    $(document).ready(function(){
        $('#tab_NV a').click(function (e) {
          e.preventDefault();
          $(this).tab('show');
        });
        
        $('#tab_NV a[href="#not_yet"]').tab('show');   
    });
</script>