<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Sản Phẩm
        </div>
    </div>
</div>
<div class="row-fluid">
<div class="span2 pull-right">
	<?php echo $this->Html->link('Tạo Sản Phẩm Mới',array('controller'=>'products','action'=>'add'),array('class'=>'btn btn-success')) ?>
</div>
</div>

<div class="row-fluid">
 	<div class="span12">
        <div class="well">
		<div class="products index">
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-advance table-hover">
					<thead>
						<tr>
							<?php 
                                echo '<th>'.$this->Paginator->sort('#').'</th>';
							    echo '<th>'.$this->Paginator->sort('Tên sản phẩm').'</th>';
							    echo '<th>'.$this->Paginator->sort('Loại sản phẩm').'</th>';
            //                  echo '<th>'.$this->Paginator->sort('Exchangerates').'</th>'; 
            //                  echo '<th>'.$this->Paginator->sort('Units').'</th>';
							    echo '<th>'.$this->Paginator->sort('Giá').'</th>';
			//				    echo '<th>'.$this->Paginator->sort('retail').'</th>'; 
			//				    echo '<th>'.$this->Paginator->sort('wholesale').'</th>'; 
			//				    echo '<th>'.$this->Paginator->sort('Xuất xứ').'</th>'; 
							    echo '<th>'.$this->Paginator->sort('Nhà cung cấp').'</th>';
							    echo '<th>'.$this->Paginator->sort('import_time').'</th>'; 
			//				    echo '<th>'.$this->Paginator->sort('warranty_time').'</th>'; 
			//				    echo '<th>'.$this->Paginator->sort('tag').'</th>'; 
			//				    echo '<th>'.$this->Paginator->sort('promotion').'</th>'; 
							    echo '<th>'.$this->Paginator->sort('Hiển thị').'</th>';
                                ?> 
							    <th class="actions"><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($products as $product): ?>
	<tr>
		<?php 
            echo '<td>'.h($product['Product']['id']).'</td>';
		    echo '<td>'.h($product['Product']['nameProduct']).'</td>';
		    echo '<td>'.$this->Html->link($product['Categoryproducts']['nameCategoryProduct'], array('controller' => 'categoryproducts', 'action' => 'view', $product['Categoryproducts']['id'])).'</td>';
	//	    echo '<td>'.$this->Html->link($product['Exchangerates']['nameExchangeRate'], array('controller' => 'exchangerates', 'action' => 'view', $product['Exchangerates']['id'])).'</td>';
	//	    echo '<td>'.$this->Html->link($product['Units']['nameUnit'], array('controller' => 'units', 'action' => 'view', $product['Units']['id'])).'</td>';
		    echo '<td>'.h($product['Product']['price']).'</td>';
	//	    echo '<td>'.h($product['Product']['retail']).'</td>';
	//	    echo '<td>'.h($product['Product']['wholesale']).'</td>'; 
	//	    echo '<td>'.h($product['Product']['made_in']).'</td>';
		    echo '<td>'.$this->Html->link($product['Suppliers']['nameSupplier'], array('controller' => 'suppliers', 'action' => 'view', $product['Suppliers']['id'])).'</td>';
		    echo '<td>'.h($product['Product']['import_time']).'</td>';
	//	    echo '<td>'.h($product['Product']['warranty_time']).'</td>';
	//	    echo '<td>'.h($product['Product']['tag']).'</td>';
	//	    echo '<td>'.h($product['Product']['promotion']).'</td>';
            if($product['Product']['enable'] ==1 )
                $hienthi = 'true';
            else
                $hienthi = 'false';
		    echo '<td>'.h($hienthi).'</td>';
            ?>
		<td class="actions"> 
			<?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $product['Product']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$product['Product']['nameProduct'])); ?>
			<?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $product['Product']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$product['Product']['nameProduct'])); ?>
			<?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $product['Product']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$product['Product']['nameProduct']), __('Bạn có muốn xóa sản phẩm "%s?"', $product['Product']['nameProduct'])); ?>
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
					// echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					// echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
        </div>
</div>

</div>
