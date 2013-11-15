
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-3">

        <div class="actions">

            <ul class="list-group" style="list-style: none">			
                <li class="list-group-item"><?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $manufacturer['Manufacturer']['id']), array('class' => '')); ?> </li>
                <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), array('class' => ''), __('Bạn có muốn xóa nhà sản xuất này?')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index'), array('class' => '')); ?> </li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm mới'), array('action' => 'add'), array('class' => '')); ?> </li>

            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .span3 -->

    <div id="page-content" class="col-sm-9">

        <div class="manufacturers view">

            <h2><?php echo __('Nhà sản xuất'); ?></h2>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                       
                        <tr>		<td><strong><?php echo __('Tên nhà sản xuất'); ?></strong></td>
                            <td>
                                <?php echo h($manufacturer['Manufacturer']['nameManufacturer']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>		<td><strong><?php echo __('URL logo'); ?></strong></td>
                            <td>
                                <?php echo h($manufacturer['Manufacturer']['logo']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>		<td><strong><?php echo __('Trạng thái'); ?></strong></td>
                            <td>
                                <?php echo h($manufacturer['Manufacturer']['enable']); ?>
                                &nbsp;
                            </td>
                        </tr>					</tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
