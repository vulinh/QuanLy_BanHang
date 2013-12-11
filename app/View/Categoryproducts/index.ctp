<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('LOẠI SẢN PHẨM'); ?>
        </div>
    </div>
</div>
<div class="row-fluid">
<div class="span2 pull-right">
    <?php echo $this->Html->link('Thêm Loại Hàng Hóa',array('action'=>'add'),array('class'=>'btn btn-success')) ?>
</div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('#'); ?></th>
                            <th><?php echo $this->Paginator->sort('Tên loại sản phẩm'); ?></th>
                            
                            <th><?php echo $this->Paginator->sort('Hiển thị'); ?></th>
                            <th><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categoryproducts as $categoryproduct): ?>
                            <tr>
                                <td><?php echo h($categoryproduct['Categoryproduct']['id']); ?>&nbsp;</td>
                                <td><?php
                                    $n = count($categoryproduct['parentCategory']); 
                                    if($n>0){
                                        for($i = $n-1; $i>=0 ;$i--){
                                           echo $categoryproduct['parentCategory'][$i]['Categoryproduct']['nameCategoryProduct'];
                                           echo ' &larr; ';                   
                                        } 
                                    }
                                echo h($categoryproduct['Categoryproduct']['nameCategoryProduct']); 
                                
                                ?>&nbsp;</td>
                                
                                <td><?php
                                    if ($categoryproduct['Categoryproduct']['enable'] == 1) {
                                        $result = 'Có';
                                    } else {
                                        $result = 'Không';
                                    }
                                    echo h($result);
                                    ?>&nbsp;</td>
                                
                                <td class="actions">
                               <?php echo $this->Html->link('<i class="icon-list"></i>',array('controller'=>'categoryproducts','action'=>'view/'.$categoryproduct['Categoryproduct']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$categoryproduct['Categoryproduct']['nameCategoryProduct'])); ?>
                               <?php echo $this->Html->link('<i class=" icon-pencil"></i>',array('controller'=>'categoryproducts','action'=>'edit/'.$categoryproduct['Categoryproduct']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$categoryproduct['Categoryproduct']['nameCategoryProduct'])); ?>
                               <?php echo $this->Html->link('<i class=" icon-remove"></i>',array('controller'=>'categoryproducts','action'=>'delete/'.$categoryproduct['Categoryproduct']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$categoryproduct['Categoryproduct']['nameCategoryProduct']));?>
                                
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

            <ul class="pagination" style="list-style: none">
                <?php
                echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
        </div>
    </div>

</div>