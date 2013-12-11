<div class="row-fluid">
	  <div class="span12">
		<ul class="nav nav-tabs" id="tab_NV">
		  <li class="active"><a href="#not_yet">Nhân Viên Chưa Phân Quyền</a></li>
		  <li><a href="#done">Nhân Viên Đã Phân Quyền</a></li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9 offset1">
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
			echo $this->Form->checkbox('isManagerHuman');echo 'Nhân viên quản lý nhân sự';
			echo '</fieldset>';
			echo $this->Form->hidden('id',array('value'=>$userNotGivePosition['User']['id']));
			echo $this->Form->hidden('idSalary',array('value'=>1));
			echo '<fieldset><legend>Bộ Phận</legend>';
			echo 'Thuộc Bộ Phân';
			echo $this->Form->select('idDeparment',$dataDepartment,array('class'=>'span2'));
			echo '</fieldset>';
			echo $this->Form->input('Xác Nhận Phân Quyền Cho '.$userNotGivePosition['User']['username'],array('type'=>'submit','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));
			echo $this->Form->end();
		}
		?>
		</div>
		<div class="tab-pane" id="done">
		<?php
		foreach ($dataUserGavePosition as $userGavePosition) {
		?>
			
		<?php
		if($userGavePosition['users']['username']!='admin'){
			echo '<div class="well well-small">';
			echo '<h3>'.$userGavePosition['users']['username'].'</h3>';
			if($userGavePosition['employees']['isManagerHuman'] == '1'){
				echo '<h4>Nhân viên quản lý nhân sự</h4>';
			}
			elseif($userGavePosition['employees']['isManagerSale'] == '1'){
				echo '<h4>Nhân viên quản lý bán hàng </h4>';
			}
			elseif($userGavePosition['employees']['isManagerStock'] == '1'){
				echo '<h4>Nhân viên quản lý kho </h4>';
			}
			elseif($userGavePosition['employees']['isManagerFinance'] == '1'){
				echo '<h4>Nhân viên quản lý tài chính </h4>';
			}
			echo '<h5>'.$userGavePosition['departments']['nameDepartment'].'</h5>';
			
		?>
			<?php echo $this->Html->link("Cập Nhật",array('controller'=>'employees','action'=>'update_position/'.$userGavePosition['users']['id']),array('class'=>'btn btn-primary pull-right')) ?>
			<br/>
			</div>
		<?php
		}
		}
		?>
		</div>
		</div>
</div>
</div>

<?php echo $this->Html->script('libs/bootstrap-tab');
echo $this->fetch('script');?>
<script>
	$('#tab_NV a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
	
</script>

<script>
	$('#tab_NV a[href="#not_yet"]').tab('show');
</script>