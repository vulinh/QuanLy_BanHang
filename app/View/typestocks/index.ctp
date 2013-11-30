<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           LOẠI KHO
        </div>
    </div>
</div>
<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Loại Kho Mới',array('controller'=>'typestocks','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>
<div class="row-fluid">
     <div class="span12">
    	<div class="well">
    		<table class="table table-hover">
	    		<thead>
	                <tr>
	                <th>#</th>
	                <th>Tên Loại Kho</th>
	                <th colspan="3" style="text-align: center;">Tác vụ</th>
	                </tr>
	            </thead>
              	<tbody>
             
              
	    		<?php foreach ($dataTypestock as $valueTypestock) {
	    		
				echo '<tr>';
				echo '<td>'.$valueTypestock['Typestock']['id'].'</td>';
				echo '<td>'.$valueTypestock['Typestock']['nameTypeStock'].'</td>';
				// echo '<td style="width:65px">'.$this->Html->link('Cập Nhật',array('controller'=>'typestocks','action'=>'edit/'.$valueTypestock['Typestock']['id'])).'</td>';
				// echo '<td>'.$this->Html->link('Xóa',array('controller'=>'typestocks','action'=>'delete/'.$valueTypestock['Typestock']['id'])).'</td>';

        // echo '<td>'.$this->Html->link('<i class="icon-list"></i>',array('controller'=>'typestocks','action'=>'view/'.$valueTypestock['Typestock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$valueTypestock['Typestock']['nameTypeStock']));

        echo '<td>'.$this->Html->link('<i class=" icon-pencil"></i>',array('controller'=>'typestocks','action'=>'edit/'.$valueTypestock['Typestock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$valueTypestock['Typestock']['nameTypeStock']));

        echo '&nbsp;'.$this->Html->link('<i class=" icon-remove"></i>',array('controller'=>'typestocks','action'=>'delete/'.$valueTypestock['Typestock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$valueTypestock['Typestock']['nameTypeStock'])).'</td>';

				echo '</tr>';
	    		
	    		} 
	    		?>
    			</tbody>
    		</table>
        </div>
</div>
</div>