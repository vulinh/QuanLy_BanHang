<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Loại Hóa Đơn
        </div>
    </div>
</div>

<div class="row-fluid">
<div class="span2 pull-right">
    <?php echo $this->Html->link(__('Thêm loại hóa đơn'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
</div>
</div>
<div class="row-fluid">
<div class="span12">
        <div class="well">
        
		<div class="typebills index">
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('#'); ?></th>
							<th><?php echo $this->Paginator->sort('Tên loại hóa đơn'); ?></th>
							<th class="actions"><?php echo __('Tác vụ'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($typebills as $typebill): ?>
	<tr>
		<td><?php echo h($typebill['Typebill']['id']); ?>&nbsp;</td>
		<td><?php echo h($typebill['Typebill']['nameTypeBill']); ?>&nbsp;</td>
		
        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $typebill['Typebill']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$typebill['Typebill']['nameTypeBill'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $typebill['Typebill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$typebill['Typebill']['nameTypeBill'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $typebill['Typebill']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$typebill['Typebill']['nameTypeBill']), __('Bạn có muốn xóa loại hóa đơn "%s?"', $typebill['Typebill']['nameTypeBill'])); ?>
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