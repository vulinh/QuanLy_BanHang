 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            Tin nhắn đã gửi
        </div>
    </div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
        <?php echo $this->Html->link(__('Gửi thông báo'), array('action' => 'send'), array('class'=>'btn btn-success')); ?> 
  </div>
</div>

<div class="row-fluid">
     <div class="span12">
        <div class="well">
            <div class="mails index">
            
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php 
                          //  echo '<th>'.$this->Paginator->sort('#').'</th>';
                         //   echo '<th>'.$this->Paginator->sort('idUserSent').'</th>';
                            echo '<th>'.$this->Paginator->sort('Người nhận').'</th>';
                            echo '<th>'.$this->Paginator->sort('Tiêu đề').'</th>';
                        //    echo '<th>'.$this->Paginator->sort('content').'</th>';
                            echo '<th>'.$this->Paginator->sort('Ngày gửi').'</th>';
                        //    echo '<th>'.$this->Paginator->sort('status').'</th>';
                         //   echo '<th class="actions">Tác vụ</th>';
                            ?>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($mails as $mail): ?>
    <tr>
        <?php 
    //    echo '<td>'.h($mail['Mail']['idMail']).'</td>';
    //    echo '<td>'.h($mail['Mail']['idUserSent']).'</td>'; 
        echo '<td>'.$this->Html->link($mail['UsersReceipt']['name'], array('controller' => 'users', 'action' => 'view', $mail['UsersReceipt']['id'])).'</td>';
        echo '<td>'.$this->Html->link(h($mail['Mail']['subject']),array('action' => 'viewsent', $mail['Mail']['idMail'])).'</td>';
    //    echo '<td>'.h($mail['Mail']['content']).'</td>';
        echo '<td>'.h($mail['Mail']['date']).'</td>'; 
    //    echo '<td>'.h($mail['Mail']['status']).'</td>';
        ?>
    <!--    
         <td class="actions"> 
            <?php echo $this->Html->link('<i class="icon-list"></i>', array('action' => 'view', $mail['Mail']['idMail']), array('class'=>'tt', 'escape'=>false, 'data-toggle'=>'tooltip', 'data-original-title'=> 'Xem Chi Tiết '.$mail['Mail']['subject'])); ?>
            <?php echo $this->Html->link('<i class=" icon-pencil"></i>', array('action' => 'edit', $mail['Mail']['idMail']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$mail['Mail']['subject'])); ?>
            <?php echo $this->Form->postLink('<i class=" icon-remove"></i>', array('action' => 'delete', $mail['Mail']['idMail']), array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$mail['Mail']['subject']), __('Bạn có muốn xóa thông báo "%s?"', $mail['Mail']['subject'])); ?>
        </td> 
        -->
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