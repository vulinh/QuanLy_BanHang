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
                        </tr><tr>		<td><strong><?php echo __('Nhà sản xuất'); ?></strong></td>
                            <td>
                                <?php echo h($categoryproduct['Manufacturer']['nameManufacturer']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Hiển thị'); ?></strong></td>
                            <td>
                                <?php
                                if ($categoryproduct['Categoryproduct']['enable'] == 1) {
                                    $result = 'True';
                                } else {
                                    $result = 'False';
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
