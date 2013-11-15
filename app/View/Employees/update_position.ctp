 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT PHÂN QUYỀN TÀI KHOẢN
        </div>
    </div>
<div class="span10 offset1">
<?php
// foreach ($dataUserNotGivePosition as $userNotGivePosition) {
//     echo $userNotGivePosition['User']['username'];
    echo $this->Form->create('Employee', array('controller'=>'employees','action' => 'update_position','class' => 'form-horizontal'));
    echo $this->Form->checkbox('isManagerSale');echo 'Nhân viên quản lý bán hàng';
    echo $this->Form->checkbox('isManagerFinance');echo 'Nhân viên quản lý tài chính';
    echo $this->Form->checkbox('isManagerStock');echo 'Nhân viên quản lý kho';
     echo $this->Form->hidden('id');
    echo $this->Form->select('idDeparment',$dataDepartment,array('class'=>'span2'));
    echo $this->Form->end('Xác Nhận Phân Quyền');
// }
?>
</div>
</div>