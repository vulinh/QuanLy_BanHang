 <div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           TẠO LOẠI KHO MỚI
        </div>
    </div>
</div>
    <!-- <div class="span3">
    	<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li class="active"><?php echo $this->Html->link('Thêm một loại kho mới',array('controller'=>'typestocks','action'=>'add')) ?></li>
              <li><?php echo $this->Html->link('Quay lại',array('controller'=>'typestocks','action'=>'index')) ?></li>
            </ul>
    	</div>
    </div> -->
 <div class="row-fluid">
<div class="span12">
<?php 
    echo $this->Form->create('Typestock', array('action' => 'add','class' => 'form-horizontal'));
?>
    <table class="table table-striped table-bordered table-advance table-hover">
      <tr>
        <td style="width:50%; text-align:center;font-size:15px">
          Tên Loại Kho
        </td>
        <td style="width:50%; text-align:center;font-size:15px">
          <?php
        echo $this->Form->text('nameTypeStock',array('placeholder'=>'Tên Loại Kho'));?>
        </td>
      </tr>
      </table>
      <?php echo $this->Html->link('Quay Lại',array('controller'=>'typestocks','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>

      <?php echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px'));?>
    
    <?php echo $this->Form->end(); ?>       	

</div>
</div>