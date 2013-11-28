
<div class="row-fluid">
	<div class="span12">
		<div class="well" style="text-align:center;font-size:30px">
			Sao lưu và phục hồi dữ liệu
		</div>
	</div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
   
  </div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="well">
			<h4>Sao lưu dữ liệu</h4>
            <?php echo $this->Html->link('Sao lưu',array('controller'=>'systems','action'=>'backup'),array('class'=>'btn btn-success')); ?>
		    <p></p>
            <h4>Phục hồi dữ liệu</h4>
             <?php echo $this->Html->link('Phục hồi',array('controller'=>'systems','action'=>'restore'),array('class'=>'btn btn-success')); ?>
        </div>
	
	</div>

</div>