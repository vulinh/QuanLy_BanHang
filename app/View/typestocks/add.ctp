 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           TẠO LOẠI KHO MỚI
        </div>
    </div>
    <div class="span3">
    	<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="active"><?php echo $this->Html->link('Thêm một loại kho mới',array('controller'=>'typestocks','action'=>'add')) ?></li>
              <li><?php echo $this->Html->link('Quay lại',array('controller'=>'typestocks','action'=>'index')) ?></li>
            </ul>
    	</div>
    </div>
<div class="span8">
<?php 
    echo $this->Form->create('Typestock', array('action' => 'add','class' => 'form-horizontal'));
    		echo $this->Form->text('nameTypeStock',array('placeholder'=>'Tên Loại Kho'));
    echo $this->Form->end('Submit');          	
?>
</div>
</div>