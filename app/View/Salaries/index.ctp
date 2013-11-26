<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Bậc lương
        </div>
    </div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link(__('Thêm bậc lương'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
  </div>
</div>

<div class="row-fluid">
     <div class="span12">
        <div class="well">
            <div class="salaries index">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('#'); ?></th>
                            <th><?php echo $this->Paginator->sort('Bậc lương'); ?></th>
                            <th><?php echo $this->Paginator->sort('Giá trị'); ?></th>
                            <th class="actions"><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($salaries as $salary): ?>
    <tr>
        <td><?php echo h($salary['Salary']['id']); ?>&nbsp;</td>
        <td><?php echo h($salary['Salary']['name']); ?>&nbsp;</td>
        <td><?php echo h($salary['Salary']['amount']); ?>&nbsp;</td>
        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $salary['Salary']['id']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$salary['Salary']['name'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $salary['Salary']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$salary['Salary']['name'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $salary['Salary']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$salary['Salary']['name']), __('Bạn có muốn xóa bậc lương "%s?"', $salary['Salary']['name'])); ?>
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
            
        </div>
        </div>
</div>
</div>