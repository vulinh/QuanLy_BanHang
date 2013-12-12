<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Tin Tức Project
        </div>
    </div>
</div>

<div class="row-fluid">
<div class="span2 pull-right">
    <?php echo $this->Html->link(__('Thêm tin mới'), array('action' => 'add', 1), array('class' => 'btn btn-success')); ?>
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
                            <th><?php echo $this->Paginator->sort('tiêu đề'); ?></th>
                            <th><?php echo $this->Paginator->sort('Người tạo'); ?></th>
                            <th><?php echo $this->Paginator->sort('Thời gian'); ?></th>
                            <th><?php echo $this->Paginator->sort('Lượt xem'); ?></th>
                            <th><?php echo $this->Paginator->sort('Hiển thị'); ?></th>
                            <th class="actions"><?php echo __('Tác vụ'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($news as $news): ?>
    <tr>
        <td><?php echo h($news['News']['id']); ?>&nbsp;</td>
        <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
        <td><?php echo h($news['users']['name']); ?>&nbsp;</td>
        <td><?php echo h($news['News']['time']); ?>&nbsp;</td>
        <td><?php echo h($news['News']['view']); ?>&nbsp;</td>
        <td><?php 
            if($news['News']['status'] == 1){
                echo 'Có';   
            }else{
                echo 'Không';
            } 
        ?>&nbsp;</td>
        
        <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $news['News']['id'],1), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$news['News']['title'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $news['News']['id'], 1), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$news['News']['title'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $news['News']['id']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$news['News']['title']), __('Bạn có muốn xóa tin tức "%s?"', $news['News']['title'])); ?>
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

            <ul class="pagination" style ="list-style:none;">
                <?php
                    echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                    echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
            
        </div><!-- /.index -->
    
    </div>

</div>