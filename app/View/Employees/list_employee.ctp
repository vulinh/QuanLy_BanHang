<ul class="nav nav-tabs" id="tab_NV">
  <li class="active"><a href="#not_yet">Nhân Viên Chưa Phân Quyền</a></li>
  <li><a href="#done">Nhân Viên Đã Phân Quyền</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="not_yet">
<?php
foreach ($dataUserNotGivePosition as $userNotGivePosition) {
	echo $userNotGivePosition['User']['username'];
	echo $this->Form->create('Employee', array('controller'=>'employees','action' => 'givePosition','class' => 'form-horizontal'));
	echo $this->Form->checkbox('isManagerSale');echo 'Nhân viên quản lý bán hàng';
	
	echo $this->Form->checkbox('isManagerFinance');echo 'Nhân viên quản lý tài chính';
	echo $this->Form->checkbox('isManagerStock');echo 'Nhân viên quản lý kho';
	echo $this->Form->checkbox('isManagerHuman');echo 'Nhân viên quản lý nhân sự';
	echo $this->Form->input('id',array('value'=>$userNotGivePosition['User']['id']));
	echo $this->Form->text('idSalary',array('value'=>1));
	echo $this->Form->select('idDeparment',$dataDepartment,array('class'=>'span2'));
	echo $this->Form->end('Xác Nhận Phân Quyền Cho '.$userNotGivePosition['User']['username']);
}
?>
</div>
<div class="tab-pane" id="done">
<?php
foreach ($dataUserGavePosition as $userGavePosition) {
?>
	
<?php
if($userGavePosition['User']['username']!='admin'){
	echo '<div class="well well-small">';
	echo $userGavePosition['User']['username'];
	
?>
	<a href='<?php echo "update_position/".$userGavePosition['User']['id']  ?>'>Cập nhật...</a><br/>
	</div>
<?php
}
}
?>
</div>
</div>