 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           CẬP NHẬT KHO
        </div>
    </div>

    <div class="span3">
    	<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li><?php echo $this->Html->link('Thêm một loại kho mới',array('controller'=>'stocks','action'=>'add')) ?></li>
              <li><?php echo $this->Html->link('Quay lại',array('controller'=>'stocks','action'=>'index')) ?></li>
            </ul>
    	</div>
    </div>
<div class="span8">
<?php 
    echo $this->Form->create('Stock', array('action' => 'edit','class' => 'form-horizontal'));
    echo $this->Form->text('nameStock',array('placeholder'=>'tên kho'));
    echo 'Loại Kho';
    echo $this->Form->select('idTypeStock',$dataTypestock,array('class'=>'span2'));
    echo 'Người quản trị';
    echo $this->Form->select('idUser',$dataUser,array('class'=>'span2'));   		
    echo $this->Form->end('Submit');	
?>
</div>
</div>