
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-3">

        <div class="actions">

            <ul class="list-group" style="list-style: none">
                <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Categoryproduct.id')), null, __('Bạn có muốn xóa sản phẩm này?')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại sản phẩm'), array('action' => 'index')); ?></li>
            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <h2><?php echo __('Loại sản phẩm'); ?></h2>

        <div class="categoryproducts form">

            <?php echo $this->Form->create('Categoryproduct', array('role' => 'form')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('nameCategoryProduct', array('type' => 'text','label' => 'Tên loại sản phẩm','class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <label for="CategoryproductidManufacture">Nhà sản xuất</label>
                    <?php echo $this->Form->select('idManufacture', $dataManufacturer, array('class' => 'form-control', 'style' => 'margin: 5px 5px 10px 5px;')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('enable', array('type' => 'checkbox','checked'=>true, 'label' => 'Hiển thị' ,'value'=>'1', 'class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Sửa', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->