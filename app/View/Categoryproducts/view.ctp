<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            LOẠI SẢN PHẨM
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>		<td><strong><?php echo __('Tên loại sản phẩm'); ?></strong></td>
                            <td>
                                <?php echo h($categoryproduct['Categoryproduct']['nameCategoryProduct']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>        
                            <td><strong><?php echo __('Loại cha'); ?></strong></td>
                            <td>
                                <?php
                                    $n = count($parentCategory);
                                    if($n>0){
                                        for($i = $n-1; $i>=0 ;$i--){
                                           echo $this->Html->link($parentCategory[$i]['Categoryproduct']['nameCategoryProduct'], array('controller' => 'categoryproducts', 'action' => 'view', $parentCategory[$i]['Categoryproduct']['id']), array('class' => ''));
                                           echo '<br>';
                                           for($j=1; $j <= ($n-$i)*2 && $i!=0; $j++) echo '+';
                                           echo ' ';                   
                                        } 
                                    }else{
                                        echo 'Không có';
                                    }
                                    ?>
                              
                            </td>
                        </tr>
                        <tr>		<td><strong><?php echo __('Hiển thị'); ?></strong></td>
                            <td>
                                <?php
                                if ($categoryproduct['Categoryproduct']['enable'] == 1) {
                                    $result = 'Có';
                                } else {
                                    $result = 'Không';
                                }
                                echo h($result);
                                ?>
                                &nbsp;
                            </td>
                        </tr>					</tbody>

                    </table>
              
    </div>

</div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'categoryproducts','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>
