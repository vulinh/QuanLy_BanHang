 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT PHÂN QUYỀN TÀI KHOẢN
        </div>
    </div>
</div>
<div class="row-fluid">   
<div class="span11 offset1">
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
    echo $this->Html->link('Quay Lại',array('controller'=>'users','action'=>'index'),array('class'=>'btn btn-success pull-right'));
    
    echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));
    echo $this->Form->end();
// }
?>
</div>
</div>
