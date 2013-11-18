<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Sản Phẩm
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
                <li class="list-group-item"><?php echo $this->Form->postLink(__('Xóa sản phẩm'), array('action' => 'delete', $this->Form->value('Product.id')), array('class' => ''), __('Bạn có muốn xóa sản phẩm "%s?"', $this->Form->value('Product.nameProduct'))); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm sản phẩm'), array('action' => 'add'), array('class' => '')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách loại sản phẩm'), array('controller' => 'categoryproducts', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm loại sản phẩm'), array('controller' => 'categoryproducts', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách nhà cung cấp'), array('controller' => 'suppliers', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm nhà cung cấp'), array('controller' => 'suppliers', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Danh sách đơn vị'), array('controller' => 'units', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm đơn vị'), array('controller' => 'units', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Danhs sách tiền tệ'), array('controller' => 'exchangerates', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('Thêm tiền tệ'), array('controller' => 'exchangerates', 'action' => 'add'), array('class' => '')); ?></li> 
            </ul>
        </div>
    </div>

<div class="span8">
		<div class="products form">
		
			<?php echo $this->Form->create('Product', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                        <?php echo $this->Form->input('nameProduct', array('type' => 'text','label' => 'Tên sản phẩm','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                                                <label for="ProductIdCategoryProduct">Loại sản phẩm</label>
                        <?php echo $this->Form->select('idCategoryProduct', $categoryproducts , array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                                                <label for="ProductidExchangeRate">id ExchangeRate</label>
                                                <?php echo $this->Form->select('idExchangeRate', $exchangerates , array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                                            <label for="ProductidUnit">id Unit</label>
                                                <?php echo $this->Form->select('idUnit', $units , array('class' => 'form-control')); ?>
                        
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('price', array('type' => 'text','label' => 'Giá','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('retail', array('type' => 'text','label' => 'Giá bán lẻ','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('wholesale', array('type' => 'text','label' => 'Giá bán sỉ','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('made_in', array('type' => 'text','label' => 'Xuất xứ','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                                                <label for="ProductidSupplier">Nhà cung cấp</label>
                                                <?php echo $this->Form->select('idSupplier', $suppliers , array('class' => 'form-control')); ?>
                        
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('import_time', array('label' => 'Ngày nhập','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
        
                    <div class="form-group">
                        <?php echo $this->Form->input('warranty_time', array('type' => 'text','label' => 'Thời gian bảo hành','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('tag', array('type' => 'text','label' => 'Tag','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('promotion', array('type' => 'text','label' => 'Xúc tiến','class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('enable', array('type' => 'checkbox','checked'=>true,'label' => 'Hiển thị', 'value'=>'1', 'class' => 'form-control')); ?>
                    </div><!-- .form-group -->

					<?php echo $this->Form->submit('Cập nhật', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div>

</div>