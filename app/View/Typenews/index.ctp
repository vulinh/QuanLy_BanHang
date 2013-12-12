<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Loại Hóa Đơn
        </div>
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
                            <th><?php echo $this->Paginator->sort('Tên loại'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($typenews as $typenews): ?>
    <tr>
        <td><?php echo h($typenews['Typenews']['id']); ?>&nbsp;</td>
        <td><?php echo h($typenews['Typenews']['name']); ?>&nbsp;</td>
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