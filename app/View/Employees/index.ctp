
<ul class="nav nav-tabs" id="tab_NV">
  <li class="active"><a href="#not_yet">Nhân Viên Chưa Phân Quyền</a></li>
  <li><a href="#done">Nhân Viên Đã Phân Quyền</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="not_yet">
<?php
foreach ($dataUserNotGivePosition as $userNotGivePosition) {
	echo '<h1>'.$userNotGivePosition['User']['username'].'</h1>';
	echo $this->Form->create('Employee', array('controller'=>'employees','action' => 'givePosition','class' => 'form-horizontal'));
	echo '<fieldset><legend>Chức Vụ</legend>';
	echo $this->Form->checkbox('isManagerSale');echo 'Nhân viên quản lý bán hàng';
	echo $this->Form->checkbox('isManagerFinance');echo 'Nhân viên quản lý tài chính';
	echo $this->Form->checkbox('isManagerStock');echo 'Nhân viên quản lý kho';
	echo '</fieldset>';
	echo $this->Form->hidden('idUser',array('value'=>$userNotGivePosition['User']['id']));
	echo '<fieldset><legend>Bộ Phận</legend>';
	echo 'Thuộc Bộ Phân';
	echo $this->Form->select('idDeparment',$dataDepartment,array('class'=>'span2'));
	echo '</fieldset>';
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
	echo '<h3>'.$userGavePosition['User']['username'].'</h3>';
	
?>
	<?php echo $this->Html->link("Cập Nhật",array('controller'=>'employees','action'=>'update_position/'.$userGavePosition['User']['id'])) ?>
	<br/>
	</div>
<?php
}
}
?>
</div>
</div>

