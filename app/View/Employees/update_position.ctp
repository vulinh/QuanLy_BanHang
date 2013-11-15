 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT PHÂN QUYỀN TÀI KHOẢN
        </div>
    </div>
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li><?php echo $this->Html->link('Danh sách người dùng',array('controller'=>'stocks','action'=>'add')) ?></li>
            </ul>
        </div>
    </div>
<div class="span8">
<?php
// foreach ($dataUserNotGivePosition as $userNotGivePosition) {
//     echo $userNotGivePosition['User']['username'];
    echo $this->Form->create('Employee', array('controller'=>'employees','action' => 'update_position','class' => 'form-horizontal'));
    echo '<fieldset><legend>Chức Vụ</legend>';
    echo $this->Form->checkbox('isManagerSale');echo 'Nhân viên quản lý bán hàng';
    echo $this->Form->checkbox('isManagerFinance');echo 'Nhân viên quản lý tài chính';
    echo $this->Form->checkbox('isManagerStock');echo 'Nhân viên quản lý kho';
    echo '</fieldset>';
     echo $this->Form->hidden('id');
     echo '<fieldset><legend>Bộ Phận</legend>';
     echo 'Thuộc Bộ Phận';
    echo $this->Form->select('idDeparment',$dataDepartment,array('class'=>'span2'));
    echo '</fieldset>';
    echo $this->Form->end('Xác Nhận Phân Quyền');
// }
?>
</div>
</div>