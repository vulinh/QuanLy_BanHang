<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            THÔNG TIN SẢN PHẨM
        </div>
    </div>
</div>
<div class="row-fluid">
     <div class="span12">
         <div class="well">
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>        <td><strong><?php echo __('Tên sản phẩm'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['nameProduct']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Loại sản phẩm'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($product['Categoryproducts']['nameCategoryProduct'], array('controller' => 'categoryproducts', 'action' => 'view', $product['Categoryproducts']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Tiền tệ'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($product['Exchangerates']['nameExchangeRate'], array('controller' => 'exchangerates', 'action' => 'view', $product['Exchangerates']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Đơn vị tính'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($product['Units']['nameUnit'], array('controller' => 'units', 'action' => 'view', $product['Units']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Giá'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['price']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Giá bán lẻ'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['retail']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Giá bán sỉ'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['wholesale']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Xuất xứ'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['made_in']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Nhà cung cấp'); ?></strong></td>
        <td>
            <?php echo $this->Html->link($product['Suppliers']['nameSupplier'], array('controller' => 'suppliers', 'action' => 'view', $product['Suppliers']['id']), array('class' => '')); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Ngày nhập'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['import_time']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Thời gian bảo hành'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['warranty_time']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Tag'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['tag']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Khuyến mãi'); ?></strong></td>
        <td>
            <?php echo h($product['Product']['promotion']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Hiển thị'); ?></strong></td>
        <td>
            <?php if($product['Product']['enable'] ==1 )
                $hienthi = 'Có';
            else
                $hienthi = 'Không';
            echo h($hienthi);
             ?>
            &nbsp;
        </td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div>
            </div>
     </div>
 </div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'products','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>