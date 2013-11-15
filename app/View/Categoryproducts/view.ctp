
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-3">

        <div class="actions">

            <ul class="list-group" style="list-style: none">			
                <li class="list-group-item"><?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $categoryproduct['Categoryproduct']['id']), array('class' => '')); ?> </li>
                <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $categoryproduct['Categoryproduct']['id']), array('class' => ''), __('Bạn có muốn xóa sản phẩm "%s"?', $categoryproduct['Categoryproduct']['nameCategoryProduct'])); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại sản phẩm'), array('action' => 'index'), array('class' => '')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>

            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .span3 -->

    <div id="page-content" class="col-sm-9">

        <div class="categoryproducts view">

            <h2><?php echo __('Loại Sản phẩm'); ?></h2>

            <div class="table-responsive">
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
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
