<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Chi Tiết Hóa Đơn
        </div>
    </div>
</div>

<div class="row-fluid">
<div class="span2 pull-right">
    <?php echo $this->Html->link(__('Thêm chi tiết hóa đơn'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
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
                            <?php echo '<th>'.$this->Paginator->sort('#').'</th>';
                            echo '<th>'.$this->Paginator->sort('Sản phẩm').'</th>';
                            echo '<th>'.$this->Paginator->sort('Chất lượng').'</th>';
                            echo '<th>'.$this->Paginator->sort('Giá').'</th>';
                            echo '<th>'.$this->Paginator->sort('Mã HĐ').'</th>';
                            ?>
                            <th class="actions"><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($detailbills as $detailbill): ?>
    <tr>
        <?php echo '<td>'.h($detailbill['Detailbill']['id']).'</td>';
        echo '<td>'.$this->Html->link($detailbill['Products']['nameProduct'], array('controller' => 'products', 'action' => 'view', $detailbill['Products']['id'])).'</td>';
        echo '<td>'.h($detailbill['Detailbill']['quatity']).'</td>';
        echo '<td>'.h($detailbill['Detailbill']['price']).'</td>';
        echo '<td>'.$this->Html->link($detailbill['Bills']['id'], array('controller' => 'bills', 'action' => 'view', $detailbill['Bills']['id'])).'</td>'; 
        ?>
        
        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $detailbill['Detailbill']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$detailbill['Detailbill']['id'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $detailbill['Detailbill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$detailbill['Detailbill']['id'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $detailbill['Detailbill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$detailbill['Detailbill']['id']), __('Bạn có muốn xóa chi tiết hóa đơn "%s?"', $detailbill['Detailbill']['id'])); ?>
        </td>
    
    </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            
            <p><small>
                <?php
                    echo $this->Paginator->counter(array(
                    'format' => __('Trang {:page}/{:pages} - hiển thị {:current}/{:count} - từ {:start}, đến {:end}')
                    ));
                ?>
            </small></p>

            <ul class="pagination" style = 'list-style:none'>
                <?php
                    echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                    echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
            
        </div><!-- /.index -->
    
    </div>

</div>